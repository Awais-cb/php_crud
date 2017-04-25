<html>
<head>
<title> Student data </title>
</head>
<body>
<?php
	include("connection.php");
?>

<form method="POST" action="student.php">
<table width="500px" align="center" border="1px">
<tr>
<th align="center" bgcolor="yellow" colspan="4" ><h3>Student Information System</h3></th>
</tr>

<tr>
<td align="right"> Student Name </td>
<td><input type="text" name="stname"/></td>
</tr>
<tr>
<td align="right"> School Name </td>
<td><input type="text" name="scname"/></td>
</tr>
<tr>
<td align="right"> Roll no </td>
<td><input type="text" name="rollno"/></td>
</tr>
<tr>
<td align="right"> Result </td>
<td><input type="text" name="result"/></td>
</tr>
<tr>

<td align="center" colspan="4"><input  type="Submit" name="submit" value="Submit"/><input type="reset" value="reset"/></td>
</tr>
</table>
</form>



<h4 align="center"><?php echo @$_GET["deleted"] ?></h4>
<h4 align="center"><?php echo @$_GET["updated"] ?></h4>
<form action="student.php" method="GET">
<div align="center">
<input type="text" name="dinput" placeholder="Search by Roll no or Name . . . " size="40"/>
<input type="submit" name="search" value="Search"/>

</div>

</form>
<?php
if(isset($_GET["search"])){
    $search=$_GET["dinput"];
	$que="select * from students where roll_no='$search' or st_name='$search'";
    
	$run=mysql_query($que);
	while($row=mysql_fetch_array($run)){
	$student_id=$row[0];
	$student_name=$row[1];
	$school_name=$row[2];
	$student_rollno=$row[3];
	$student_result=$row[4];

?>
<table border="1px" align="center" width="600px" bgcolor="orange">
<tr>
<td align="center"><?php echo $student_id ?></td>
<td align="center"><?php echo $student_name ?></td>
<td align="center"><?php echo $school_name ?></td>
<td align="center"><?php echo $student_rollno ?></td>
<td align="center"><?php echo $student_result ?></td>
</tr>
<tr>
<td align="center" colspan="5"><a href="student.php"> OK </a> </td>
</tr>
</table>
<?php
}
}
?>
<table style="margin-top:20px;"border="1px" align="center" width="700px">
<tr>
<th>Serial no</th>
<th>Student name</th>
<th>School name</th>
<th>Roll no</th>
<th>Result</th>
<th>Edit</th>
<th>Delete</th>
</tr>
					<?php
					 $query1="select * from students";
					 $rquery=mysql_query($query1)or die(mysql_error());
					if(mysql_num_rows($rquery)<=0){
								echo"<h5 align=\"center\">Record not found</h5><br/>";
												}
					else{
					while($row=mysql_fetch_array($rquery)){
								 $srno=$row[0];
								 $name=$row[1];
								 $sname=$row[2];
								 $roll=$row[3];
								 $res=$row[4];
					?>
									<tr align="center">
									<td> <?php echo $srno; ?> </td>
									<td> <?php echo $name; ?> </td>
									<td> <?php echo $sname; ?> </td>
									<td> <?php echo $roll; ?> </td>
									<td> <?php echo $res; ?> </td>
									
									<td><a href="update.php?edit=<?php echo $srno?>"> Edit </a></td>
									<td><a href="delete.php?del=<?php echo $srno ?>"> Delete </a></td>
									</tr>
					<?php } } ?>




</table>
</body>

</html>












<?php




									if(isset($_POST["submit"])){
										$stn=$_POST["stname"];
										$scn=$_POST["scname"];
										$roll=$_POST["rollno"];
										$rslt=$_POST["result"];
										
										$query="insert into students (st_name,sc_name,roll_no,result) VALUES ('$stn','$scn','$roll','$rslt')";
										if(mysql_query($query)){
										
										
										echo"<h4 align=\"center\" >Data inserted</h4><br/>";
										header('Refresh: 0');
										}
									 }

?>