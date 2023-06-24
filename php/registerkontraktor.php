<!DOCTYPE html>
<?php 
session_start();
 ?>
<html>
  <head>
  	<title> 
  	</title>
  	 <link rel="stylesheet" type="text/css" href="../css/styleregister.css">
</head>

<body>

    <div class="header">
      <div class="thumbnail">
        <h1>SELAMAT DATANG</h1>
        <h1>KONTRAKTOR</h1>
        <p>Kami Tunggu Kesan</p>
        <p>Menarik Dari Anda!</p>
      </div>
    </div>

    <div class="content">
      <form name ="" action="prosesregisterkonstraktor.php" method="POST" enctype="multipart/form-data"> 
        <table class="main" align="center">

          <tr>
            <td><label for="nama">Nama Perusahaan</label></td> 
            <td></td>
            <td><input class="kotak" type="nama" name="nama" value=""></td>
          </tr>


          <tr>
            <td><label for="telepon">No Telepon</label></td> 
            <td></td>
            <td><input class="kotak" type="telepon" name="telepon" value=""></td>
          </tr>
          <tr>
            <td><label for="alamat">Alamat</label></td> 
            <td></td>
            <td><input class="kotak" type="alamat" name="alamat" value="" style="height: 40px;"></td>
          </tr>

          <tr>
            <td><label for="ktp">KTP</label></td>
            <td> </td> 
            <td><input class="kotak" type="file" name="ktp" id="ktp" style="width: 169px;"></td>
            </tr>
          <tr>
            <td><label for="portofolio">Portofolio</label></td>
            <td> &nbsp </td> 
            <td><input class="kotak" type="file" name="portofolio" id="portofolio" style="width: 169px;"> </td>
          </tr>

          <tr>
            <td><label for="logo">Logo</label></td>
            <td> &nbsp </td> 
            <td><input class="kotak" type="file" name="logo" id="logo" style="width: 169px;"> </td>
          </tr>

           <tr>
            <td><label for="deskrip">Deskripsi</label></td> 
            <td></td>
            <td><input class="kotak" type="alamat" name="deskrip" value="" style="height: 40px;"></td>
          </tr>

          <tr>
            <td><label for="email">Email</label></td> 
            <td></td>
            <td><input class="kotak" type="email" name="email" value=""></td>
          </tr>
          <tr>
            <td><label for="password">Kata Sandi</label></td> 
            <td></td>
            <td><input class="kotak" type="password" name="password" value="" ></td>
          </tr>

          <tr>
            <td><label for="cekpassword">Konfirmasi Kata Sandi</label></td> 
            <td></td>
            <td><input class="kotak" type="password" name="cekpassword" value="" ></td>
          </tr>

          <h3 id="h3" style="top:410px;"><input class="kotak" type="radio" name=""> saya setuju dengan ketentuan yang berlaku</h3>
    
        
          </table>  
          <button id="btn" name="submit" type="submit" style="top: 470px;"><b>Buat</b></button>
        </form>
        
    </div>

    <div class="footer">
    </div>
    <?php 
    if(empty($_SESSION["daftarkontraktor"])){
      $_SESSION['daftarkontraktor']=1;
    }

    elseif($_SESSION['daftarkontraktor']==2){?>
      <script type="text/javascript">
        alert("Data Tidak Boleh Kosong!!!");  
      </script><?php
      
    }
    elseif($_SESSION['daftarkontraktor']==3){?>
      <script type="text/javascript">
        alert("File Sudah Terdaftar!!! Ganti Nama File!!!");  
      </script><?php
      
    }

    elseif($_SESSION['daftarkontraktor']==4){?>
      <script type="text/javascript">
        alert("Gagal Mendaftar Coba Lagi");  
      </script><?php
      
    }

    else{
      
    }
  ?>
    <body>
      <?php 
        $_SESSION['daftarkontraktor']=1;
       ?>
      </html>