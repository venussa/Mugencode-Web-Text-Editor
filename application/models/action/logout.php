<?php

class logout extends load{

	public function __construct(){

		session_destroy();

		echo "<script>
				alert('Berhasil logout');
				window.location='".HomeUrl()."/action/login';
			</script>";


	}

}