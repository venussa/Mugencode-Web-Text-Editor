<?php 

class delete extends load{

	public function __construct(){

		$this->db_query("DELETE FROM list_mahasiswa WHERE npm='".$this->get("npm")."' ");
		header("location:".HomeUrl()."/action/detail");

	}

}