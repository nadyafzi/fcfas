<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama    							= mysqli_real_escape_string($conn,$_POST['nama']);
$npm	        						= mysqli_real_escape_string($conn,$_POST['npm']);
$kelas    					  		= mysqli_real_escape_string($conn,$_POST['kelas']);
$jurusan   					  		= mysqli_real_escape_string($conn,$_POST['jurusan']);
$domisili			            			= mysqli_real_escape_string($conn,$_POST['domisili']);
$jenis_kelamin				        	    	= mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);
$nohp			        	    			= mysqli_real_escape_string($conn,$_POST['nohp']);
$line			        	    			= mysqli_real_escape_string($conn,$_POST['line']);
$email			        	    			= mysqli_real_escape_string($conn,$_POST['email']);
$minat								= mysqli_real_escape_string($conn,$_POST['minat']);


// query SQL untuk insert data

$query="INSERT INTO peserta (nama,npm,kelas,jurusan,domisili,jenis_kelamin,nohp,line,email,minat) values ('$nama','$npm','$kelas','$jurusan','$domisili','$jenis_kelamin','$nohp','$line','$email','$minat')";
		
if (mysqli_query($conn, $query)) {

// mengalihkan ke halaman index.php
header("location: success/index.html");
} else {
echo 'Terjadi Galat, Atau Anda Sudah Pernah Mendaftar Sebelumnya';

}


?>