<?php

if(config()->login_mode == 1){

	if(isset($_SESSION['user_login'])){


			header("location:".homeUrl());

			exit;

		}
}else{

	header("location:".homeUrl());
	exit;
}



?>

<!DOCTYPE html>
<html>
	<head>
		<title>{title}</title>

		<link rel="shortcut icon" href="{favicon}">	

		<!-- STYLESHEET -->
		{load css}


		<!-- JAVASCRIPT -->
		{load js}

		<style type="text/css">
			.container{
				margin-top:50px;
			}
		</style>
		
	</head>
<body>

<!-- Container -->
<div class="container">

	<!-- col-md-4 -->
	<div class="col-md-4 col-md-offset-4">
		<form method="POST" action="<?=homeUrl()?>/checklogin" onSubmit="return mugenLogin(this)">
		<div class="panel panel-default">
			<div class="panel-heading"> MugenCode Login</div>

			<div class="panel-body">
				<div style="margin-top: 10px;">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required>
				</div>

				<div style="margin-top: 10px;">
					
					<label>Password</label>
					<input type="password" name="password" class="form-control" >

				</div>

				<div style="margin-top: 10px;">
					
					<label>Enter Captcha</label>
					<span class="reload-captcha">
						<img src="<?php echo create_captcha()->captcha_image_url ?>" width="100%" height="60" style="border-radius: 5px;margin-top: 5px;margin-bottom: 5px;">
					</span>

					<input type="text" name="captcha" class="form-control" style="margin-bottom: 5px;" required>

					<div class="alert" style="margin-bottom: 5px;display: none;"></div>

					<button type="submit" value="Login" class="btn btn-info"><span class="img-loads"></span> Login</button>

				</div>
				
				
			</div>
		</div>
	</form>
	</div>
	<!-- / col-md-4 -->

</div>
<!-- / Container -->



<script>
	function mugenLogin(a){
		$.ajax({
			type : "POST",
			url : $(a).attr("action"),
			data : $(a).serialize(),
			beforeSend : function(){
				$(".img-loads").html("<img src='<?=projectUrl()."/assets/img/ovalo.svg"?>' width='15'>");
			},
			success : function (even){
				$(".img-loads").html("");
				$(".alert").show();
				$failuser = even.indexOf("<failuser/>");
				$failpass = even.indexOf("<failpass/>");
				$failcapt = even.indexOf("<failcapt/>");

				var class_box = ["alert-warning","alert-danger","alert-info","alert-default"];
				
				for(var i = 0 ; i < class_box.length; i++){
					$(".alert").removeClass(class_box[i]);
				}

				if($failuser !== -1){
					
					$(".alert").addClass("alert-warning");
					$(".alert").html("Invalid Username");
					$(".reload-captcha").load($(a).attr("action")+"/?captcha_reload=true");

				}else if($failpass !== -1){
					
					$(".alert").addClass("alert-danger");
					$(".alert").html("Invalid Password");
					$(".reload-captcha").load($(a).attr("action")+"/?captcha_reload=true");

				}else if($failcapt !== -1){
					
					$(".alert").addClass("alert-warning");
					$(".alert").html("Invalid Captcha");
					$(".reload-captcha").load($(a).attr("action")+"/?captcha_reload=true");

				}else{

					$(".alert").addClass("alert-info");
					$(".alert").html("Welcome To MugenCode");

					setInterval(function(){

						window.location = "<?=homeUrl()?>";

					},2000);
				}
			}
		});

		return false;
	}
</script>
</body>
</html>