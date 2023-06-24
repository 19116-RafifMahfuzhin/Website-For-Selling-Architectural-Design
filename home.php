<!DOCTYPE html>
<?php
session_start();
include 'cek.php';
include 'koneksi.php';

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Rumahku</title>
	<link rel="stylesheet" type="text/css" href="../css/home.css?v=1.0">
</head>
<body>
	<div class="banner">
		<img src="../background/homebg.jpg">
		<div class="thumbnail">
			<h1>ANDA AKAN MENEMPATI<br>BANGUNAN IMPIAN ANDA</h1>
			<p>Pilih Desain Bangunan Dan Konstruksikan Bangunan<br>Anda Sendiri Disini!</p>
			<?php if(empty($_SESSION['email'])) { ?>
					<button class="button1"><a href="daftarakun.php" style="text-decoration: none;"><b>Daftar Sekarang</b></a></button>
			<?php } ?>
		</div>
	</div>

	<div class="service">
		<div class="pilihan">
			<form action="pilih.php" method="GET">
			<?php if($_SESSION['stat']=='satu') { ?>
				<button class="button21" name="stat" value="satu">Kontraktor Bangunan</button>
				<button class="button3" name="stat" value="dua">Arsitektur Desain</button>
			<?php }else { ?>
				<button class="button2" name="stat" value="satu">Kontraktor Bangunan</button>
				<button class="button31" name="stat" value="dua">Arsitektur Desain</button>
			<?php } ?>
			</form>
		</div>
		<div class="daftar">
			<?php 
				if($_SESSION['stat']=='satu'){
					$data=mysqli_query($koneksi,'SELECT logo FROM konstraktor')or die(mysqli_error($koneksi));
				}else{
					$data=mysqli_query($koneksi,'SELECT gambar FROM rumah')or die(mysqli_error($koneksi));
				}
				?>
				<form action="proses.php" method="GET">
					<?php
					foreach ($data as $baris) { ?>
						<tr>
							<td>
								<?php
								if($_SESSION['stat']=='satu') { ?>
										<a href="proses.php?akun=<?php echo $baris['logo'];?>"><img class="arsitektur" src="../kontraktor/<?php echo $baris['logo']; ?>" name='akun'></a>
								<?php }else {?>
										<a href="proses.php?desain=<?php echo $baris['gambar']; ?>"><img class="arsitektur" src="../rumah/<?php echo $baris['gambar']; ?>" name='desain'></a>
								<?php }?>
							</td>
						</tr>
					
					<?php } ?>
				</form>
		</div>
	</div>
	<div class="footer">
		
	</div>

	<div class="navbar" style="background-color: white;position: fixed;left: 0%;top: 0px;width: 100%;height: 80px; font-family: archivo;">
		<a href="home.php"><img src="../navbar/logo.png" class="logo" style="cursor:pointer;background-color: white;position: fixed;height:50px;width: 90px;top: 15px;left: 20px;"></a>
		
		<?php  
			if(empty($_SESSION['level'])){
				$_SESSION['level']=1;
			}
			elseif($_SESSION['level']==2){?>
				<a href="daftardesain.php"  id="jenisjasa1" style="text-decoration: none; color:black;background-color: white;position: fixed;height:38px;width: 250px;top: 16px;left: 700px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Tambah Desain</b></a><?php
			}
			else{?>
				<a href=""  id="jenisjasa2" style=" display:none;"><b></b></a><?php
			}
		?>
		

		<div class="" id="formCari" style="display:none;">
			<form action="home3.php" method="POST">
				<input type="text" name="textCari" id="textCari" style="position:fixed;left:740px;top:20px; font-size:25px; width: 280px; height: 40px; background-color: #cccccc; border-radius: 30px; padding-right: 50px; padding-left: 15px;">
				<button id="btnSearch" type="submit" style=" background-color:transparent; border:none; position: fixed;height:54px;width: 60px;top: 14px;left:1100px;"><img src="../navbar/logoSearch.png" style="cursor:pointer;background-color: transparent;width: 100%; height: 100%;"></button>
				
			</form>
			
		</div>

		<button id="btnCancel" onclick="tutupCari()" style="cursor:pointer; background-color:transparent; border:none;  width: 35px; height: 35px; display:none; border: none; position: fixed;left: 1040px; top: 24px;"> <img src="../navbar/logoCancel.png" style="width: 60%; height: 60%; padding-top: 3px;"></button>

		<a href="datatransaksi.php" id="keranjang" style=""><img src="../navbar/logoCart.png" style="cursor:pointer;background-color: white;position: fixed;height:50px;width: 50px;top: 15px;left: 1000px;"></a>

		<button id="btnCari" onclick="bukaCari()" style="cursor:pointer;background-color: transparent; border: none;position: fixed; width: 60px;height:54px;top: 14px;left:1100px;"> <img src="../navbar/logoSearch.png" style="background-color: transparent;width: 100%; height: 100%;"></button>


		<?php  
			if(empty($_SESSION['email'])){?>
				<a href="logout.php" style=" text-decoration: none; color:black;background-color: white;position: fixed;height:38px;width: 130px;top: 16px;left: 1201px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Login</b></a>
				<script type="text/javascript">
					document.getElementById('jenisjasa').style.display="none";
				</script><?php
			}
			else{?>
				<a href="logout.php" style=" text-decoration: none; color:black;background-color: white;position: fixed;height:38px;width: 130px;top: 16px;left: 1201px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Logout</b></a><?php
			}
		?>
		

	</div>
	<?php if(isset($_SESSION['arsitekgagal'])){ ?>
		<script type="text/javascript">
			alert("Anda Tidak Terdaftar Sebagai Arsitek");
		</script>
	<?php }else{

	}
	if(isset($_SESSION['datakosong'])){
		?>
		<script type="text/javascript">
			alert("Anda Harus Login Terlebih Dahulu");
		</script>
	<?php
	}
	else{}

	if(isset($_SESSION['detailkosong'])){
		?>
		<script type="text/javascript">
			alert("Anda Harus Memilih Desain/Kontraktor Terlebih Dahulu");
		</script>
	<?php
	}
	else{}


?>
	<script type="text/javascript">

		function bukaCari(){
			document.getElementById("btnCari").style.display = "none";
			document.getElementById("keranjang").style.display = "none";;
			document.getElementById("formCari").style.display= "block";
			document.getElementById("btnCancel").style.display= "block";
			<?php  
			if ($_SESSION['level']==2) {
				?>document.getElementById("jenisjasa1").style.display= "none";<?php
			}	  ?>
			
			
		}

		function tutupCari(){
			document.getElementById("btnCari").style.display = "block";
			document.getElementById("keranjang").style.display = "block";
			document.getElementById("formCari").style.display= "none";
			document.getElementById("btnCancel").style.display= "none";
			<?php  
			if ($_SESSION['level']==2) {
				?>document.getElementById("jenisjasa1").style.display= "block";<?php
			}	  ?>		
			

		}
	</script>
</body>
<?php 
	$_SESSION['arsitekgagal']=NULL;
	$_SESSION['datakosong']=NULL;
	$_SESSION['detailkosong']=NULL;
	$_SESSION['akun']=NULL;
	$_SESSION['desain']=NULL;
?>
</html>