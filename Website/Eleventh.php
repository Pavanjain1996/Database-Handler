<?php
session_start();
$con=mysqli_connect('localhost',$_SESSION['username'],$_SESSION['password']);
mysqli_select_db($con,$_SESSION['dbname']);
$query='drop table '.$_SESSION['tablename'];
mysqli_query($con,$query);
header('location:http://localhost/DatabaseHandler/Third.php');
?>