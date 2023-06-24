<?php
session_start();

if(isset($_GET['akun'])){
	$_SESSION['akun']=$_GET['akun'];
	header('Location: akun.php');
}elseif (isset($_GET['desain'])) {
	$_SESSION['desain']=$_GET['desain'];
	header('Location: detaildesain.php');
}
?>