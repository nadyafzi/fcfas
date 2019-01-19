<?php
    if (isset($_POST['siap'])) {
        //oke sekarang proses dia login
        define("username","admin_fcfas");
       define("pwd","fcfas2019");

        if ($_POST['login'] === username &&  $_POST['password'] === pwd) {
          //oke masuk
          session_start();
          $_SESSION['login_admin'] = true;
          header("Location: ../index.php");
          exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Buat Cek Pendaftar FIKTI CLASS FOR ACTIVE STUDENTS 2018/2019</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active">Halaman login ADMIN FIKTI CLASS FOR ACTIVE STUDENTS BEM FIKTI UG 2018/2019</h2>
    

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://fikti.bem.gunadarma.ac.id/wp-content/uploads/BEM-FIKTI-logo.png" style="width:120px;height:140px" id="icon" alt="User Icon" />
    <br>
    <a href="https://fikti.bem.gunadarma.ac.id" rel="nofollow" target="_blank"> BEM FIKTI UNIVERSITAS GUNADARMA</a></h2>
    </div>

    <!-- Login Form -->
    <form action="" method="post">
    <div class="m-b-md text-center">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      
      <input type="password" id="password" class=fadeIn third" name="password" placeholder="password">
      </div>
      <input type="submit" class="fadeIn fourth" name="siap" value="Log In">
    </form>

    <!-- Remind Passowrd -->


<div class="copyright m-t-sm">
            <div>Maintained By Biro PTI <br>2018/2019 <a href="http://www.adeleroyer.fr" </a></div>
         </div>

  </div>
</div>
  
  

</body>

</html>
