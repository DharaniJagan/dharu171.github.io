<?php
 $con=mysqli_connect("localhost","root","");
  if ($con) {
  	  
  }
  else
  {
  	print "notconnected";
  }
mysqli_select_db($con,"database1");

$a="update data set Name='$_POST[name]',Semester='$_POST[sem]',Mark1='$_POST[m1]',Mark2='$_POST[m2]',Mark3='$_POST[m3]' where Rollno='$_POST[roll]';";
$res=mysqli_query($con,$a);
if ($res)
 {
	echo "<script> alert('updated'); </script>";
  header('Location: update.html');

}
else
{
	echo "<script> alert('not updated'); </script>";
	header('Location: update.html');
}
?>