<?php 
include('config.php');
$gtt=$_POST['grandtotal'];
// echo $gtt;
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$addr=$_POST['addr'];
$pincode=$_POST['pincode'];
$total=$_POST['grandtotal'];
// echo $total;

$statement="INSERT INTO checkout(fname,lname,email,addr,pincode,total) VALUES('$fname','$lname','$email','$addr','$pincode','$total')";
if (mysqli_query($conn, $statement)) 
            //echo "user account created";
            // header("Location: home.php");
            // header('location: inv.php');
            echo "";