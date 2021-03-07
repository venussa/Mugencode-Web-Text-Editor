<?php 

class proccess_add extends load{

	public function __construct(){

		foreach($_POST as $key => $val){

			$query[] = $key;
			$query2[] = "'".$val."'";

		}

		$this->db_query("insert into list_mahasiswa (".implode(",", $query).") values (".implode(",", $query2).")");
		header("location:".HomeUrl()."/action/detail");

	}

}