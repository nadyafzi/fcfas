<?php

if(session_id() == '') {
        session_start(); //untuk memulai session
} 

if (isset($_GET['ak']) && $_GET['ak'] == 'logout') {
    session_destroy();
    header("Location: /kesma/FCFAS/mimin/login/");
    exit();
}

if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] === true) {
    //ok..
} else {
    session_destroy();
     header("Location: /kesma/FCFAS/mimin/login/");
    exit();
}

date_default_timezone_set("Asia/Jakarta");
