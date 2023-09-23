<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alterar Parceiro</title>
         <link rel="Shortcut Icon" type="image/x-icon" href="images/fundolb.png"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

</head>
<body>

    <?php
      include 'funcooes.php';
      navBarBack();
    ?>

<?php

    include 'connString.php';

		if ($con -> connect_error)
		{
			die("Connection falhada: " . $con->connect_error);
		}

		 if (isset($_GET['id_parceiro']))
		{
			$id_parceiro=$_GET['id_parceiro'];

			$sql="SELECT * FROM tbparceiros WHERE id_parceiro=".$id_parceiro;
			$result = $con->query($sql);

				if ($result->num_rows > 0)
				{
					while ($row = $result -> fetch_assoc())
					{
	?>
    <div class="container" style="align center">
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_parceiro" value="<?php echo $row['id_parceiro']?>"/>
            <br></br>
            Titulo:
            <input type="text" name="link" value="<?php echo $row['link']?>"/>
            <br></br>
            Imagem:
            <input type="file" name="img"/>
            <br></br>
            <button class="waves-effect waves-red btn red darken -4" type="submit" name="alterar" value="inserir"> Alterar </button>
        </form>
    </div>
	<?php
	}}}
		else
		{
			echo ("não existem dados a apresentar.");
		}
        if(isset($_POST['alterar']))
        {

            $id=$_POST['id_parceiro'];
            $link = $_POST['link'];
            $ficheiro = $_FILES ['img']['name'];
            $tmp_file = $_FILES ['img']['tmp_name'];
            $caminho = "images/parceiros/parceiros/";
            $tipodeimg = pathinfo($ficheiro,PATHINFO_EXTENSION);

            if($ficheiro == null )
            {       
                $sql="UPDATE tbparceiros SET link='".$link."'"." WHERE id_parceiro=".$id;
                $con->query($sql);
                header("location:boparceiros.php");
            }
            else if ($tipodeimg != "jpg" && $tipodeimg != "JPG" && $tipodeimg != "png" && $tipodeimg != "PNG" && $tipodeimg != "jpeg" && $tipodeimg != "JPEG" )
            {
                echo '<script>alert("Insira uma imagem com as extensões: jpg, jpeg e png");</script>';
            }
            else
            {
                move_uploaded_file($tmp_file,$caminho.$ficheiro);
                $sql="UPDATE tbparceiros SET link='".$link."',img='".$ficheiro."' WHERE id_parceiro=".$id;
                $con->query($sql);
                header("location:boparceiros.php");
            }

                

        }

	?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $( document ).ready(function(){})
    $(".button-collapse").sideNav();
</script>
</body>
</html>