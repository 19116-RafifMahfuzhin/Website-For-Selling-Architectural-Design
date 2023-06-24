
<!DOCTYPE html>
<?php
session_start();
include 'koneksi.php';
?>

<html>
<head>	
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width", intial-scale=1>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/tampung.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<title>Daftar Akun</title>
</head>
<body style="background-color: white;">
	<div class="navbar">
		<a href="home.php"><img src="../navbar/logo.png" class="logo" style="cursor: pointer;"></a>

		

		<div class="formCari" id="formCari">
			<form action="home3.php" method="POST">
				<input type="text" name="textCari" id="textCari">
				<button id="btnSearch" type="submit"><img src="../navbar/logoSearch.png" class="imgSearch" style="cursor: pointer;"></button>
				
			</form>
			
		</div>

		<button id="btnCancel" class="btnCancel1" onclick="tutupCari()"> <img src="../navbar/logoCancel.png" class="imgCancel" style="cursor: pointer;background-color:transparent;"></button>

		<a href="datatransaksi.php" id="keranjang" style=""><img src="../navbar/logoCart.png" class="imgCart"  style="cursor: pointer;"></a>

		<button id="btnCari" onclick="bukaCari()"  > <img src="../navbar/logoSearch.png" class="imgCari" style="cursor: pointer;" ></a></button>

		<a href="logout.php" class="btnLogout" style="cursor: pointer;"><b>Login</b></a>
			

	</div>

	<h1 style="margin-top: 80px; text-align: center;margin-bottom: 20px;">Daftar Sebagai</h1>
	<div style="width: 98%; height: 90%;">
		<div style="width: 20%;height: 75%; background-color: #cccccc; position: absolute; border-radius: 35px; left: 190px;">
			<img src="../background/costumer.png" style="background-repeat: no-repeat; background-size:cover; margin-top:-30px;width: 100%; height: 370px;">
			<h1 style="text-align: center;margin-top: -30px;">Pelanggan</h1>
			<button style="width: 40%; height: 10%; font-size: 25px;border-radius:45px; margin-top:40px;text-align: center;justify-content: center;background-color: orange;margin-left:80px;"><a href="registerpelanggan.php">Pilih</a></button>
		</div>

		<div style="width: 20%;height: 75%; background-color: #cccccc; position: absolute;left: 550px;border-radius: 35px;">
			<img src="../background/architect.png" style="background-repeat: no-repeat; background-size:cover; margin-top:-30px;width: 100%; height: 370px;">
			<h1 style="text-align: center;margin-top: -30px;">Arsitek</h1>
			<button style="width: 40%; height: 10%; font-size: 25px;border-radius:45px; margin-top:40px;text-align: center;justify-content: center;background-color: orange;margin-left:80px;"><a href="registerarsitekbaru.php">Pilih</a></button>
		</div>

		<div style="width: 20%;height: 75%; background-color: #cccccc; position: absolute;left:900px;border-radius: 35px;">
			<img src="../background/builder.png" style="background-repeat: no-repeat; background-size:cover; margin-top:-5px;width: 100%; height: 370px;">
			<h1 style="text-align: center;margin-top: -55px;">Konstraktor</h1>
			<button style="width: 40%; height: 10%; font-size: 25px;border-radius:45px; margin-top:40px;text-align: center;justify-content: center;background-color: orange;margin-left:80px;"><a href="registerkontraktor.php">Pilih</a></button>
		</div>
	</div>
	
	
	<script type="text/javascript">


		function bukaCari(){
			document.getElementById("btnCari").style.display = "none";
			document.getElementById("keranjang").style.display = "none";
			document.getElementById("formCari").style.display= "block";
			document.getElementById("btnCancel").style.display= "block";
		}

		function tutupCari(){
			document.getElementById("btnCari").style.display = "block";
			document.getElementById("keranjang").style.display = "block";
			document.getElementById("formCari").style.display= "none";
			document.getElementById("btnCancel").style.display= "none";

		}

		function buka() {
  			document.getElementById("kiri").style.display = "none";
  			document.getElementById("kiri2").style.display= "block";
			document.getElementById("myForm").style.display= "block";
			document.getElementById("myForm2").style.display= "none";
		}

		function tutup() {
  			document.getElementById("kiri").style.display = "block";
  			document.getElementById("kiri2").style.display= "none";
			document.getElementById("myForm").style.display= "none";
			document.getElementById("myForm2").style.display= "block";

		}
	</script>
	
</body>
</html>