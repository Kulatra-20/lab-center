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

    <br></br>
        <div class="container">
            <ul>
                <?php
                  include 'connString.php';
                  $sql="select * from tb_entidades";
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
                <!-- <center><li><h3><strong>Tens uma ideia de negócio ou uma empresa constituída com menos de 12 meses?</strong></h3></li></center>
                <center><h5><li>Então candidata-te à Incubadora de Empresas do LabCenter Torres Vedras.</li></h5></center>
                <center><h5><li>Conhece as Normas, Tabela de Preços e Serviços que temos disponíveis.</li></h5></center>  
                <br></br>
                  <center>
                        <a class="waves-effect waves-light btn modal-trigger" style="background-color: purple" href="#modal1">Ideia de negócio</a>
                          <!-- Modal Structure -->
                          <!-- <div id="modal1" class="modal">
                              <div class="modal-content">
                                <h3>Formulário</h3>
                            </div>
                          </div>
                          <a class="waves-effect waves-light btn modal-trigger" style="background-color: purple" href="#modal2">Start-up</a>
                          <!-- Modal Structure -->
                          <!-- <div id="modal2" class="modal">
                            <div class="modal-content">
                              <h3>Formulário</h3>
                          </div>
                        </div> -->
                  </center>
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
autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 2000);
}
</script>
<script>
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>
  </body>
</html>