<?php  
	session_start();
	unset($_SESSION["email"]);
	$_SESSION['level']=1;
	header("Location:login.php");
?>