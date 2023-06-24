
<!DOCTYPE html>
<?php
session_start();
include 'koneksi.php';
if(empty($_SESSION['desain'])){
	$_SESSION['detailkosong']=True;
	header("location:home.php");
}
?>

<html>
<head>	
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width", intial-scale=1>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/tampung.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<title>Detail Desain</title>
</head>
<body>
	<div class="navbar">
		<a href="home.php"><img src="../navbar/logo.png" class="logo" style="cursor: pointer;"></a>
		<?php  
			if($_SESSION['level']==2){?>
				<a href="daftardesain.php" name="jenisjasa" id="jenisjasa" class="jenisjasa1" style="cursor: pointer;text-decoration: none; color:black;position: fixed;height:38px;width: 250px;top: 16px;left: 700px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Tambah Desain</b></a><?php
			}
			else{?>
				<a name="jenisjasa" id="jenisjasa" class="jenisjasa2" style="display:none;"></a><?php
			}
		?>
		

		<div class="formCari" id="formCari">
			<form action="home3.php" method="POST">
				<input type="text" name="textCari" id="textCari">
				<button id="btnSearch" type="submit"><img src="../navbar/logoSearch.png" class="imgSearch" style="cursor: pointer;"></button>
				
			</form>
			
		</div>

		<button id="btnCancel" class="btnCancel1" onclick="tutupCari()"> <img src="../navbar/logoCancel.png" class="imgCancel" style="cursor: pointer;background-color:transparent;"></button>

		<a href="datatransaksi.php" id="keranjang" style=""><img src="../navbar/logoCart.png" class="imgCart" style="cursor: pointer;"></a>

		<button id="btnCari" onclick="bukaCari()"  > <img src="../navbar/logoSearch.png" class="imgCari" style="cursor: pointer;" ></a></button>
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

	<div class="detaildesain" style="">
		<form name="" action="prosestransaksi.php" method="POST">
			
			<div class="kiri" id="kiri" style="" >
				<?php  
					include 'koneksi.php';
					$gambar=$_SESSION['desain'];

					$query=mysqli_query($koneksi,"SELECT * FROM rumah WHERE gambar='$gambar' ");

					while($row=mysqli_fetch_array($query)){
						$image=$row['gambar'];
						?>

						<img class="imgDesain" src="<?php echo "../rumah/$image" ?>" id="prefile" width="100%" height="383px" style="">;

					<?php  
					}			
				?>
				
			</div> 


			<div class="kiri2" id="kiri2" style="">
				<form name="" action="prosestransaksi.php" method="POST">
					<h1 class="judulKiri2" style="">Pilih Metode Pembayaran</h1>
					<table class="pilihbank" style="">
						<tr>
							<td class="logobank" style=""><img src="../bank/mandiri.png" width="80px" height="30px"></td>
							<td class="tulisan"><b>Mandiri Virtual Account</td>
							<td ><input class="radio" type="radio" name="bank" value="Mandiri" style=""></td>
						</tr>
						<tr>
							<td class="logobank"><img src="../bank/bri.jpg" width="80px" height="30px"></td>
							<td class="tulisan"><b>BRI Virtual Account</td>
							<td><input  class="radio" type="radio" name="bank" value="BRI" ></td>
						</tr>
						<tr>
							<td class="logobank"><img src="../bank/bni.png" width="80px" height="30px"></td>
							<td class="tulisan"><b>BNI Virtual Account</td>
							<td ><input type="radio" name="bank" value="BNI" class="radio"></td>
						</tr>
						<tr>
							<td class="logobank"><img src="../bank/bca.png" width="80px" height="30px"></td>
							<td class="tulisan"><b>BCA Virtual Account</td>
							<td><input type="radio" name="bank" value="BCA" class="radio"></td>
						</tr>
						
					</table>
					<button id="btn2" type="submit" >Pilih</button>
				</form>
				
			</div>


			<div class="kananDetail">
				<table class="tableDetail">
					<?php  
					include 'koneksi.php';
					$gambar=$_SESSION['desain'];
					$data=mysqli_query($koneksi,"SELECT * FROM rumah WHERE gambar='$gambar'");
					$row_query=mysqli_fetch_array($data);
					?>
						<tr>
							<td><label for="luas">Luas Tanah</label></td>
							<td>:</td>
							<td class="textData"><?php echo $row_query['luas'];?> Meter
							</td>
						</tr>

						<tr>
							<td><label for="kamar">Kamar</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['kamar'];?> Meter</td>
						</tr>

						<tr>
							<td><label for="kmandi">Kamar Mandi</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['kmandi'];?> Meter</td>
						</tr>
						<tr>
							<td><label for="dapur">Dapur</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['dapur'];?> Meter</td>
						</tr>

						<tr>
							<td><label for="rkeluarga">Ruang Keluarga</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['rkeluarga'];?> Meter</td>
						</tr>

						<tr>
							<td><label for="garasi">Garasi</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['garasi'];?> Meter</td>
						</tr>

						<tr>
							<td><label for="rtamu">Ruang Tamu</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['rtamu'];?> Meter</td>
						</tr>

						<tr>
							<td><label for="kolam">Kolam Renang</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['kolam'];?> Meter</td>
						</tr>
						<tr>
							<td><label for="gudang">Gudang</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['gudang'];?> Meter</td>
						</tr>

						<tr>
							<td><label for="perpus">Perpustakaan</label></td>
							<td>:</td>
							<td  class="textData"><?php echo $row_query['perpus'];?> Meter</td>
						</tr>

						<tr>
							<td><label for="harga">Harga</label></td>
							<td>:</td>
							<td  class="textData">RP.<?php echo $row_query['harga'];?></td>
						</tr>
						<?php 
					?>
				</table>
				<?php  
					if(empty($_SESSION['email'])){?>
						<div class="" id="myForm2" style="">
							<button id="btn" type="button" onclick=""><a href="login.php">Login Untuk Beli</a></button>
						</div><?php
					}
					else{?>
						<div class="" id="myForm2" style="">
							<button id="btn" type="button" onclick="buka()">BELI SEKARANG</button>
						</div><?php
					}
				?>
				
				<div class="" id="myForm" style="display:none;">
					<button id="btn" type="button" onclick="tutup()">Cancel</button>
				</div>

			</div>

		</form>
	</div>

	<div class="footerDetail">
		<?php
		include 'koneksi.php';
		$gambar=$_SESSION['desain'];
		$query=mysqli_query($koneksi, "SELECT email FROM rumah WHERE gambar='$gambar'");
		$item=mysqli_fetch_array($query);
		$email=$item['email'];
		$data=mysqli_query($koneksi,"SELECT * FROM arsitek WHERE email='$email'");
		$row_query=mysqli_fetch_array($data);
		$logo=$row_query['logo'];
		?>

		<div class="kakikiriDetail">  
			<img class="logoDetail" src="<?php echo "../logo/$logo" ?>" id="prefile" width="100%" height="100%" style="">;
		</div>

		<div class="kakikananDetail" style="">
			<h3 class="deskripsiDetail"><?php echo $row_query['deskrip'];?></h3>
		</div>

		
	</div>
	
	<script type="text/javascript">

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