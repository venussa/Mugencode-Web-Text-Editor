<?php

namespace application\config;

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

use application\config\autoload;
use application\config\routes;

/**
 * autoload Class
 *
 * This class for load all file config and system
 * and gave some id with namespace
 *
 * @package		application
 * @subpackage	config
 * @category	site config
 * @author		IamRoot Team
 */

class autoload {

	/**
	 * get main controller path
	 *
	 * @var string
	 */

	public $main_controller;

	// --------------------------------------------------------------------

    /**
     * dirsystem
     *
     * Register all path component from framework
     *
     * @param void
     * @return string
     * @return array
     */

	private function dirsystem(){
		
		// autoload package
		return array(
			
			"helpers"  		=> SERVER."/system/helpers/*.php",

			"config"   		=> SERVER."/application/config/*.php",

			"core" 			=> SERVER."/system/core/*.php",

			"library"		=> SERVER."/system/library/*.php",

		);
	}

	// --------------------------------------------------------------------

    /**
     * load_data
     *
     * Get Specific path after filtering
     *
     * @param void
     * @return string
     * @return array
     */

	private function load_data(){

		//disallow to load
		$disallow = array("autoload.php");

		$create_function = null;

		// get directory path
		foreach(self::dirsystem() as $key => $val){

			// scanning all filein directory
			foreach (glob($val) as $index => $value) {

				// fille not allowed to load
				$data = explode("/",$value);
				$data = $data[count($data)-1];
				
				if(!in_array($data,$disallow)){				

					$include[] = $value;
				
				}
				
			}

		}


		// return array
		return $include;
	}

	// --------------------------------------------------------------------

    /**
     * file data
     *
     * Get result path from filtering before include
     *
     * @param void
     * @return string
     * @return array
     */

	public function file_data(){

		// get result from load_data() function
		foreach(self::load_data() as $key => $val){

			$data[] = $val;

		}

		// return array
		return $data;

	}

	// --------------------------------------------------------------------

    /**
     *file controller
     *
     * get path main controller file
     *
     * @param void
     * @return string
     * @return array
     */

	public function file_controller(){

		// set main controller file path
		$source = SERVER."/application/controller/".$this->main_controller.".php";


		// checking file 
		if(file_exists($source)){
			
			// return string
			return $source;

		}

	}
}

	// --------------------------------------------------------------------

    /**
     * Include alll component framework
     *
     * include all framework component and all function will be hide
     * and we can call that function using namespace
     *
     * @param void
     * @return string
     * @return array
     */

foreach((new autoload)->file_data() as $key => $value)

	require_once($value);


$data = new autoload;
$data->main_controller = (new routes)->load_controller()['main_controle'];

require_once($data->file_controller());