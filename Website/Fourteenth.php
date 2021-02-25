<?php
$ncols=$_GET['ncols'];
echo '<tr><th>Name</th><th>Data Type</th><th>Size</th></tr>';
'<tr><td><input type="text" name=';
for($i=1;$i<=$ncols;$i++){
	echo '<tr><td><input type="text" name="name'.$i.'"/></td><td><select name="col'.$i.'"><option>char</option><option>varchar</option><option>int</option></select></td><td><input type="number" name="size'.$i.'"/></td></tr>';
}
?>