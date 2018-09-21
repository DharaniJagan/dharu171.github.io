<!DOCTYPE html>
<html>
<head>
	<title>php2</title>
</head>
<body>
<?php
  $con=mysqli_connect("localhost","root","");
  if ($con) {
  	  	print "1 row inserted";
  }
  else
  {
  	print "notconnected";
  }


  mysqli_select_db($con,"database1");
  $a="INSERT INTO data VALUES('$_POST[name]','$_POST[rollno]','$_POST[sem]','$_POST[m1]','$_POST[m2]','$_POST[m3]')";
  	mysqli_query($con,$a);

 

?>
</body>
</html>