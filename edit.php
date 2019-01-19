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
  $domisili	      = mysqli_real_escape_string($conn,$_POST['domisili']);
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
		$nama           	=$user_data['nama'];
		$npm             	=$user_data['npm'];
		$kelas          	=$user_data['kelas'];
    $jurusan 	        =$user_data['jurusan'];
    $domisili         =$user_data['jurusan'];
    $jenis_kelamin 	  =$user_data['jurusan'];
    $nohp 	          =$user_data['jurusan'];
    $ine 	            =$user_data['jurusan'];
    $email  	        =$user_data['jurusan'];
	}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>

	<a href="tampil.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action ="edit.php">
	<h2>Mengubah / edit Data</h2>
<p>Silahkan ubah data pada kolom dibawah ini :</p>

<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">Nama</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">NPM</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your npm..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Alamat Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your email..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">No. HP</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your number..">
    </div>
  </div>

  <div class="row">
  <br><button id="submit" type="submit" class="button">Update</button>
  </div>
  
</div>

</body>
</html>

