<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inserção de imagens no slider</title>
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
	
    if (isset($_SESSION['logado']))
    {
      if ($_SESSION['logado']==true)
      {
        //$utilizador = $_SESSION['user'];
      }
     }
     else header("location:lgbolbcmtv.php");
       	
     include 'connString.php';
	if (isset($_POST['inserir']))
	{
        $ficheiro = $_FILES['imagem'] ['name'];
        $tmp_file = $_FILES ['imagem'] ['tmp_name'];
        $caminho = "images/slider/";
        
            $tipodeimg = pathinfo($ficheiro,PATHINFO_EXTENSION);
                if($tipodeimg != "jpg" && $tipodeimg != "JPG" && $tipodeimg != "png" && $tipodeimg != "PNG" && $tipodeimg != "jpeg" && $tipodeimg != "JPEG" )
                {
                    echo '<script>alert("Insira uma imagem com as extensões: jpg, jpeg e png");</script>';
                } 
                else
                {
                    move_uploaded_file($tmp_file,$caminho.$ficheiro);
                    $sql = "INSERT INTO tbslider (imagem,mostrar) VALUES ('$ficheiro','0')";
                    $con->query($sql);
                    header("location:boslider.php");
                }
    }
?>
<br>
<div class="container" style="text-align: center; font-weight: bold;">
	<h4>Insira uma foto no slider</h4>
</div>
<br>
<br>
<div class="container" style="align center">
	<form action="inserirfotoslider.php" method="post" enctype="multipart/form-data"/>
		<input type="file" name="imagem" required/>
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