<?php
        include 'connString.php';
		if ($con -> connect_error)
		{
			die("Connection failed: " . $con->connect_error);
		}

		$id=$_POST['id_tesp'];
		$texto = $_POST['texto'];

		$sql="UPDATE tbtesp SET texto='".$texto."'"." WHERE id_tesp=".$id;

		$con->query($sql);
		$con->close();

		header("location:botesp.php");

?>