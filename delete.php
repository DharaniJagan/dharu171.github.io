<?php
	
 $con=mysql_connect("localhost","root","");
  if ($con) {
  	  
  }
  else
  {
  	print "notconnected";
  }
mysql_select_db("database1",$con);

$a="delete from data where Rollno='$_POST[roll]';";
$res=mysql_query($a,$con);
echo $res;
if ($res == TRUE)
 {
	echo "<script> alert('Deleted'); </script>";
	include 'delete.html';
	

}
else
{
	echo "<script> alert('not Deleted'); </script>";
	include 'delete.html';
}

?>