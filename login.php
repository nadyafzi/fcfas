<?php

    include_once "koneksi.php";

    if (isset($_POST['username']))
    {
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['sandi']);
        $sql = "SELECT * FROM `pengguna` WHERE username = '$username'
            and password = '$password'";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            //if $result artinya ini kalau berhasil berjalannya sebuah query
            $user_yang_ditemukan = mysqli_num_rows($result);
            if ($user_yang_ditemukan === 1) {
                //berarti ada satu user yang sesuai..
                // 1 + 1 = 2 beda sama "1" + "1" = 2
                session_start();
                $_SESSION['username'] = $username;
                header("Location: sudah_login.php");
                exit();
            } else {
                $hmm = "sedih";
                echo 'salah username atau password :(';
                echo "$hmm";
            }
        }
    }
?>
<html>
<body>
<form method="post">

        <p class="tulisan_login">Silahkan login</p>
        
<table>
<tr>
    <td>Username</td>
    <td>Password</td>
</tr>
<tr>
    <td><input type="text" name="username"></td>
    <td><input type="password" name="sandi"></td>
</tr>
<tr>
    <td><button type="submit">Simpan</button></td>
</tr>
</table>
</form>
</body>
</html>
