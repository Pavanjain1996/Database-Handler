<?php 
session_start();
$con=mysqli_connect('localhost',$_SESSION['username'],$_SESSION['password']);
$query="create database ".$_POST['DBname'];
mysqli_query($con,$query);
header('location:http://localhost/DatabaseHandler/Third.php');
mysqli_close($con);
?>
