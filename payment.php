<?php 
include('config.php');

if(isset($_POST['pay_id']))
{
    $pay_id=$_POST['pay_id'];
    $amt=$_POST['amount'];
    $query="INSERT INTO payment ('name','amount','pay_id','pay_status' VALUES ('demo','$amt','$pay_id','sucess')";
    mysqli_query($conn,$query);
}
?>