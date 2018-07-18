<?php

include("connection.php");
//if(isset($_GET['id']))
	$id=$_GET['id'];
//echo($id);
$query="select * from student where  id='$id'";
//echo($query);
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>
	<br><f1>UPDATE</f1><br>
	<body>
		
			id:<input type="text" name="name" value="<?php echo $result['id'] ?>" id="id" disabled>

			name:<input type="text" name="name" value="<?php echo $result['name'] ?>" id="name" >

			roll:<input type="mobile" name="roll" value="<?php echo $result['roll'] ?>" id="roll" >

			<a href="update1.php?id=<?php echo $result['id']?> &name=<?php echo $result['name']?> &roll=<?php echo $result['roll']?>">update</a>

			<!-- <a href="update1.php?id=<?php echo $result['id'] ?>">update</a> -->

			 <button onclick= "updateData(<?php echo $result['id'] ?>)">update</button>
	</body>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		function updateData(id){
				//console.log(id);

				var name = $('#name').val();
				var roll=$("#roll").val();
				
				

				$.ajax({
					type:'POST',
					url:'update1.php',
					data:{'id':id,'name':name,'roll':roll},
					success:function(up){
						console.log(up);
						$("#display").html(up);
						//alert("hello");
						//console.log("hello");


					}
				});
}
	</script>
	
