<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		*{
			font-family: Arial;
		}
		.navbar{

			position: fixed;
			top:0px;
			left:0px;
			width:100%;
			background: #f5f5f5;
			border-bottom: 1px #ddd solid;
		}
		.site-name{
			width: 200px;
			margin-left: 30px;
		}
		.tombol{
			border:#09f;
			color:#09f;
			cursor: pointer;
			border:2px #09f solid;
			border-radius: 5px;
			font-weight: 600;
			font-size:15px;
		}
		li{

			list-style-type: none;
			display: inline-grid;
			float: right;
			padding: 10px;
			margin-right: 20px;
			margin-top:-30px;
			font-weight: 600;
			font-size:15px;
			cursor: pointer;

		}
		.right-menu{
			position: absolute;
			right: 20px;
			top:25px;
		}

		.content{

			margin-top:150px;
		}

		.box-login{
			width: 400px;
			margin:auto;
			border:1px #ddd solid;
			overflow:hidden;
			border-radius: 5px;
		}

		.box-login .header{
			padding:10px;
			border-bottom: 1px #ddd solid;
			background: #f5f5f5;
			font-weight: 600;
			color:#666;
			font-size: 14px;
			text-align: center;
			border-radius: 5px 5px 0 0;
		}

		.box-login .body{
			background: #fafafa;
			padding: 10px;
		}

		table{
			width: 1000px;
			margin: auto;
		}

		table th,td{
			padding: 5px;
			border:1px #ddd solid;
		}

		.green{
			background: transparent;
			border:transparent;
			padding: 5px;
			color:black;
			cursor: pointer;
		}

		.red{
			background: #992323;
			border:1px #992323 solid;
			border-radius: 3px;
			padding: 5px;
			color:#fff;
			cursor: pointer;
		}
		.blue{
			background: #5a70a3;
			border:1px #5a70a3 solid;
			border-radius: 3px;
			padding: 5px;
			color:#fff;
			cursor: pointer;
		}

		.yellow{
			background: transparent;
			border:transparent;
			padding: 5px;
			color: #992323;
			cursor: pointer;
		}
	</style>
</head>
<body>

	<div class="navbar">
		
		<h3 class="site-name">{{site_name}}</h3>

		<?php if(isset($_SESSION["username"])) { ?>

			<div class="right-menu">
				<ul>
					<li class="tombol" onclick="window.location='{homeURL}/action/logout'">Sign Out</li>
					<li onclick="window.location='{homeURL}/action/add_data'">Tambah Data</li>
				</ul>
			</div>

		<?php } ?>

	</div>