<?php
	include("connection.php");
	
	
	$edit_rec=$_GET["edit"];
	
	$query="select * from students where id='$edit_rec'";
	$rquery=mysql_query($query);
	while($row=mysql_fetch_array($rquery)){
			$rid=$row[0];
			$name=$row[1];
			$school=$row[2];
			$rn=$row[3];
			$rslt=$row[4];
	}
	
	?>
<html>
<head><title>Update record</title></head>
<body>
<form method="POST" action="redirecting.php?edit_r=<?php echo $rid; ?>">
<table width="500px" align="center" border="1px">
<tr>
<th align="center" bgcolor="yellow" colspan="4" ><h3>Update Records</h3></th>
</tr>

<tr>
<td align="right"> Student Name </td>
<td><input type="text" name="stname" value="<?php echo $name;?>"/></td>
</tr>
<tr>
<td align="right"> School Name </td>
<td><input type="text" name="scname" value="<?php echo $school;?>"/></td>
</tr>
<tr>
<td align="right"> Roll no </td>
<td><input type="text" name="rollno" value="<?php echo $rn;?>"/></td>
</tr>
<tr>
<td align="right"> Result </td>
<td><input type="text" name="result" value="<?php echo $rslt;?>"/></td>
</tr>
<tr>

<td align="center" colspan="4"><input  type="Submit" name="update" value="Update"/><input type="reset" value="reset"/></td>
</tr>
</table>
</form>
</body>
</html>
