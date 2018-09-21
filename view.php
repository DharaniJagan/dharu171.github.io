<?php
 $con=mysqli_connect("localhost","root","");
  if ($con) {
  	  
  }
  else
  {
  	print "notconnected";
  }
mysqli_select_db($con,"database1");
$a="select * from data where Rollno='".$_POST["roll"]."'";
$res=mysqli_query($con,$a);
if (mysqli_num_rows($res)>0) 
{
	$row = mysqli_fetch_assoc($res);
	$name=$row['Name'];

	$roll=$row['Rollno'];
	
	$semester=$row['Semester'];
	
	$m1=$row['Mark1'];
	$m2=$row['Mark2'];
	$m3=$row['Mark3'];
		
		echo "<center><table border=1 style='border-collapse: collapse;' >
					<tr>
						<th>Name</th>
						<th>Rollno</th>
						<th>Semester</th>
						<th>Mark1</th>
						<th>Mark2</th>
						<th>Mark3</th>
					</tr>
					<tr>
						<td>$name</td>
						<td>$roll</td>	
						<td>$semester</td>
						<td>$m1</td>
						<td>$m2</td>
						<td>$m3</td>
					</tr>
				</table></center>";
}
else
{
	echo "Information not found";
}

?>