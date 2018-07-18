<?php
include("connection.php");



     if(isset($_POST['id']))



     	$id=$_POST['id'];

	          //        $id=$_GET['id'];
		           
		            $name=$_POST['name']; 

		       		 $roll=$_POST['roll'];


		       	
		       			$query="UPDATE STUDENT SET name='$name' , roll='$roll' WHERE `id`='$id' ";
		       			


		       			echo($query);
		       			$data=mysqli_query($con,$query);
		       			if($data)
		       			{
		       				echo"data updated successfully";
		       			}
		       			else
		       			{
		       				echo"not updated";
		       			}
		       	
?>