<?php 
	session_start();
	include 'koneksi.php';
	$emaillogin=$_SESSION['email'];
	$gambar=$_SESSION['desain'];
	$query=mysqli_query($koneksi,"SELECT * FROM rumah WHERE gambar='$gambar' ");
	$item=mysqli_fetch_array($query);
	$harga=$item['harga'];
	$email=$item['email'];
	$query2=mysqli_query($koneksi,"SELECT * FROM arsitek WHERE email='$email' ");
	$data=mysqli_fetch_array($query2);
	$nama=$data['nama'];
	$bank=$_POST['bank'];


	$query3=mysqli_query($koneksi,"INSERT INTO transaksi (harga,rekening,namatoko,bank,email) VALUES ('$harga','1111-1111-1111','$nama','$bank','$emaillogin') ")or die(mysqli_error($koneksi));
	if($query3){
		header ("Location:datatransaksi.php");
	} 
	else{
		echo "GAGAL";
	}

 ?>