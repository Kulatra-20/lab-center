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

</head>
<body>
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <?php
      include 'funcooes.php';
      navBar();
    ?>
    <div class="parallax-container">
      <div class="carousel carousel-slider" style="">
      <?php
        include "connString.php";
        $sql = "SELECT * FROM tbslider order by id_slide asc";
        $result=$con->query($sql);
        if ($result->num_rows>0)
        {
            while ($row=$result->fetch_assoc())
            {
              if($row['mostrar']==0){
      ?>
        <a href="quemsomos.php" class="carousel-item"><img class="responsive-img" src="images/slider/<?php echo $row['imagem']?>"></a>
      <?php
              }
            }
        }
      ?>
      </div>
      </div>
  <div class="container">
      <!--   Icon Section   -->
      <div class="row">
          <?php
            include 'connString.php';
            $sql="select * from tbnoticias order by id_noticia desc";
            $resultado=$con->query($sql);
            if ($resultado->num_rows>0) {
              $vezes=0;
          ?>
            <br>
            <h4 style="text-align:center">Notícias:</h4>
            <br>
            <div class="col s12 m8 l8">
            
          <?php
              while ($row = $resultado->fetch_assoc()) {
                if ($vezes<3) {
                  $vezes++;
          ?>
              <div class="divider" style="border:1px solid black"></div>
                <div class="row">
                  <div class="col m4 l4">
                  <br>
                    <a href="detalhe?id_noticia=<?php echo $row['id_noticia']?>"><img class="responsive-img"  src="images/noticias/<?php echo $row['img']?>"/></a>
                  </div>
                  <div class="col m8 l8">
                  <br>
                    <h6><strong><?php echo $row['titulo']?></strong></h6>
                    <h6><?php echo $row['data']?></h6>
                    <p><font size="3"><?php echo substr($row['descricao'], 0, 250);?>...</font></p>
                  </div>
                </div>
          <?php
                  }
                }
              }  
          ?>
          <ul>
  <center>
    <a class="waves-effect waves-light btn" style="background-color: purple" href="noticias.php">Mais notícias</a>
    <a class="waves-effect waves-light btn modal-trigger" style="background-color: purple" href="#modal1">Eventos</a>
    </center>
  </ul>
            </div>
  <div class="col s12 m4 l4">
  <center><div class="fb-page" data-href="https://www.facebook.com/TorresVedrasLabCenter" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TorresVedrasLabCenter" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TorresVedrasLabCenter">Torres Vedras LabCenter</a></blockquote></div></center>
  </div>
  </div>
  </div>
  
  <br>

        <div id="modal1" class="modal modal-fixed-footer">
                <div class="modal-content">
                <?php
                  include "connString.php";
                  $sql = "SELECT * FROM tbeventos where MONTH( data ) = MONTH(CURRENT_DATE()) AND YEAR( data) = YEAR(CURRENT_DATE())";
                  $result=$con->query($sql);
                  if ($result->num_rows>0)
                  {
                      while ($row=$result->fetch_assoc())
                      {
              ?>
                        <ul class="collection">
                        <li class="collection-item avatar">
                        <img style="width: 50px;height: 50px;" src="images/eventos/<?php echo $row['img']?>" alt="" class="circle">
                            <span class="title"><?php echo $row['titulo'] ?></span>
                            <h6>Data:</h6>
                            <p><?php echo $row['data'] ?></p>
                        </li>
                        </ul>
              <?php
                      }
                  }
                  else echo "<h5>Não existem eventos agendados para o mês corrente!</h5>";
          ?>
                </div>
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
    $('.parallax').parallax();
  });

$(document).ready(function(){
      $('.carousel').carousel();
    });
$('.carousel.carousel-slider').carousel({
  fullWidth: true,
  indicators: true
  });
autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 5000);
}
$(document).ready(function(){
    $('.modal').modal();
  });
</script>
  </body>
</html>