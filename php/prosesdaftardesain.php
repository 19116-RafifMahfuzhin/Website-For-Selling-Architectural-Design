<?php 
	session_start();
	include 'koneksi.php';

	if(isset($_POST["submit"])){

		$emailtampung=$_SESSION['email'];

		$luas=$_POST['luas'];
		$kamar=$_POST['kamar'];
		$kmandi=$_POST['kmandi'];
		$dapur=$_POST['dapur'];
		$rkeluarga=$_POST['rkeluarga'];
		$garasi=$_POST['garasi'];
		$rtamu=$_POST['rtamu'];
		$kolam=$_POST['kolam'];
		$gudang=$_POST['gudang'];
		$perpus=$_POST['perpus'];
		$harga=$_POST['harga'];
		$gambar=$_FILES['gambar']['name'];
		$x=explode('.',$gambar);
		$eks=strtolower(end($x));
		$asal=$_FILES['gambar']['tmp_name'];
		$dir="../rumah/$gambar";
		$nama=$_POST['luas'];
		$nama .='.'.$eks;
		$targetfile=$dir;
		$uploudok=1;

		if(file_exists($targetfile)){
			$uploudok=0;
		}

		if($uploudok==0){
			echo "GAGAL";
		}

		else{
			echo "ELSE";
			if(move_uploaded_file($asal, $targetfile)){
				echo "MOVE UPLOUDED";
				$query=mysqli_query($koneksi,"INSERT INTO rumah (luas, kamar, kmandi, dapur, rkeluarga, garasi, rtamu, kolam, gudang, perpus, harga, gambar,email) VALUES ('$luas', '$kamar', '$kmandi','$dapur', '$rkeluarga', '$garasi', '$rtamu', '$kolam', '$gudang', '$perpus', '$harga','$gambar','$emailtampung')") or die(mysqli_error($koneksi));

				if($query){
					header ("location:home.php");
				}
				else{
					echo "GAGAL";
				}
			}
		}



	}


?>