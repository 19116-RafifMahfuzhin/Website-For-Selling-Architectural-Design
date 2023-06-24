<?php 
	session_start();
	include 'koneksi.php';

	$email=$_POST['email'];
	$password=$_POST['password'];
	$query=mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE email='$email' AND password='$password'");

	if($data=mysqli_fetch_array($query)){
		$_SESSION["email"]=$data["email"];
		$_SESSION['level']=1;
		header ("location:home.php");
	}

	else{
		$query2=mysqli_query($koneksi,"SELECT * FROM arsitek WHERE email='$email' AND password='$password'");
		if($data=mysqli_fetch_array($query2)){
			$_SESSION["email"]=$data["email"];
			$_SESSION['level']=2;
			header ("location:home.php");
		}
		else{
			$query3=mysqli_query($koneksi,"SELECT * FROM konstraktor WHERE email='$email' AND password='$password'");
			if($data=mysqli_fetch_array($query3)){
				$_SESSION["email"]=$data["email"];
				$_SESSION['level']=3;
				header ("location:home.php");
			}
			else{
				$_SESSION["emailsalah"]=True;
				header("Location: login.php");
			}
		}
	}
?>