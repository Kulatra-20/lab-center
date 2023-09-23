<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inserir informação Cursos TeSP</title>
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
     else header("location:boslider.php");
       	

	if (isset($_POST['inserir']))
	{
      if(trim($_POST['descricao']) == '')
      {
        echo '<script>alert("Insira o seu texto");</script>';
      }
      else
      {
            include 'connString.php';
            $texto = $_POST['descricao'];
      
          $sql = "INSERT INTO tbtesp (texto) VALUES ('$texto')";

          $con->query($sql);
          $con->close();
          
          header("location:botesp.php");
      }
	}
?>
<br>
<br>
<div class="container" style="align center">
	<form action="inserirtesp.php" method="post" enctype="multipart/form-data"/>
		DescriÃ§Ã£o:
            <textarea class="ckeditor" name="descricao" required></textarea>
		<br><br>
		<div class="container" style="text-align: center;">
		    <button class="waves-effect waves-red btn red darken -4" type="submit" name="inserir" value="inserir"> Inserir </button>
        </div>
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