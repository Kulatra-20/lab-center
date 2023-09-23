<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
        include 'connString.php';
		
		if ($con -> connect_error)
		{
			die("Connection failed: " . $con->connect_error);
		}
	$sql="SELECT * FROM tbslider";
	$resultadoSlider=$con->query($sql);
	if ($resultadoSlider->num_rows>0) {
	while($row=$resultadoSlider->fetch_assoc()){
			if(isset($_POST['a'.$row['id_slide']])){
				if ($row['mostrar'] == 0){
					$sql = "update tbslider set mostrar=1 where id_slide=".$row['id_slide'];
				}
				else{
					$sql = "update tbslider set mostrar=0 where id_slide=".$row['id_slide'];
				}
				$con->query($sql);
				header('location:boslider.php');
			}
		}
	}
?>
</body>
</html>