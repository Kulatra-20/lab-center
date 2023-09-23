<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alterar Eventos  </title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="Shortcut Icon" type="image/x-icon" href="images/fundolb.png"/>
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
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

		//include('index.php')

		 if (isset($_GET['id_evento']))
		{
			$id=$_GET['id_evento'];

			$sql="SELECT * FROM tbeventos WHERE id_evento=".$id;
			$result = $con->query($sql);

				if ($result->num_rows > 0)
				{
					while ($row = $result -> fetch_assoc())
					{
	?>
    <div class="container" style="align center">
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_evento" value="<?php echo $row['id_evento']?>"/>
            <br><br>
            Titulo:
            <textarea name="titulo" class="materialize-textarea" required><?php echo $row['titulo']?></textarea>
            <br><br>
            Descrição:
            <textarea class="ckeditor" name="descricao" required><?php echo $row['descricao']?></textarea>
            <br><br>
            <input type="date" name="data" placeholder="Ano - Mês - Dia" value="<?php echo $row['data']?>"/>               
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
		if(isset($_POST['alterar'])){

            $id=$_POST['id_evento'];
            $titulo = $_POST['titulo'];
            $texto = $_POST['descricao'];
            $data = $_POST['data'];
            $ficheiro = $_FILES ['img']['name'];
            $tmp_file = $_FILES ['img']['tmp_name'];
            $caminho = "images/eventos/";
            $tipodeimg = pathinfo($ficheiro,PATHINFO_EXTENSION);

            if($ficheiro == null )
            {       
                $sql="UPDATE tbeventos SET titulo='".$titulo."',descricao='".$texto."',data='".$data."' WHERE id_evento=".$id;
                $con->query($sql);
                header("location:boeventos.php");
            }
            else if ($tipodeimg != "jpg" && $tipodeimg != "JPG" && $tipodeimg != "png" && $tipodeimg != "PNG" && $tipodeimg != "jpeg" && $tipodeimg != "JPEG" )
            {
                echo '<script>alert("Insira uma imagem com as extensões: jpg, jpeg e png");</script>';
            }
            else
            {
                move_uploaded_file($tmp_file,$caminho.$ficheiro);
                $sql="UPDATE tbeventos SET titulo='".$titulo."',descricao='".$texto."', data='".$data."', img='".$ficheiro."' WHERE id_evento=".$id;
                $con->query($sql);
                header("location:boeventos.php");
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