<?php
        include 'connString.php';
		if ($con -> connect_error)
		{
			die("Connection failed: " . $con->connect_error);
		}

		$id=$_POST['id_entidade'];
		$texto = $_POST['texto'];

		$sql="UPDATE tb_entidades SET texto='".$texto."'"." WHERE id_entidade=".$id;

		$con->query($sql);
		$con->close();

		header("location:boentidades.php");

	?>