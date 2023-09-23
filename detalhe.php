<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Lab Center</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <style>
  
  </style>
</head>
<body>
    <?php
        include 'funcooes.php';
        navBar();
        if (isset($_GET['id_noticia'])) {
    ?>
        <div class="container">
        <?php
            include 'connString.php';
            $id=$_GET['id_noticia'];
            $sqlNoticias="select * from tbnoticias where id_noticia=".$id;
            $resultadoNoticias=$con->query($sqlNoticias);
            if ($resultadoNoticias->num_rows>0) {
            while ($row = $resultadoNoticias->fetch_assoc()) {
        ?>
                <div class="container">
                <br>
                <a class="waves-effect waves-light btn purple" href="noticias.php">Voltar</a>
                <div class="row">
                    <h4><?php echo $row['titulo']?></h4>
                    <p><?php echo $row['data']?></p>
                    <p style="text-align:center"><img class="responsive-img" src="images/noticias/<?php echo $row['img']?>"></p>
                </div>
                <div class="row">
                    <?php echo $row['descricao']?>
                </div>
                </div>
                <?php
                }
                }
                else {
                echo "<br><br><h1 class='container' style='text-align:center'>Notícia não encontrada!";
                }
            }
            else {
                header('location:noticias.php');
            }
        ?>
        </div>
        <?php
          footer();
        ?>            
  <!--  Scripts-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>
  <script>
  $( document ).ready(function(){})
    $(".button-collapse").sideNav();
</script>
<script>
$(document).ready(function(){
      $('.carousel').carousel();
    });
$('.carousel.carousel-slider').carousel({fullWidth: false ,indicators: true,});
</script>
</body>
</html>