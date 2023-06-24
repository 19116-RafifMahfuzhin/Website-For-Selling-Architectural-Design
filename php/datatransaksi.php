
<!DOCTYPE html>
<?php  
	session_start();
	include 'koneksi.php';
	if(empty($_SESSION['email'])){
		$_SESSION['datakosong']=True;
		header ('location:home.php');
	}
	
	$tampungan=$_SESSION['email'];


?>
<html>
<head>	
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width", intial-scale=1>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/tampung.css">
	<link rel="stylesheet" type="text/css" href="../css/styledatatransaksi.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<title>Data Transaksi</title>
</head>
<body>
	<div class="navbar">
		<a href="home.php"><img src="../navbar/logo.png" class="logo" style="cursor: pointer;"></a>
		<?php  
			if($_SESSION['level']==2){?>
				<a href="daftardesain.php" name="jenisjasa" id="jenisjasa" class="jenisjasa1" style="text-decoration: none; color:black;position: fixed;height:38px;width: 250px;top: 16px;left: 700px; font-size:26px; border-radius: 30px;  border:1px solid;justify-content: center; text-align: center; padding-top:10px;background-color: #cccccc;"><b>Tambah Desain</b></a><?php
			}
			else{?>
				<a name="jenisjasa" id="jenisjasa" class="jenisjasa2"></a><?php
			}
		?>
		

		<div class="formCari" id="formCari">
			<form action="home3.php" method="POST">
				<input type="text" name="textCari" id="textCari">
				<button id="btnSearch" type="submit"><img src="../navbar/logoSearch.png" class="imgSearch" style="cursor: pointer;"></button>
				
			</form>
			
		</div>

		<button id="btnCancel" class="btnCancel1" onclick="tutupCari()" > <img src="../navbar/logoCancel.png" class="imgCancel" style="cursor: pointer;"></button>

		<a href="datatransaksi.php" id="keranjang" style=""><img src="../navbar/logoCart.png" class="imgCart" style="cursor: pointer;"></a>

		<button id="btnCari" onclick="bukaCari()"> <img src="../navbar/logoSearch.png" class="imgCari" style="cursor: pointer;"></a></button>

		<a href="logout.php" class="btnLogout" style="cursor: pointer;"><b>Logout</b></a>


	</div>


	<div class="kotak" style="margin-top:110px;">
		<form name="" action="" method="">
			<?php
				include 'koneksi.php';
				$data=mysqli_query($koneksi,"SELECT * FROM transaksi WHERE email='$tampungan' ");
				$row_query=mysqli_fetch_array($data);
				foreach($data as $baris ){?>
					<div class="kiri" style="margin-bottom:20px;">
						<h1 style="margin-left:15px;font-size: 30px; margin-top: 5px;">TRANSAKSI BERHASIL</h1>
						<p style="margin-left:15px; font-size:25px;margin-top: 5px;">Toko <?php echo $baris['namatoko'];?></p>
						<table style=" margin-left: 15px; width: 40%;margin-top: 5px;" >
							<tr >
								<td >Harga</td>
								<td >: RP. <?php echo $baris['harga'];?></td>
							</tr>
							<tr>
								<td >ID Transaksi</td>
								<td >: <?php echo $baris['idtransaksi'];?></td>
							</tr>
							<tr >
								<td ><?php echo $baris['bank'];?></td>
								<td>: <?php echo $baris['rekening'];?></td>
							</tr>
							<?php  ?>

						</table>
						<button id="btn" type="" style="height:50px; width: 15%; background-color: orange; font-size: 18px;border-radius:50px; margin-left: 78%;margin-bottom: 10px;"><b>Sudah Dibayar</b></button></td>
					</div> 
				<?php  }
				?>			

			

			

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