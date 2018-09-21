<?php

if($_POST["user"]=="admin" && $_POST["password"]=="admin")
	 include 'options.html';
elseif ($_POST["user"]=="student" && $_POST["password"]=="student") 
{
	include 'view.html';
}
else
{
	echo "<script>
					alert('username or password is wrong');
					
			  </script>";	
			  include 'admin.html';
}
	
?>