<!DOCTYPE html>
<?php
  session_start();
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Log in</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">

    

    <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <script>
    function salah() {
      alert("Password Atau Email Anda Salah");
    }
  </script>



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body{
        background-image: url("../background/background login.jpg");
        background-size: cover;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
<form class="form-signin" method="POST" action="proseslogin.php" style="background-color: white;border-radius:30px;">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Masuk</h1>
    <p>Masukkan Email dan Password Dengan Benar! </p>
  </div>

  <div class="form-label-group">
    <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" required autofocus>
    <label for="inputEmail">Masukkan Email Anda</label>
  </div>

  <div class="form-label-group">
    <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" required>
    <label for="inputPassword">Masukkan Password Anda</label>
  </div>


  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; <?= date('Y')?></p>
  <?php 
    if(empty($_SESSION["emailsalah"])){
      $_SESSION['emailsalah']=False;
    }

    elseif($_SESSION['emailsalah']==True){?>
      <script type="text/javascript">
        alert("Email Atau Password Salah");  
      </script><?php
      
    }else{

    }
  ?>
</form>
  </body>
  <?php
  $_SESSION["emailsalah"]=False;
  ?>
</html>
