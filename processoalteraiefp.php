<?php
        include 'connString.php';
		if ($con -> connect_error)
		{
			die("Connection failed: " . $con->connect_error);
		}

		$id=$_POST['id_iefp'];
		$texto = $_POST['texto'];

		$sql="UPDATE tbiefp SET texto='".$texto."'"." WHERE id_iefp=".$id;

		$con->query($sql);
		$con->close();

		header("location:boiefp.php");

?>