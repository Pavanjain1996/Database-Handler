<?php
session_start();
$numcol=$_POST['ncols'];
$tablename=$_POST['tablename'];
$query='create table '.$tablename.'(';
for($i=1;$i<=$numcol;$i++){
	$query=$query.$_POST['name'.$i].' '.$_POST['col'.$i].'('.$_POST['size'.$i].')';
	if($i!=$numcol){
		$query=$query.',';
	}
}
$query=$query.')';
$con=mysqli_connect('localhost',$_SESSION['username'],$_SESSION['password']);
mysqli_select_db($con,$_SESSION['dbname']);
mysqli_query($con,$query);
header('location:http://localhost/DatabaseHandler/Third.php');
?>