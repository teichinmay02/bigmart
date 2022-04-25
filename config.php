<?php
    $dbhost= 'localhost';
    $dbName= 'bigmart';
    $user= 'root';
    $pass= 'root';

    $conn = mysqli_connect($dbhost,$user,$pass,$dbName);
    if(!$conn)
    {
        echo "Connection Failed";
    }
?>
