<?php       
     session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_COOKIE['username']);
    unset($_COOKIE['password']);
    setcookie ("username",$_POST["username"],time()- (10 * 365 * 24 * 60 * 60));
    setcookie ("password",$_POST["password"],time()- (10 * 365 * 24 * 60 * 60));
    //session_destroy();
    header('Location: ../index.php');
?>