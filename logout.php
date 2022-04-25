<?php 
    session_start();
    session_destroy();
    if (isset($_COOKIE['uid']) and isset($_COOKIE['pass'])) {
        $uid = $_COOKIE['uid'];
        $pass = $_COOKIE['pass'];
        setcookie('uid', $uid, time()-1);
        setcookie('pass', $pass, time()-1);
    }
    echo "You are successfully logged out! <br> <a href='login.php'>LogIn in Again</a> ";
?>