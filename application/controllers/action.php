<?php

class action extends load{

	public function home(){

		if(empty(splice(2))) 
		header("location:".HomeUrl()."/action/login");
		exit;

	}

	protected function config(){

		return array(
			"site_name" => "Prakikum PWEB"
		);

	}

	public function login(){

		if(isset($_SESSION["username"])){
			header("location:".HomeUrl()."/action/detail");
			exit;
		}

		$this->view(["header","login","footer"], $this->config(),true);

	}

	public function detail(){

		if(!isset($_SESSION["username"])){
			header("location:".HomeUrl()."/action/login");
			exit;
		}

		$this->view(["header","detail","footer"], $this->config(),true);

	}

	public function add_data(){

		if(!isset($_SESSION["username"])){
			header("location:".HomeUrl()."/action/login");
			exit;
		}

		$this->view(["header","add_data","footer"], $this->config(),true);

	}

	public function edit_data(){

		if(!isset($_SESSION["username"])){
			header("location:".HomeUrl()."/action/login");
			exit;
		}

		$this->view(["header","edit_data","footer"], $this->config(),true);

	}

	public function delete_data(){

		if(!isset($_SESSION["username"])){
			header("location:".HomeUrl()."/action/login");
			exit;
		}

	}


}