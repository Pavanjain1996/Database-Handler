<?php
session_start();
$_SESSION['dbname']=$_POST['dbname'];
?>
<html>
<head>
<title>Tables</title>
<link rel="stylesheet" href="DBstyle.css"/>
<style>
#tableforum
{
	font-size:25px;
	padding:15px;
}
</style>
</head>
<body>
<div id="heading">
<h1>&nbsp      :Tables > <?php echo $_SESSION['dbname']; ?></h1>
</div>
<div id="logout">
<form action="First.php" method="post">
<input type="submit" value="Logout"/>
</form></div>
<a href="http://localhost/DatabaseHandler/Eighth.php">Drop Database</a>&nbsp  &nbsp
<a href="http://localhost/DatabaseHandler/Twelfth.php">Create Table</a><br><br>
<div id="tableforum">
<form method="post" action="Seventh.php">
<label>Select Table&nbsp   &nbsp</label>
<select name="tablename">
<?php
$con=mysqli_connect('localhost',$_SESSION['username'],$_SESSION['password']);
mysqli_select_db($con,$_SESSION['dbname']);
$query='show tables';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
$col='Tables_in_'.$_SESSION['dbname'];
for($i=1;$i<=$n;$i++){
	$row=mysqli_fetch_array($res);
	echo '<option>'.$row[$col].'</option>';
}
?>
</select>
<div><br><input type="submit" value="Enter Table"></div>
</form>
</div>
</body>
</html>