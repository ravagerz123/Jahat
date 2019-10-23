<?php
$conn = mysqli_connect("localhost","root","","test");

	if(mysqli_connect_errno()){
		throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
	}
 ?>
