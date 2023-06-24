<!DOCTYPE html>
<?php
session_start();
include 'koneksi.php';
if(empty($_SESSION['akun'])){
	$_SESSION['detailkosong']=True;
	header("location:home.php");
}

 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Akun</title>
	<link rel="stylesheet" type="text/css" href="../css/akun.css?v=1.1">
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
	<script>
		function buka() {
  			document.getElementById("myForm").style.display = "block";
		}

		function tutup() {
  			document.getElementById("myForm").style.display = "none";
		}

		function bukaCari(){
			document.getElementById("btnCari").style.display = "none";
			document.getElementById("keranjang").style.display = "none";;
			document.getElementById("formCari").style.display= "block";
			document.getElementById("jenisjasa").style.display= "none";
			document.getElementById("btnCancel").style.display= "block";
		}

		function tutupCari(){
			document.getElementById("btnCari").style.display = "block";
			document.getElementById("keranjang").style.display = "block";
			document.getElementById("jenisjasa").style.display= "block";			
			document.getElementById("formCari").style.display= "none";
			document.getElementById("btnCancel").style.display= "none";

		}
	</script>
</head>
<body>
	<?php 
	$kontraktor=$_SESSION['akun'];
	$data=mysqli_query($koneksi, "SELECT nama, telepon, alamat, deskripsi FROM konstraktor WHERE logo='$kontraktor'");
	foreach ($data as $item) {
	?>
	<div class="mainpage">
		<div class="atas">
			<div class="bc">
				<div class="deskripsi">
					<h1>Deskripsi</h1>
					<p>
						<?php echo $item['deskripsi']; ?>
					</p>		
				</div>
				<img src="../background/kons1.jpg" style="width: 100%; height:100%;">
				<div class="foto">
					<img src="../kontraktor/<?php echo $kontraktor; ?>" style="width: 100%; height:100%; border-radius: 100%;">
				</div>
			</div>
		</div>
		<div class="kanan">
			<div class="info">
				<h2>Telepon</h2>
					<p><?php echo $item['telepon']; ?></p>
				<h2>Alamat</h2>
					<p><?php echo $item['alamat']; ?></p>
			</div>
		</div>
		<div class="bawah">
			<div class="projek">
				<h2>Projek Kami</h2>
				<div class="infoprojek">
					<?php
						$dir=opendir("../projek/".$item['nama']);
						while($nama = readdir($dir)) {
							$dirArray[] = $nama;
						}
						closedir($dir);
						$total	= count($dirArray);
						for($x=2; $x < $total; $x++) { ?>
							<img src="../projek/<?php echo $item['nama']; ?>/<?php echo $dirArray[$x]; ?>" class="gambar"/>
						<?php } ?>
				</div>
			</div>
		</div>

		<div class="topbar">
			<img src="logo.png" class="logo">
		</div>

		<button class="tombol-buka" onclick="buka()"><b>Konsultasi</b></button>

		<div class="fungsipesan" id="myForm">
			<form class="chat.php">
				<button class="tombol-tutup" type="button" onclick="tutup()"></button>
					<div class="area-pesan">
						<textarea placeholder="Tuliskan pesan..." name="pesan" class="pesan" required></textarea>
						<button type="submit" class="kirimp"><img src="../navbar/send.png" style="width: 100%; height: 100%;"></button>
					</div>
			</form>
		</div>
		
	</div>
	<?php } ?>

	<div class="navbar" style="background-color: white;position: fixed;left: 0%;top: 0px;width: 100%;height: 80px; font-family: archivo;">
		<a href="home.php"><img src="../navbar/logo.png" class="logo"  style="cursor:pointer;background-color: white;position: fixed;height:50px;width: 90px;top: 15px;left: 20px;"></a>
		
		<?php  
			if($_SESSION['level']==2){?>
				<a href=""  id="jenisjasa" style="cursor:pointer; text-decoration: none; color:black;background-color: white;position: fixed;height:38px;width: 250px;top: 16px;left: 700px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Tambah Desain</b></a><?php
			}
			else{?>
				<a href=""  id="jenisjasa" style=" display:none;"><b></b></a><?php
			}
		?>
		

		<div class="" id="formCari" style="display:none;">
			<form action="home3.php" method="POST">
				<input type="text" name="textCari" id="textCari" style="cursor:pointer;position:fixed;left:740px;top:20px; font-size:25px; width: 280px; height: 40px; background-color: #cccccc; border-radius: 30px; padding-right: 50px; padding-left: 15px;">
				<button id="btnSearch" type="submit" style="cursor:pointer; background-color:transparent; border:none; position: fixed;height:54px;width: 60px;top: 14px;left:1100px;"><img src="../navbar/logoSearch.png" style="background-color: transparent;width: 100%; height: 100%;"></button>
				
			</form>
			
		</div>

		<button id="btnCancel" onclick="tutupCari()" style="cursor:pointer; background-color:transparent; border:none;  width: 35px; height: 35px; display:none; border: none; position: fixed;left: 1040px; top: 24px;"> <img src="../navbar/logoCancel.png" style="width: 60%; height: 60%; padding-top: 3px;"></button>

		<a href="datatransaksi.php" id="keranjang" style=""><img src="../navbar/logoCart.png" style="cursor:pointer;background-color: white;position: fixed;height:50px;width: 50px;top: 15px;left: 1000px;"></a>

		<button id="btnCari" onclick="bukaCari()" style="cursor:pointer;background-color: transparent; border: none;position: fixed; width: 60px;height:54px;top: 14px;left:1100px;"> <img src="../navbar/logoSearch.png" style="background-color: transparent;width: 100%; height: 100%;"></button>

		<?php  
			if(empty($_SESSION['email'])){?>
				<a href="logout.php" style=" text-decoration: none; color:black;background-color: white;position: fixed;height:38px;width: 130px;top: 16px;left: 1201px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Login</b></a>
				<?php
			}
			else{?>
				<a href="logout.php" style=" text-decoration: none; color:black;background-color: white;position: fixed;height:38px;width: 130px;top: 16px;left: 1201px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Logout</b></a>
				<?php
			}
		?>

		

	</div>

</body>
</html>