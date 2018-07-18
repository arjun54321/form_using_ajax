<?php
include("connection.php");

// if(isset($_POST['name'])&&isset($_POST['roll']))

// if($roll!="" && $name!="" )
// {



$name=isset($_POST['name']) ? $_POST['name'] : '';
$roll=isset($_POST['roll']) ? $_POST['roll'] : '';

if(!empty($roll) && !empty($name) )
{
	$query="INSERT INTO `student`(`name`, `roll`) VALUES ('$name','$roll')";
	// echo($query);
	$data=mysqli_query($con,$query);
	if($data)
	{
		echo"data inserted";
	}
	else
	{
		echo"not inserted";
	}
}
else
{
	echo"fields are empty"."<br>";
}
?>

<!-- <?php

//$ajax=isset($_POST['ajax']) ? $_POST['ajax'] : 'show';

$query="SELECT * FROM STUDENT";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	?>
	<table> 
	
		<tr>
			<th>name</th>
			<th>roll</th>
			<th>id</th>
		</tr><br>
		<?php
		while($result=mysqli_fetch_assoc($data))
		{
			echo"<tr>
					<td>".$result['name']."</td>
					<td>".$result['roll']."</td>
					<td>".$result['id']."</td>
		  		  </tr>"."<br>";
		}
}
else
{
	echo "<br>"."table is empty";
}
	?>


 -->