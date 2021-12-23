<?php       
     session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_COOKIE['username']);
    unset($_COOKIE['password']);
    //session_destroy();
    header('Location: ../index.php');
?>