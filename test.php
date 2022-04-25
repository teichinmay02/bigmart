<?php

    $myuid = "chinmayt09";
    $mypass = "pass@12345";
    
    if(isset($_POST['submit'])){
        $uid = $_POST['uid'];
        $pass = $_POST['pass'];
        if($uid == $myuid and $pass == $mypass){
            if(isset($_POST['remember'])){
                setcookie('uid', $uid, time()+60*60*1);
                setcookie('pass', $pass, time()+60*60*1);
            }
            session_start();
            $_SESSION['uid'] = $uid;
            header("location:home.php");
        } else {
            echo "uid or pass is incorrect! <br/> <a href='login.php'>Try Again?</a> ";
        }
    } else {
        header("location: login.php");
    }

?>