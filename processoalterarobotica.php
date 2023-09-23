<?php
        include 'connString.php';
		if ($con -> connect_error)
		{
			die("Connection failed: " . $con->connect_error);
		}

		$id=$_POST['id_robotica'];
		$texto = $_POST['texto'];

		$sql="UPDATE tbrobotica SET texto='".$texto."'"." WHERE id_robotica=".$id;

		$con->query($sql);
		$con->close();

		header("location:borobotica.php");

?>