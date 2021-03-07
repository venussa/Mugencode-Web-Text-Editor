<?php 

class proccess_edit extends load{

	public function __construct(){

		foreach($_POST as $key => $val){

			$query[] = $key."='".$val."'";

		}

		$this->db_query("UPDATE list_mahasiswa SET ".implode(",", $query)." WHERE npm='".$_POST['npm']."' ");
		header("location:".HomeUrl()."/action/detail");

	}

}