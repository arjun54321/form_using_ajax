<!doctype html>
<html>
<head>
	<title>hello</title>
</head>
<body>

	<!-- <form method="POST" action=""> -->
		<f1>INSERT</f1><br>
		name:<input type="text" name="name" id="name">
		roll:<input type="number" name="roll" id="roll">
		<button id="submit" >submit</button>
	<!-- </form> -->
	<div id="display"></div>
	<!-- <button type="button" name="submit" id="submit">submit</button> -->
	

	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript">
	
		$(document).ready(function(){
			$('#submit').click(function(){
				//alert("hello");
				//console.log("hello");
				var name=$("#name").val();
				var roll=$("#roll").val();
				if(name.length==0 && roll.length==0){
					$("#display").html("please fill the form");
					return false;
				}

				$.ajax({
					type:'POST',
					url:'insert.php' ,
					data:{name:name,roll:roll},
					success:function(insert){
						$("#display").html(insert);
						$('#name').val("");
						$('#roll').val("");


					}
				});

			});
		});
	</script>
	<script type="text/javascript">
	
		$(document).ready(function(){
			$('#submit').click(function(){
				//
				//console.log("hello");
				var name=$("#name").val();
				var roll=$("#roll").val();

				

				$.ajax({
					type:'POST',
					//url:'display.php ? ajax=show',
					url:'display.php',
					success:function(display){
						$("#display").html(display);
						//alert("hello");


					}
				});

			});
		});
	</script>


	</body>
	
</html>
