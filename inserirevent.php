<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inserir Eventos  </title>
         <link rel="Shortcut Icon" type="image/x-icon" href="images/fundolb.png"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
	
    if (isset($_SESSION['logado']))
    {
      if ($_SESSION['logado']==true)
      {
        //$utilizador = $_SESSION['user'];
      }
     }
     else header("location:lgbolbcmtv.php");
       	

	if (isset($_POST['inserir']))
	{
    include 'connString.php';    
      $titulo = $_POST['titulo'];
      $texto = $_POST['descricao'];
      $data = $_POST['data'];
      $ficheiro = $_FILES ['img'] ['name'];
      $tmp_file = $_FILES ['img'] ['tmp_name'];
      $caminho = "images/eventos/";
      $tipodeimg = pathinfo($ficheiro,PATHINFO_EXTENSION);
        
    if(trim($_POST['descricao']) == '')
    {
      echo '<script>alert("Insira o seu texto");</script>';
    }
    else if($tipodeimg != "jpg" && $tipodeimg != "JPG" && $tipodeimg != "png" && $tipodeimg != "PNG" && $tipodeimg != "jpeg" && $tipodeimg != "JPEG" )
    {
        echo '<script>alert("Insira uma imagem com as extensões: jpg, jpeg e png");</script>';
    }
    else
    {
        move_uploaded_file($tmp_file,$caminho.$ficheiro);
        $sql = "INSERT INTO tbeventos (titulo, descricao,img,data) VALUES ('$titulo','$texto','$ficheiro','$data')";

        $con->query($sql);
        $con->close();

        header("location:boeventos.php");
    }
	}
?>
<br>
<div class="container" style="text-align: center; font-weight: bold;">
	<h4>Insira um evento</h4>
</div>
<br>
<br>
<div class="container" style="align center">
	<form action="inserirevent.php" method="post" enctype="multipart/form-data"/>
		Titulo:
		<input type="text" name="titulo" placeholder="Insira Um Titulo" <?php if (isset($_POST ['titulo'])) echo 'value= \' '.$_POST['titulo'].'\'';?> required/>
		<br><br>
		Descrição:
    <textarea class="ckeditor" name="descricao"  required> <?php if (isset($_POST ['descricao'])) echo 'value= \' '.$_POST['descricao'].'\'';?></textarea>
		<br><br>
		Data:
		<input type="date" name="data" placeholder="Ano - Mês - Dia"  required/>
		<br><br>
    Imagem:
    <input type="file" name="img" required/>
    <br><br>
		<div class="container" style="text-align: center;">
		<button class="waves-effect waves-red btn red darken -4" type="submit" name="inserir" value="inserir"> Inserir </button>
	</form>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $( document ).ready(function(){})
    $(".button-collapse").sideNav();
</script>
</body>
</html>