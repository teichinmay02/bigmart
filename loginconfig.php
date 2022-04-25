<?php

    session_start();
    $uid=$_POST['user'];
    // echo $uid;
    
    
    $dbhost= 'localhost';
    $dbName= 'bigmart';
    $user= 'root';
    $pass= 'root';

    $conn = mysqli_connect($dbhost,$user,$pass,$dbName);

    $username = $_POST['user'];  
    $password = $_POST['pass'];  

    if(!$conn)
    {
        echo "Connection Failed";
    }
    else
    {
        // echo "conencted suucessfully to ".$dbName." database";
        $sql = "select * from users where uid = '$username' and passwd = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
        if($count == 1)
        {  
            
            header('location: home.php');
        }  
        else{  
            echo "
            <script>
                    alert('login failed. check login credentials');
                    window.location.href='login.php';
            </script> ";
        }     

    }

?>