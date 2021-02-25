<html>
<head>
<title>Tables</title>
<link rel="stylesheet" href="DBstyle.css"/>
<style>
#createTable
{
	padding:10px;
	font-size:20px;
	font-family:comic sans ms;
	background-color:pink;
	width:460px;
}
</style>
<script>
function makeTable(num){
	var req=new XMLHttpRequest();
	req.open("GET","http://localhost/DatabaseHandler/Fourteenth.php?ncols="+num,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
			document.getElementById("namecol").innerHTML=req.responseText;
		}
	};
}
</script>
</head>
<body>
<div id="heading">
<h1>&nbsp      :Create Table</h1>
</div>
<div id="logout">
<form action="First.php" method="post">
<input type="submit" value="Logout"/>
</form></div>
<div id="createTable">
<form method="post" action="Thirteenth.php">
<label>How many columns do you want to have ?</label><div><br>
<input type="number" max="25" min="1" name="ncols" style="width:100px" onchange="makeTable(this.value)">
</div>
<div><br/><label>Table Name : </label><input type="text" name="tablename"/></div>
<div><br><table id="namecol" style="font-size:20px" border="2px" cellpadding="5px">
<tr><th>Name</th><th>Data Type</th><th>Size</th></tr>
</table></div>
<div><br/><input type="submit" value="Create" style="width:100px"/></div>
</form></div>
</body>
</html>