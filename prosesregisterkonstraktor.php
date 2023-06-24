<?php 
session_start();
  include 'koneksi.php';

  if(isset($_POST["submit"])){
    if(empty($_POST['email']) or empty($_POST['password']) or empty($_POST['nama']) or empty($_POST['telepon']) or empty($_POST['deskrip']) or empty($_POST['alamat'])){
        $_SESSION['daftarkontraktor']=2;
        header ("location:registerkontraktor.php");
    }
    else{
        $nama=$_POST['nama'];
        $telepon=$_POST['telepon'];
        $alamat=$_POST['alamat'];
        $email=$_POST['email'];
        $deskrip=$_POST['deskrip'];
        $password=$_POST['password'];
        $ktp=$_FILES['ktp']['name'];
        $x=explode('.',$ktp);
        $eks=strtolower(end($x));
        $asal=$_FILES['ktp']['tmp_name'];
        $dir="../ktp/$ktp";
        $targetfile=$dir;
        
        $portofolio=$_FILES['portofolio']['name'];
        $y=explode('.',$portofolio);
        $eks2=strtolower(end($y));
        $asal2=$_FILES['portofolio']['tmp_name'];
        $dir2="../portofolio/$portofolio";
        $targetfile2=$dir2;


        $logo=$_FILES['logo']['name'];
        $asal3=$_FILES['logo']['tmp_name'];
        $dir3="../kontraktor/$logo";
        $targetfile3=$dir3;

        $uploudok=1;



        if(file_exists($targetfile)){
          $uploudok=0;
          if(file_exists($targetfile2)){
            $uploudok=0;
            if(file_exists($targetfile3)){
                $uploudok=0;
            }
          }
        }

        if($uploudok==0){
            $_SESSION['daftarkontraktor']=3;
          header ("location:registerkontraktor.php");
        }

        else{
            if(move_uploaded_file($asal, $targetfile)){
              if(move_uploaded_file($asal2,$targetfile2)){
                if(move_uploaded_file($asal3, $targetfile3)){
                    $query=mysqli_query($koneksi,"INSERT INTO konstraktor (email, password, nama, telepon, alamat, ktp, portofolio, deskripsi, logo) VALUES ('$email', '$password', '$nama','$telepon' ,'$alamat', '$ktp', '$portofolio','$deskrip','$logo')") or die(mysqli_error($koneksi));

                    if($query){
                        header ("location:login.php");
                    }
                    else{
                        $_SESSION['daftarkontraktor']=4; 
                        header ("location:registerkontraktor.php");
                    }
                }
                
              }
              
            }  
          
          
        }
    }
    
    
}

?>