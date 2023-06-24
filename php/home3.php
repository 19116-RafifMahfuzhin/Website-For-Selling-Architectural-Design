
<!DOCTYPE html>
<?php 
	session_start();
	include 'koneksi.php';

	$cari=$_POST['textCari'];
	if($cari==""){
		header ("location:home.php");
	}

	$query=mysqli_query($koneksi,"SELECT * FROM rumah");
	$data1=mysqli_fetch_array($query);
	foreach($query as $baris ){
		if($cari==$baris['gambar']){
			$_SESSION['tanda']=1;
			$tanda=$_SESSION['tanda'];
		}


		elseif($cari==$baris['email']){
			$_SESSION['tanda']=2;
			$tanda=$_SESSION['tanda'];
		}

		else{
			$_SESSION['tanda']=5;
		}
	}

	$query2=mysqli_query($koneksi,"SELECT * FROM arsitek");
	$data2=mysqli_fetch_array($query2);
	foreach($query2 as $baris ){
		if($cari==$baris['nama']){
			$_SESSION['tanda']=3;
			$tanda=$_SESSION['tanda'];
		}

		else{
			$_SESSION['tanda']=5;
		}
	}



	$query3=mysqli_query($koneksi,"SELECT * FROM konstraktor");
	$data3=mysqli_fetch_array($query3);
	foreach($query3 as $baris ){
		if($cari==$baris['nama']){
			$_SESSION['tanda']=4;
			$tanda=$_SESSION['tanda'];
		}

		else{
			$_SESSION['tanda']=5;
		}
	}
	



 ?>

<html>
<head>	
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width", intial-scale=1>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/home3.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<title>Hasil Pencarian</title>
</head>
<body style="">
	<div class="navbar" style="">
		<a href="home.php"><img src="../navbar/logo.png" class="logo" style="cursor: pointer;"></a>
		<?php  
			if($_SESSION['level']==2){?>
				<a href="daftardesain.php" name="jenisjasa" id="jenisjasa" class="jenisjasa1" style="cursor: pointer;"><b>Tambah Desain</b></a><?php
			}
			else{?>
				<a name="jenisjasa" id="jenisjasa" class="jenisjasa2" style=""></a><?php
			}
		?>

		<div class="" id="formCari" style="display:none;">
			<form action="home3.php" method="POST">
				<input type="text" name="textCari" id="textCari" style="">
				<button id="btnSearch" type="submit" style=" "><img src="../navbar/logoSearch.png" class="imgSearch" style="cursor: pointer;"></button>
				
			</form>
			
		</div>

		<button id="btnCancel" onclick="tutupCari()" style=""> <img src="../navbar/logoCancel.png" class="imgCancel" style="cursor: pointer;"></button>

		<a href="datatransaksi.php" id="keranjang" style=""><img src="../navbar/logoCart.png" class="imgCart" style="cursor: pointer;"></a>

		<button id="btnCari" onclick="bukaCari()" style=""> <img src="../navbar/logoSearch.png" class="imgCari" style="cursor: pointer;"></button>

		<?php  
			if(empty($_SESSION['email'])){?>
				<a href="login.php" class="btnLogout" style="cursor: pointer;"><b>Login</b></a>
				<script type="text/javascript">
					document.getElementById('jenisjasa').style.display="none";
				</script><?php
			}
			else{?>
				<a href="logout.php" class="btnLogout" style="cursor: pointer;"><b>Logout</b></a><?php
			}
		?>

	</div>

	<div class="home3" style="">
		
		<h1 class="judulCari" style="">Hasil Penelusuran <?php echo $cari; ?></h1>

		<div class="kiri" id="kiri" style="" >
			<form action="proses.php" method="GET">
			<?php 
				if(empty($tanda)){
					$tanda=5;
				}
				if($tanda==1){
					$query=mysqli_query($koneksi,"SELECT * FROM rumah WHERE gambar='$cari' ");
					while($row=mysqli_fetch_array($query)){
						$email=$row['email'];
						$image=$row['gambar'];
						$query2=mysqli_query($koneksi,"SELECT * FROM arsitek WHERE email='$email' ");
						$row2=mysqli_fetch_array($query2);
						?>

						<img class="imgResult" src="<?php echo "../rumah/$image" ?>" id="prefile"  style="">
						<h1 class="textData" >Nama : <?php echo $image ?></h1>
						<h1 class="textData"><a href="proses.php?desain=<?php echo $image ?>" name="desain">Cek Detail</a></h1>

					<?php  
					}					
				}
				elseif($tanda==2){
					$query=mysqli_query($koneksi,"SELECT * FROM rumah WHERE email='$cari' ");
					while($row=mysqli_fetch_array($query)){
						$email=$row['email'];
						$image=$row['gambar'];
						$query2=mysqli_query($koneksi,"SELECT * FROM arsitek WHERE email='$email' ");
						$row2=mysqli_fetch_array($query2);
						?>

						<img class="imgResult" src="<?php echo "../rumah/$image" ?>" id="prefile" style="">
						<h1 class="textData">Arsitek : <?php echo $row2['nama'] ?></h1>
						<h1 class="textData"><a href="proses.php?desain=<?php echo $image ?>" name="desain">Cek Detail</a></h1>

					<?php  
					}		
				}	

				elseif($tanda==3){
					$query=mysqli_query($koneksi,"SELECT * FROM arsitek WHERE nama='$cari' ");
					$item=mysqli_fetch_array($query);
					$email=$item['email'];
					$query2=mysqli_query($koneksi,"SELECT * FROM rumah WHERE email='$email' ");
					$row=mysqli_fetch_array($query2);
					$image=$row['gambar'];
					?>

					<img  src="<?php echo "../rumah/$image" ?>" id="prefile" class="imgResult">
					<h1 class="textData">Arsitek : <?php echo $item['nama'] ?></h1>
					<h1 class="textData"><a href="proses.php?desain=<?php echo $image ?>" name="desain">Cek Detail</a></h1>

					<?php  
						
				}

				elseif($tanda==4){
					$query=mysqli_query($koneksi,"SELECT * FROM konstraktor WHERE nama='$cari' ");
					$item=mysqli_fetch_array($query);
					$nama=$item['nama'];
					$logo=$item['logo'];
					?>

					<img src="<?php echo "../kontraktor/$logo" ?>" id="prefile"  class="imgResult">
					<h1 class="textData">Nama : <?php echo $nama ?></h1>
					<h1 class="textData">Email : <?php echo $item['email'] ?></h1>
					<h1 class="textData"><a href="proses.php?akun=<?php echo $logo ?>" name="akun">Cek Detail</a></h1>
					<?php  
						
				}
				else{
					?>

					<h1>Data Tidak Cocok Coba Lagi</h1>

					<?php 
				}

			?>
		</div> 

		
		</form>
	
	</div>

	
	
	<script type="text/javascript">

		function bukaCari(){
			document.getElementById("btnCari").style.display = "none";
			document.getElementById("keranjang").style.display = "none";
			document.getElementById("jenisjasa").style.display = "none";
			document.getElementById("formCari").style.display= "block";
			document.getElementById("btnCancel").style.display= "block";
		}

		function tutupCari(){
			document.getElementById("btnCari").style.display = "block";
			document.getElementById("keranjang").style.display = "block";
			document.getElementById("jenisjasa").style.display = "block";
			document.getElementById("formCari").style.display= "none";
			document.getElementById("btnCancel").style.display= "none";

		}
	</script>
	
</body>
</html>