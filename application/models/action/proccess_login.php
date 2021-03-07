<?php 

class proccess_login extends load{

	public function __construct(){

		$data = [

			"username" => "admin",
			"password" => "123456"

		];

		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);

		if(empty($username) and empty($password)){

			echo "<script>
				alert('username dan password ga bole kosong');
				window.location='".HomeUrl()."/action/login';
			</script>";

			exit;

		}

		if($username !== $data["username"] and $password !== $data["password"]){

			echo "<script>
				alert('Username atau password salah');
				window.location='".HomeUrl()."/action/login';
			</script>";

			exit;

		}

		$_SESSION["username"] = $data["username"];

		echo "<script>
				alert('Selamet datang gan!!!!');
				window.location='".HomeUrl()."/action/detail';
			</script>";

		exit;

	}

}

?>