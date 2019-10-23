
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style>
		.signup{
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
	</style>
</head>
<body>
	<div class="signup">
		<h1 id="signuph1" allign="center">Sign Up</h1>
		<form action="registration_code.php" method="post" style="text-align:center;">
		<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
		<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
		<input type="submit" value="Signup" name="submit2">
		<!--Error Messege -->
	

</body>
</html>