<?php
        include 'connString.php';
		if ($con -> connect_error)
		{
			die("Connection failed: " . $con->connect_error);
		}

		$id=$_POST['id_sn'];
		$texto = $_POST['texto'];

		$sql="UPDATE tbsomosnos SET texto='".$texto."'"." WHERE id_sn=".$id;

		$con->query($sql);
		
		

		header("location:bosobrenos.php");

		
		
?>
