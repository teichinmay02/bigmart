<?php
    $dbhost= 'localhost';
    $dbName= 'bigmart';
    $user= 'root';
    $pass= 'root';
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $uid=$_POST['uid'];
    $passwd=$_POST['pass'];

    $conn = mysqli_connect($dbhost,$user,$pass,$dbName);
    if(!$conn)
        echo "Connection Failed";
    else
    {
        $statement="INSERT INTO users(fname,lname,email,uid,passwd) VALUES('$fname','$lname','$email','$uid','$passwd')";
        if (mysqli_query($conn, $statement)) 
            //echo "user account created";
            header("Location: home.php");
        else 
            echo "Error: " . $statement . ":-" . mysqli_error($conn);
         mysqli_close($conn);
    }  
?>
