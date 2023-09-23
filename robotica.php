<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link rel="Shortcut Icon" type="image/x-icon" href="images/fundolb.png"/>
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
        ?>
        <div class="container">
            <ul>
            <center>
                <img class="responsive-img" style="width:30%" src="images/eventos/robotica_w847.jpg">
            </center>
            <?php
                include 'connString.php';
                $sql="select * from tbrobotica";
                $resultadoNoticias=$con->query($sql);
                if ($resultadoNoticias->num_rows>0) 
                {
                    while ($row = $resultadoNoticias->fetch_assoc()) 
                    {
            ?>
                    <?php echo $row['texto']?>
                <?php
                    }
                }
                ?>
            </ul>
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