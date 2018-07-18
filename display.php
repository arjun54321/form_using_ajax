<?php
include("connection.php");

//if(isset($_POST['ajax'])&&$_POST['ajax']=='show')

//$ajax=isset($_POST['ajax']) ? $_POST['ajax'] : 'show';

$query="SELECT * FROM STUDENT";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	?>

	<table> 
		<tr><td><f1>DISPLAY</f1></td></tr><br>
		<tr>
			<th>name</th>
			<th>roll</th>
			<th>id</th>
			<th colspan="2">operations</th>
		</tr><br>
		<?php
		while($result=mysqli_fetch_assoc($data))
		{
			echo"<tr>
					<td>".$result['name']."</td>
					<td>".$result['roll']."</td>
					<td class='resultId'>".$result['id']."</td>
					  <td><a href='update.php?id=$result[id]'>edit</a></td>
		  		    <td><button onclick= 'deleteData(".$result['id'].")'>delete</button></td>


		  		  </tr>"."<br>";
		}
}
else
{
	echo "<br>"."table is empty";  
}

?>
</table>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript">
	function deleteData(id){
		//console.log(id);
				$.ajax({
					type:'POST',
					url:'delete.php',
					data:{'id':id},
					success:function(dell){
						$("#display").html(dell);
						//alert("hello");
						//console.log("hello");


					}
				});

		}

</script>
<!-- <script type="text/javascript">
function updateData(id){
				console.log(id);
				//var name=$("#name").val();
				//var roll=$("#roll").val();

				

				$.ajax({
					type:'POST',
					url:'update.php',
					data:{'id':id},
					success:function(up){
						$("#display").html(up);
						//alert("hello");
						//console.log("hello");


					}
				});
}

</script> -->