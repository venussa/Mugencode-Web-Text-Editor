<?php
	
class system_core extends load {

	private $_pointers = array();

    private $_TextInput;

    public function __construct(){

        $this->_TextInput = explode(" ", "sebutkan bagian tubuh manusia yang berwarna merah");


    }

    public function home(){

        foreach ($this->_TextInput as $key => $value) {

            $clean = str_replace($value." ", null, implode(" ",$this->_TextInput));
            $clean = explode(" ", $clean);

            $shuffle = $this->permutations($clean, 2);

            $data[$value] = $shuffle;

      }

      header_content_type("json");
      echo json_encode($data);

    }

	public function clusterData(){

        $data_cluster = array_chunk($this->_TextInput, 4);

        foreach($data_cluster as $key => $value)

            for($i = 1; $i <= count($value); $i++){

                $proccess["cluster_".$key]["category_".$i] = 
                    $this->permutations($value, $i);

            }
            

         foreach($proccess as $key => $val)
            foreach($val as $key1 => $val1)
                foreach ($val1 as $key2 => $val2) 
                    $build[$key][$key1][] = implode(" ", $val2);

        return $build;

	}

    function matchData(){

        $data = $this->generate_database();

        foreach($data as $key => $val)
            foreach($this->clusterData() as $key1 => $val1)
                foreach($val1 as $key2 => $val2)
                    foreach($val2 as $key3 => $val3)
                        foreach($val["sub_data"] as $index => $result)

                            if(strpos($result, $val3)) {

                                $which_block[$val["main_data"]][$result] = 
                                (isset($which_block[$val["main_data"]][$result])) ?
                                ($which_block[$val["main_data"]][$result] + 1) : 1;

                            }

        return (isset($which_block)) ? $which_block : false;

    }

	private function combinations(array $set, $subset_size = null){

        $set_size = count($set);

        if (is_null($subset_size))
            $subset_size = $set_size;

        if ($subset_size >= $set_size) return array($set);
        else if ($subset_size == 1) return array_chunk($set, 1);
        else if ($subset_size == 0) return array();
        

        $combinations = array();
        $set_keys = array_keys($set);
        $this->_pointers = array_slice(array_keys($set_keys), 0, $subset_size);

        $combinations[] = $this->getCombination($set);
        while ($this->advancePointers($subset_size - 1, $set_size - 1))
            $combinations[] = $this->getCombination($set);
        
        return $combinations;
    }

    private function advancePointers($pointer_number, $limit){

        if ($pointer_number < 0) return false;

        if ($this->_pointers[$pointer_number] < $limit) {

            $this->_pointers[$pointer_number]++;
            return true;

        } else {

            if ($this->advancePointers($pointer_number - 1, $limit - 1)) {

                $this->_pointers[$pointer_number] =
                    $this->_pointers[$pointer_number - 1] + 1;
                return true;

            } else {

                return false;

            }
        }
    }

    private function getCombination($set){

        $set_keys = array_keys($set);
        $combination = array();

        foreach ($this->_pointers as $pointer)
            $combination[$set_keys[$pointer]] = $set[$set_keys[$pointer]];

        return $combination;
    } 
   
    private function permutations(array $set, $subset_size = null){

        $combinations = $this->combinations($set, $subset_size);
        $permutations = array();

        foreach ($combinations as $combination)
            $permutations = array_merge($permutations, $this->findPermutations($combination));
        
        return $permutations;

    }

    private function findPermutations($set){

        if (count($set) <= 1) return array($set);

        $permutations = array();
        list($key, $val) = $this->array_shift_assoc($set);
        $sub_permutations = $this->findPermutations($set);

        foreach ($sub_permutations as $permutation)
            $permutations[] = array_merge(array($key => $val), $permutation);

        $set[$key] = $val;
        $start_key = $key;
        $key = $this->firstKey($set);

        while ($key != $start_key) {

            list($key, $val) = $this->array_shift_assoc($set);
            $sub_permutations = $this->findPermutations($set);

            foreach ($sub_permutations as $permutation)
                $permutations[] = array_merge(array($key => $val), $permutation);

            $set[$key] = $val;
            $key = $this->firstKey($set);
        }

        return $permutations;
    }  

    private function array_shift_assoc(array &$array){

        foreach ($array as $key => $val) {
            unset($array[$key]);
            break;
        }

        return array($key, $val);

    }

    private function firstKey($array){

        foreach ($array as $key => $val) break;

        return $key;
    }

    private function generate_database(){

        $data = $this->db_select("data");

        foreach($data as $key => $val){

            if(is_numeric($key)){

                $build[$key]["main_data"] = $val->main_data;
                $build[$key]["sub_data"] = 
                array_map('trim',array_filter(explode(",", $val->sub_data)));

            }

        }

        return $build;

    }

}