<?php
if ($_GET['npm'] !== null) {
    require_once("koneksi.php");

$npm = mysqli_real_escape_string($conn,$_GET['npm']);
$ret = $conn->query("SELECT * FROM `data_verfikasi` WHERE npm = '$npm'");

if ($ret->num_rows > 0) {

    $sql = "UPDATE `data_verfikasi` SET `konfirmasi`= 1 WHERE `npm`= ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$_GET['npm']);
    if ($stmt->execute()) {

            echo "Berhasil";
    } else {
        echo "hmm";
    }
} else {
echo "hmm";
}

}
?>