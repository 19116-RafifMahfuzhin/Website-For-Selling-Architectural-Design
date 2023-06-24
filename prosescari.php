<?php 
	session_start();
	include 'koneksi.php';

	$cari=$_POST['textCari'];
	$query=mysqli_query($koneksi,"SELECT * FROM rumah");
	foreach($query as $baris ){
		if($cari==$baris['gambar']){
			header ("location:home3.php");
		}


		elseif($cari==$baris['email']){
			header ("location:home3.php");
		}

		else{
			
		}
	}

	$query2=mysqli_query($koneksi,"SELECT * FROM arsitek");
	foreach($query2 as $baris ){
		if($cari==$baris['nama']){
			header ("location:home3.php");
		}

		else{
			
		}
	}



	$query3=mysqli_query($koneksi,"SELECT * FROM konstraktor");
	foreach($query3 as $baris ){
		if($cari==$baris['nama']){
			header ("location:home3.php");
		}

		else{
			
		}
	}


 ?>