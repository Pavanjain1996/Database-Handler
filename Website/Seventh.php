<?php
session_start();
$_SESSION['tablename']=$_POST['tablename'];
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
$queryrows='select * from '.$_SESSION['tablename'];
$resrows=mysqli_query($con,$queryrows);
$ncontent=mysqli_num_rows($resrows);
?>
<html>
<head>
<title>Tables</title>
<link rel="stylesheet" href="DBstyle.css"/>
<style>
#tabledata
{
	font-size:20px;
}
</style>
</head>
<body>
<div id="heading">
<h1>&nbsp      :Content > <?php echo $_SESSION['tablename']; ?></h1>
</div>
<div id="logout">
<form action="First.php" method="post">
<input type="submit" value="Logout"/>
</form></div>
<div><a href="http://localhost/DatabaseHandler/Eleventh.php">Drop Table</a>&nbsp  &nbsp
<a href="http://localhost/DatabaseHandler/Nineth.php">Insert New</a></div><br>
<table id="tabledata" bgcolor="pink" cellpadding="10px" border="5px">
<?php
echo '<tr>';
for($i=1;$i<=$nrows;$i++){
	echo '<th>'.$arr[$i].'</th>';
}
echo '</tr>';
for($i=1;$i<=$ncontent;$i++){
	$content=mysqli_fetch_array($resrows);
	echo '<tr>';
	for($j=1;$j<=$nrows;$j++){
		echo '<td>'.$content[$arr[$j]].'</td>';
	}
	echo '</tr>';
}
?>
</table>
</body>
</html>