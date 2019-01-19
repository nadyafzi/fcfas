<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    //jika username udah ada maka langsung
    //tanpa login
} else {
    header("Location: login.php");
    exit();
}

if (isset($_GET['aksi']) && $_GET['aksi'] == 'logout')
{
    session_destroy();
    header("Location: form.php");
    exit();
}