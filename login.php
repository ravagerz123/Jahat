<?php 
include("loginserv.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

	<meta charset="utf-8">
	<title>Login</title>
	<style>
		.login{
			width: 360px;
			margin: 50px auto;
			font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
			border-radius: 10px;
			border: 2px solid #ccc;
			padding: 10px 40px 25px;
			margin-top: 70px;
		}
		.login #loginh1{
			text-align: center;
		}
		input[type=text], input[type=password]{
			width: 99%;
			padding: 10px;
			margin-top: 8px;
			border:1px solid #ccc;
			padding-left: 5px;
			font-size: 16px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
		}
		input[type=submit]{
			width: 100%;
			background-color: #009;
			color: #fff;
			border: 2px solid #06F;
			padding: 10px;
			font-size: 20px;
			cursor: pointer;
			border-radius: 5px;
			margin-bottom: 15px;	
		}
		.login #register{
			width: 100%;
			background-color: #009;
			color: #fff;
			border: 2px solid #06F;
			padding: 10px;
			cursor: pointer;
			border-radius: 5px;
			margin-bottom: 15px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="login">
		<h1 id="loginh1" allign="center">Login</h1>
		<form action="" method="post" style="text-align:center;">
		<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
		<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
		<input type="submit" value="Login" name="submit">
		<a href="register.php" class="btn btn-primary" id="register" >Register</a>
		
		<!--Error Messege -->
		<span><?php echo $error ?></span>
	

</body>
</html>