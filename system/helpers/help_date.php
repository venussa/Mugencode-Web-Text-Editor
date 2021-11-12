<?php

/**
 * IamRoot
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018 - 2022, Iamroot Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	IamRoot
 * @author	Shigansina
 * @link	https://iam-root.tech
 * @since	Version 1.0.0
 * @filesource
 */

if(!function_exists("dateStamp")){

	/**
	 * Date Stamp
	 *
	 * Set deafult date or time stamp Value
	 *
	 * @param	array
	 * @param	Int
	 * @return	array
	 */

	function dateStamp(){

		return json_decode(json_encode(array(
		
			'year' 	=> 31556926, 
			'month' => 2629744, 
			'week'	=> 604800, 
			'day' 	=> 86400, 
			'hour' 	=> 3600, 
			'minute'=> 60
		)));

	}

}

if(!function_exists("timeHistory")){

	/**
	 * TImehistory
	 *
	 * TIme count Down System
	 *
	 * @param	Int
	 * @return	String
	 */

	function timeHistory($timestamp = null,$option = false,$get_result = null){
            
		if(empty($timestamp)){

			$timestamp = time();

		}

        $timestamp      = (int) $timestamp;
        $current_time   = time();
        $diff           = $current_time - $timestamp;

        if($option == false){
	       
	        if ($diff == 0)
	        {
	            return 'Just Now';
	        } 

	        if ($diff < 60)
	        {
	            return $diff == 1 ? $diff . ' Second' : $diff . ' Seconds Ago';
	        }      


	        if ($diff >= 60 && $diff < dateStamp()->hour)
	        {
	            $diff = floor($diff/dateStamp()->minute);
	            return $diff == 1 ? $diff . ' Minutes Ago' : $diff . ' Minutes Ago';
	        }  


	        if ($diff >= dateStamp()->hour && $diff < dateStamp()->day)
	        {
	            $diff = floor($diff/dateStamp()->hour);
	            return $diff == 1 ? $diff . ' Hours Ago' : $diff . ' Hours Ago ';
	        }   


	        if ($diff >= dateStamp()->day && $diff < dateStamp()->week)
	        {
	            $diff = floor($diff/dateStamp()->day);
	            return $diff == 1 ? $diff . ' Days Ago' : $diff . ' Days Ago';
	        }   


	        if ($diff >= dateStamp()->week && $diff < dateStamp()->month)
	        {
	            $diff = floor($diff/dateStamp()->week);
	            return $diff == 1 ? $diff . ' Week Ago' : $diff . ' Weeks Ago';
	        }   


	        if ($diff >= dateStamp()->month && $diff < dateStamp()->year)
	        {
	            $diff = floor($diff/dateStamp()->month);
	            return $diff == 1 ? $diff . ' Month Ago' : $diff . ' Month Ago';
	        }   


	        if ($diff >= dateStamp()->year)
	        {
	            $diff = floor($diff/dateStamp()->year);
	            return $diff == 1 ? $diff . ' Years Ago' : $diff . ' Years Ago';
	        }

	    }else{

	    	switch($get_result){

	    		case "second":

	    			return $diff;

	    		break;

	    		case "minute":

	    			return floor($diff/dateStamp()->minute);

	    		break;

	    		case "hour":

	    			return floor($diff/dateStamp()->hour);

	    		break;

	    		case "day":

	    			return floor($diff/dateStamp()->day);

	    		break;

	    		case "week":

	    			return floor($diff/dateStamp()->week);

	    		break;

	    		case "month":

	    			return floor($diff/dateStamp()->month);

	    		break;

	    		case "year":

	    			return floor($diff/dateStamp()->year);

	    		break;
	    	}


	    }
    }

}

if(!function_exists("monthConvert")){

	/**
	 * TIme converter
	 *
	 * Conver month as Int or As String
	 *
	 * @param	Mixed
	 * @return	mixed
	 */

	function monthConvert($date,$act = null){

		$date = strtolower($date);

		$data = array(

			1 => array("january","jan"),
			2 => array("february","feb"),
			3 => array("march","mar"),
			4 => array("april","apr"),
			5 => array("may","may"),
			6 => array("june","jun"),
			7 => array("july","jul"),
			8 => array("august","aug"),
			9 => array("september","sep"),
			10 => array("october","oct"),
			11 => array("november","nov"),
			12 => array("december","dec"),

		);

		$args = $date;

		if(!is_numeric($date)){

			foreach($data as $key => $val){

				$args = preg_replace(
				
					"/".implode("|",$val)."/",
					$key,
					$args

				);

			}

			return $args;

		}else{

			for($i = count($data) ; $i > 0; $i --){

				if($act == 1){

					$args = str_replace($i,$data[$i][1],$args);

				}else{

					$args = str_replace($i,$data[$i][0],$args);

				}

			}

			return $args;

		}

	}

}
