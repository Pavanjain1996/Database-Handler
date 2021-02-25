<?php
session_start();
$con=mysqli_connect('localhost',$_SESSION['username'],$_SESSION['password']);
mysqli_select_db($con,$_SESSION['dbname']);
$querycolumns='desc '.$_SESSION['tablename'];
$rescolumns=mysqli_query($con,$querycolumns);
$nrows=mysqli_num_rows($rescolumns);
$arr;
for($i=1;$i<=$nrows;$i++){
	$row=mysqli_fetch_array($rescolumns);
	$arr[$i]=$row['Field'];
}
$query='insert into '.$_SESSION['tablename'].'(';
for($i=1;$i<=$nrows;$i++){
	$query=$query.$arr[$i];
	if($i!=$nrows){
		$query=$query.',';
	}
}
$query=$query.') values (';
for($i=1;$i<=$nrows;$i++){
	$query=$query.'"'.$_POST[$arr[$i]].'"';
	if($i!=$nrows){
		$query=$query.',';
	}
}
$query=$query.')';
mysqli_query($con,$query);
header('location:http://localhost/DatabaseHandler/Third.php');
?>