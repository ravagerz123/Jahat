<?php
$error='';
if(isset($_POST['submit'])){
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "Username or Password is Invalid";
	}
	else{
		$user=$_POST['user'];
		$pass=md5($_POST['pass']);

		$conn = mysqli_connect("localhost", "root", "");

		$db = mysqli_select_db($conn, "test");

		$query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user = '$user'");

		$rows = mysqli_num_rows($query);
		if($rows == 1){
			header("Location: index2.html");
		}
		else{
			$error = "Username or Password is Invalid";
		}
		mysqli_close($conn);
	}
} 
 ?>