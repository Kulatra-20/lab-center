<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inserir incubaÁ„o</title>
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
       	

	if (isset($_POST['inserir']))
	{
       $link = $_POST['link'];
       $ficheiro = $_FILES ['img'] ['name'];
       $tmp_file = $_FILES ['img'] ['tmp_name'];
       $caminho = "images/parceiros/incubacao/";

       $tipodeimg = pathinfo($ficheiro,PATHINFO_EXTENSION);
       if($tipodeimg != "jpg" && $tipodeimg != "JPG" && $tipodeimg != "png" && $tipodeimg != "PNG" && $tipodeimg != "jpeg" && $tipodeimg != "JPEG" )
       {
           echo '<script>alert("Insira uma imagem com as extens√µes: jpg, jpeg e png");</script>';
       }
       else
       {
            move_uploaded_file($tmp_file,$caminho.$ficheiro);
            include 'connString.php';
            $sql = "INSERT INTO tbincubacao (link,img) VALUES ('$link','$ficheiro')";
            $con->query($sql);
            header("location:boincubacao.php"); 
       }
    }

        
	
?>
<br>
<div class="container" style="text-align: center; font-weight: bold;">
	<h4>Insira incubacao</h4>
</div>
<br>
<br>
<div class="container" style="align center">
	<form action="inseririncubacao.php" method="post" enctype="multipart/form-data"/>
		Link do website da incuba√ß√£o:
		<input type="text" name="link" required/>
		<br><br>
        Imagem:
        <input type="file" name="img" required/>
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