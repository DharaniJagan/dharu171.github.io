<?php
 $con=mysqli_connect("localhost","root","");
  if ($con) {
  	  
  }
  else
  {
  	print "notconnected";
  }
mysqli_select_db($con,"database1");

$a="select * from data where Rollno='$_POST[roll]';";
$res=mysqli_query($con,$a);
if (mysqli_num_rows($res)>0) 
{
	$row = mysqli_fetch_assoc($res);
	$name=$row['Name'];

	
	
	$semester=$row['Semester'];
	
	$m1=$row['Mark1'];
	$m2=$row['Mark2'];
	$m3=$row['Mark3'];

}
else
{
	echo "<script> alert('Information not found');</script>";
}	
		
?>


<!DOCTYPE html>
<html>

<head>
	<title>Update</title>
<style>

label{
	color: red;
	}
	#head
	{
		height: 50px;
		width: 100;
		top: 0;
		right: 0;
		left: 0;
		position: fixed;
		background-color: #000;
	}
	#form1
	{
		padding-top: 100px;
		padding-bottom: 100px;
	}
	
</style>	
</head>
<header id="head"><center><h2 style="color: white">Update</h2></center></header>
<body>
<center><form id="form1" action="update.php" method="post">
	<label>Enter Roll no :</label><input type="text" name="roll" value="<?php echo $_POST['roll']?>"><br><br>
	<label>Enter Name :</label><input type="text" name="name" value="<?php echo $name ?>"><br><br>
	<label>Enter Semester :</label><input type="text" name="sem" value="<?php echo $semester ?>"><br><br>
	<label>Enter Mark 1 :</label><input type="text" name="m1" value="<?php echo $m1 ?>"><br><br>
	<label>Enter Mark 2 :</label><input type="text" name="m2" value="<?php echo $m2 ?>"><br><br>			
	<label>Enter Mark 3 :</label><input type="text" name="m3" value="<?php echo $m3 ?>"><br><br>

	<input type="submit" name="">
</form></center>
</body>

</html>