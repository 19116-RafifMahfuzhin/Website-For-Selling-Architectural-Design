<?php 
  session_start();
  include 'koneksi.php';

  if(isset($_POST["submit"])){

    if(empty($_POST['email']) or empty($_POST['password']) or empty($_POST['nama']) or empty($_POST['telepon']) or empty($_POST['deskrip']) or empty($_POST['alamat']) or empty($_POST['tgllahir']) or empty($_POST['tptlahir'])){
        $_SESSION['daftararsitek']=2;
        header ("location:registerarsitekbaru.php");
    }
    else{
        $nama=$_POST['nama'];
        $tgllahir=$_POST['tgllahir'];
        $tptlahir=$_POST['tptlahir'];
        $telepon=$_POST['telepon'];
        $alamat=$_POST['alamat'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $deskrip = $_POST['deskrip'];


        $ktp=$_FILES['ktp']['name'];
        $asal=$_FILES['ktp']['tmp_name'];
        $dir="../ktp/$ktp";
        $targetfile=$dir;
        
        $portofolio=$_FILES['portofolio']['name'];
        $asal2=$_FILES['portofolio']['tmp_name'];
        $dir2="../portofolio/$portofolio";
        $targetfile2=$dir2;

        $logo=$_FILES['logo']['name'];
        $asal3=$_FILES['logo']['tmp_name'];
        $dir3="../logo/$logo";
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
          $_SESSION['daftararsitek']=3;
          header ("location:registerarsitekbaru.php");
        }

        else{
            if(move_uploaded_file($asal, $targetfile)){
              if(move_uploaded_file($asal2,$targetfile2)){
                if(move_uploaded_file($asal3, $targetfile3)){
                    $query=mysqli_query($koneksi,"INSERT INTO arsitek (email, password, nama, telepon,tptlahir, tgllahir, alamat, ktp, portofolio, deskrip, logo) VALUES ('$email', '$password', '$nama','$telepon', '$tptlahir','$tgllahir' ,'$alamat', '$ktp', '$portofolio','$deskrip','$logo')") or die(mysqli_error($koneksi));

                    if($query){
                      header ("location:login.php");
                    }
                    else{
                      $_SESSION['daftararsitek']=4;
                      header ("location:registerarsitekbaru.php");
                    }
                }
                
              }
              
            }  
          
          
        }
    }
    



  }


?>