<?php 

  session_start();
  include 'koneksi.php';

  if(isset($_POST["submit"])){

    if(empty($_POST['email']) or empty($_POST['password']) or empty($_POST['nama']) or empty($_POST['telepon']) or empty($_POST['alamat']) or empty($_POST['tgllahir']) or empty($_POST['tptlahir'])){
        $_SESSION['daftarpelanggan']=2;
        header ("location:registerpelanggan.php");
    }
    else{
        $nama=$_POST['nama'];
        $tgllahir=$_POST['tgllahir'];
        $tptlahir=$_POST['tptlahir'];
        $telepon=$_POST['telepon'];
        $alamat=$_POST['alamat'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $ktp=$_FILES['ktp']['name'];
        $x=explode('.',$ktp);
        $eks=strtolower(end($x));
        $asal=$_FILES['ktp']['tmp_name'];
        $dir="../ktp/$ktp";
        $targetfile=$dir;
        
        

        $uploudok=1;



        if(file_exists($targetfile)){
          $uploudok=0;
        }

        if($uploudok==0){
          $_SESSION['daftarpelanggan']=3;
          header ("location:registerpelanggan.php");
        }

        else{
          echo "ELSE";
            if(move_uploaded_file($asal, $targetfile)){
                $query=mysqli_query($koneksi,"INSERT INTO pelanggan (email,  password, nama,tgllahir, tptlahir,   telepon, alamat, ktp) VALUES ('$email', '$password', '$nama', '$tgllahir', '$tptlahir', '$telepon', '$alamat', '$ktp')") or die(mysqli_error($koneksi));

                if($query){
                  header ("location:login.php");
                }
                else{
                  $_SESSION['daftarpelanggan']=4;
                  header ("location:registerpelanggan.php");
                }
              }
              
            }  
    }
    
  }
      



?>