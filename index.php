<?php
//include datbase connection file
include_once("koneksi.php");

//check if form is submitted for user update, then refirect to homepage after apdate
if(isset($_POST['update']))
{
	$id = $POST['id'];
	
	$nama           = mysqli_real_escape_string($conn,$_POST['nama']);
 	$npm  	        = mysqli_real_escape_string($conn,$_POST['npm']);
  	$kelas 	        = mysqli_real_escape_string($conn,$_POST['kelas']);
  	$jurusan      	= mysqli_real_escape_string($conn,$_POST['jurusan']);
  	$domisili	    = mysqli_real_escape_string($conn,$_POST['domisili']);
  	$jenis_kelamin 	= mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);
  	$nohp         	= mysqli_real_escape_string($conn,$_POST['nohp']);
	$line         	= mysqli_real_escape_string($conn,$_POST['line']);
	$email        	= mysqli_real_escape_string($conn,$_POST['email']);
	
	//update user data
	$result = mysqli_query($conn,"UPDATE tbl_riko SET nama='$nama', npm='$npm', alamat_email='$alamat_email', no_hp='$no_hp' WHERE id=$id");
	
	//redirect to homepage to display update user in list
	header("Location: tampil.php");
}
?>

<?php
	// Display selected user data based on id
	// Getting id form url
	$id = $_GET['id'];
	
	// fetech user data based on id
	$result = mysqli_query($conn, "SELECT * FROM tbl_nadya WHERE id=$id");
	
	while($user_data = mysqli_fetch_array($result))
	{
		$nama        	  =$user_data['nama'];
		$npm          	  =$user_data['npm'];
		$kelas        	  =$user_data['kelas'];
    	$jurusan 	 	  =$user_data['jurusan'];
    	$domisili         =$user_data['jurusan'];
   		$jenis_kelamin 	  =$user_data['jurusan'];
    	$nohp 	          =$user_data['jurusan'];
    	$ine 	          =$user_data['jurusan'];
    	$email  	      =$user_data['jurusan'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	
  <meta charset="UTF-8">
  <title>Form Pendaftaran FIKTI CLASS FOR ACTIVE STUDENTS BEM FIKTI UG 2019 </title>
  <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Formulir Pendaftaran FIKTI ART FESTIVAL BEM FIKTI UG 2019"/>
<meta name="author" content="Adèle Royer"/>

<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"> 

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="//fikti.bem.gunadarma.ac.id/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php //require_once($_SERVER['DOCUMENT_ROOT'] . '/analisis.php'); ?>
<div class="container-contact100">

		<div class="wrap-contact100">

  <div class="page-header">
  <div class="row">
 <div class="col-sm-4">
  <img src ="https://fikti.bem.gunadarma.ac.id/wp-content/uploads/BEM-FIKTI-logo.png" width ="60px">
 </div>
 
  <div class="col-sm-8">

	<a href="https://fikti.bem.gunadarma.ac.id"  target="_blank"><h3> BEM FIKTI UNIVERSITAS GUNADARMA</h3></a>   
</div>
    
</div>	
  </div>
<hr>
				<form method="post" action="android.php" id="survey-form" name="survey-form" class="contact100-form validate-form">
					<span class="contact100-form-title">
						<h3 id="title">Form Pendaftaran FIKTI CLASS FOR ACTIVE STUDENTS BEM FIKTI UG 2019</h3>
            <p style="text-transform: none;">Kegiatan Ini Merupakan Kegiatan Belajar Mengajar Didalam Kelas Yang Akan diikuti Oleh Mahasiswa/i Universitas Gunadarma Untuk Konsultasikan Masalah yang Berkaitan dengan Materi Kegiatan.</p>
					</span>

				
				Nama Lengkap *
				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
					<span class="focus-input100"></span>
				</div>
				
				NPM * 
				<div class="wrap-input100 validate-input" data-validate = "Please enter your npm">
					<input class="input100" type="text" name="npm" placeholder="Nomor Pokok Mahasiswa">
					<span class="focus-input100"></span>
				</div>
				
				Kelas *
				<div class="wrap-input100 validate-input" data-validate = "Please enter your kelas">
					<input class="input100" type="text" name="kelas" placeholder="Class">
					<span class="focus-input100"></span>
				</div>
				
				Jurusan *
				<div class="contact100-form-btn" data-validate = "Please enter your jurusan">
				<div class="col">
				<label class="m-b-xs">
               <input type="radio" name="jurusan" value="Sistem Informasi" /> Sistem Informasi 
			   
               </label>
			   </div>
			   <div class="col">
               <label class="m-b-xs">
               <input type="radio" name="jurusan" value="Sistem Komputer" /> Sistem Komputer
               </label>
			   </div>
               			</div>

				
				<br>Domisili *</br>
				<div class="wrap-input100 validate-input" data-validate = "Please enter your domisili">
				<select id="dropdown" name="domisili" class="input100">
                     <option>Silahkan Dipilih</option>
                     <option value="Depok" >Depok</option>
                     <option value="Kalimalang" >Kalimalang</option>
                     <option value="Karawaci" >Karawaci</option>
                     <option value="Cengkareng" >Cengkareng</option>
                     <option value="Salemba" >Salemba</option>
                     <option value="Simatupang" >Simatupang</option>
					 </select>
				</div>
				
				<br>Jenis Kelamin *</br>
				<div class="contact100-form-btn" data-validate = "Please enter your jk">
				<div class="col">
				<label class="m-b-xs">
               <input type="radio" name="jenis_kelamin" value="Laki-Laki" /> Laki-Laki
			   
               </label>
			   </div>
			   <br><div class="col">
               <label class="m-b-xs">
               <input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan
               </label>
			   </div>
               			</div>
               			</br>
				
				<br>NO. HP (WA) *<br/>
				<div class="wrap-input100 validate-input" data-validate = "Please enter your nohp">
					<input class="input100" type="text" name="nohp" placeholder="WhatApp Number">
					<span class="focus-input100"></span>
				</div>
				
				ID Line * 
				<div class="wrap-input100 validate-input" data-validate = "Please enter your line">
					<input class="input100" type="text" name="line" placeholder="Line ID">
					<span class="focus-input100"></span>
				</div>
				
				Email *
				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>
				
               

				<div class="container-contact100-form-btn">
					<br><button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Next
						</span>
					</button></br>
				</div>
				</form>
				<br><hr>
				<div class="copyright m-t-sm"></br>
            <div>Maintained By <a href="https://fikti.bem.gunadarma.ac.id" title="Nadya">Biro PTI</a> 2018/2019 <i class="glyphicon glyphicon-heart"></i></div>
</div>

</div>
</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



</body>
</html>
