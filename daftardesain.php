<!DOCTYPE html>
<html>
<?php  
	include 'koneksi.php';
	session_start();
	if($_SESSION['level']!=2){
		$_SESSION['arsitekgagal']=True;
		header ("location:home.php");
	}

	else{

	}

?>

<head>	
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width", intial-scale=1>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/tampung.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<title>Daftar Desain</title>
</head>
<body>
	<div class="navbar">
		<a href="home.php"><img src="../navbar/logo.png" class="logo" style="cursor: pointer;"></a>

		<a href="daftardesain.php" name="jenisjasa" id="jenisjasa" class="jenisjasa1" style=" cursor:pointer;text-decoration: none; color:black;position: fixed;height:38px;width: 250px;top: 16px;left: 700px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Tambah Desain</b></a>
		

		<div class="formCari" id="formCari">
			<form action="home3.php" method="POST">
				<input type="text" name="textCari" id="textCari">
				<button id="btnSearch" type="submit"><img src="../navbar/logoSearch.png" class="imgSearch"></button>
				
			</form>
			
		</div>

		<button id="btnCancel" class="btnCancel1" onclick="tutupCari()"> <img src="../navbar/logoCancel.png" class="imgCancel" style="cursor:pointer;background-color:none;"></button>

		<a href="datatransaksi.php" id="keranjang" style=""><img src="../navbar/logoCart.png" class="imgCart" style="cursor:pointer;" ></a>

		<button id="btnCari" onclick="bukaCari()"> <img src="../navbar/logoSearch.png" class="imgCari" style="cursor:pointer;"></a></button>
	
		
		<a href="logout.php" class="btnLogout" style="cursor:pointer;"><b>Logout</b></a>


	</div>

	<div class="daftardesain" style="margin-top:100px;">
		<form name="" action="prosesdaftardesain.php" method="POST" enctype="multipart/form-data">
			
			<div class="kiri">
				<input type="file" name="gambar" id="gambar" onchange="loadfile(event)">
				<label for="gambar">+</label>
				<img id="prefile" width="100%" height="400px">
			</div> 

			<div class="kanan">
				<table>
					<tr>
						<td><label for="luas">Luas Tanah</label></td>
						<td>:</td>
						<td><input class="form-control" type="luas" name="luas" value=""></td>
					</tr>

					<tr>
						<td><label for="kamar">Kamar</label></td>
						<td>:</td>
						<td><input class="form-control" type="kamar" name="kamar" value=""></td>
					</tr>

					<tr>
						<td><label for="kmandi">Kamar Mandi</label></td>
						<td>:</td>
						<td><input class="form-control" type="kmandi" name="kmandi" value=""></td>
					</tr>
					<tr>
						<td><label for="dapur">Dapur</label></td>
						<td>:</td>
						<td><input class="form-control" type="dapur" name="dapur" value=""></td>
					</tr>

					<tr>
						<td><label for="rkeluarga">Ruang Keluarga</label></td>
						<td>:</td>
						<td><input class="form-control" type="rkeluarga" name="rkeluarga" value=""></td>
					</tr>

					<tr>
						<td><label for="garasi">Garasi</label></td>
						<td>:</td>
						<td><input class="form-control" type="garasi" name="garasi" value=""></td>
					</tr>

					<tr>
						<td><label for="rtamu">Ruang Tamu</label></td>
						<td>:</td>
						<td><input class="form-control" type="rtamu" name="rtamu" value=""></td>
					</tr>

					<tr>
						<td><label for="kolam">Kolam Renang</label></td>
						<td>:</td>
						<td><input class="form-control" type="kolam" name="kolam" value=""></td>
					</tr>
					<tr>
						<td><label for="gudang">Gudang</label></td>
						<td>:</td>
						<td><input class="form-control" type="gudang" name="gudang" value=""></td>
					</tr>

					<tr>
						<td><label for="perpus">Perpustakaan</label></td>
						<td>:</td>
						<td><input class="form-control" type="perpus" name="perpus" value=""></td>
					</tr>

					<tr>
						<td><label for="harga">Harga</label></td>
						<td>:</td>
						<td><input class="form-control" type="harga" name="harga" value=""></td>
					</tr>

				</table>
				<button id="btn" name="submit" type="submit">UPLOAD</button>
			</div>

		</form>
	</div>
	
		
	<script type="text/javascript">
		function loadfile(event) {
			if(event.target.files.length>0){
				var src=URL.createObjectURL(event.target.files[0]);
				var preview = document.getElementById("prefile");
				preview.src = src;
				preview.style.display="block";
			}
		}

		function la(src){
			window.location=src;

		}

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