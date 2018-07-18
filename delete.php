<?php

include("connection.php");
if(isset($_POST['id']))
	$id=$_POST['id'];
//echo("hello");
$query="DELETE FROM student WHERE `id`='$id'";
//echo($query);
$data=mysqli_query($con,$query);
if($data)
{
	echo"<script>alert('your data is deleted')</script>";
	
	 //<meta http-equiv="refresh" content="0; url=http://localhost/ajax/insert1.php">
	
}
else
{
	echo"<br>"."not deleted";
}

?>