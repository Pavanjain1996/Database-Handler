<?php session_start(); ?>
<html>
<head>
<title>Databases</title>
<link rel="stylesheet" href="DBstyle.css"/>
<style>
#DBforum
{
	font-size:25px;
	padding:15px;
}
</style>
</head>
<body>
<div id="heading">
<h1>&nbsp      :Databases > <?php echo $_SESSION['username']; ?></h1>
</div>
<div id="logout">
<form action="First.php" method="post">
<input type="submit" value="Logout"/>
</form></div>
<a href="http://localhost/DatabaseHandler/Fourth.php">Create Database</a><br><br>
<div id="DBforum">
<form method="post" action="Sixth.php">
<label>Select Database&nbsp   &nbsp</label>
<select name="dbname">
<?php
session_start();
$con=mysqli_connect('localhost',$_SESSION['username'],$_SESSION['password']);
$query='show databases';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=1;$i<=$n;$i++){
	$row=mysqli_fetch_array($res);
	echo '<option>'.$row['Database'].'</option>';
}
?>
</select>
<div><br><input type="submit" value="Enter Database" style="width:26%"></div>
</form>
</div>
</body>
</html>