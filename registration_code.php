<?php 
	require_once('registerserv.php');
	$username = $password = '';

	$username = $_POST['user'];
	$pwd = $_POST['pass'];
	$password = md5($pwd);

	$sql = "INSERT INTO userpass (user,pass) VALUES ('$username','$password') ";

	$result = mysqli_query($conn , $sql);
	if(isset($_POST['submit2'])){
		if(empty($username) || empty($password)){
			$error = "Mohon Masukan Username dan Password";ob_inflatehandler(Oi sebentar aku mw, mode)
		}
		else($result){
			header("Location: login.php");
		}	
	}
	
	echo "Error :" .$sql;
 ?>tsilahkan lanjut