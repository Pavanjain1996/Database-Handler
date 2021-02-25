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
?>
<html>
<head>
<title>Insert Data</title>
<link rel="stylesheet" href="DBstyle.css"/>
<style>
#insertform
{
	background-color:pink;
	width:500px;
	padding:10px;
	font-family:comic sans ms;
	font-size:20px;
}
</style>
</head>
<body>
<div id="heading">
<h1>&nbsp      :Insert > <?php echo $_SESSION['tablename']; ?></h1>
</div>
<div id="logout">
<form action="First.php" method="post">
<input type="submit" value="Logout"/>
</form></div>
<div id="insertform">
<form action="Tenth.php" method="post">
<label>Insert Data</label>
<table cellpadding="5px">
<?php
for($i=1;$i<=$nrows;$i++){
	echo '<tr><td><label>'.$arr[$i].'</label></td>';
	echo '<td><input type="text" name="'.$arr[$i].'"/></td></tr>';
}
?>
</table>
<input type="submit" value="Insert"/>
</form></div>
</body>
</html>