<?php
session_start();
$_SESSION['stat']=$_GET['stat'];
header('Location: home.php');
?>