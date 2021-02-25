<?php
session_start();
$con=mysqli_connect('localhost',$_SESSION['username'],$_SESSION['password']);
$query='drop database '.$_SESSION['dbname'];
mysqli_query($con,$query);
header('location:http://localhost/DatabaseHandler/Third.php');
?>