<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="DBstyle.css"/>
<script>
function ValidateOne(){
	var arr=document.getElementsByTagName("input");
	var result=true;
	if(arr[0].value.length==0){
		result=false;
	}
	if(arr[1].value.length==0){
		result=false;
	}
	if(!result){
		alert("Some fields missing");
	}
	return result;
}
</script>
<style>
#forum1
{
	width:300px;
	background-color:rgb(50,205,175);
	font-size:20px;
	padding:20px;
	font-family:comic sans ms;
	position:relative;
	left:500px;
	top:170px;
	border-radius:20px;
}
</style>
</head>
<body>
<div id="forum1">
<h3>User Login</h3>
<form method="post" action="Second.php" onsubmit="return ValidateOne()">
<div><label>Username</label>
<input type="text" name="username"/></div><br/>
<div><label>Password</label>
<input type="password" name="password"/></div><br/>
<div><input type="submit" value="Login"/>
<input type="reset" value="Clear"/></div>
</form>
</div>
</body>
</html>