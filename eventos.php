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
    <h1 style="text-align:center;">Eventos</h1>
    <hr>
    <nav>
      <div class="nav-wrapper purple">
        <form method="post">
          <div class="input-field">
            <input name="search" type="search" placeholder="Pesquisar Eventos" required value="<?php if(isset($_POST['search'])){echo $_POST['search'];}?>">
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
    </nav>
    <?php
    include 'connString.php';
    if(isset($_GET['p'])){
      $p=$_GET['p'];
    }
    else {
      $p=1;
    }
    $qnt=3;
    $inicio=($p*$qnt)-$qnt;
    if (isset($_POST['search'])) {
      $sqlEventos="select * from tbeventos where titulo like '%".$_POST['search']."%' order by data desc";
    }
    else {
      $sqlEventos="select * from tbeventos order by data desc limit $inicio, $qnt";
    }
    $resultadoNoticias=$con->query($sqlEventos);
    if ($resultadoNoticias->num_rows>0) {
      while ($row = $resultadoNoticias->fetch_assoc()) {
        ?>
        <div class="row">
          <div class="col s12 m12 l4 xl4"><img style="margin-top:20px" class="responsive-img" src="images/eventos/<?php echo $row['img']?>"></div>
          <div class="col s12 m12 l6 xl6">
            <h4><?php echo $row['titulo'];?></h4>
            <p><?php echo substr($row['descricao'], 0, 250);?>...</p>
          </div>
          <div class="col s12 m12 l2 xl2">
            <p>Data:</p>
            <p><?php echo $row['data']?></p>
            <a class="waves-effect waves-light btn purple" href="detalhevent.php?id_evento=<?php echo $row['id_evento']?>">Ver mais</a>
          </div>
        </div>
        <?php
      }
    }
    else {
      echo "<h3>Não há eventos recentes!</h3>";
    }
    if (isset($_POST['search'])) {
      echo "<a class='waves-effect waves-light btn purple' href='eventos.php'>Mostrar Tudo</a>";
    }
    else{
      include 'connString.php';
      $sql_select_all="select * from tbeventos ";
      $resultadoQuery=$con->query($sql_select_all);
      $totalRegistos=$resultadoQuery->num_rows;
      $numPaginasNecessarias=ceil($totalRegistos/$qnt);
      $maxLinks=3;
      echo "<div class='col s12 m12 l12 xl12' style='text-align:center'><ul class='pagination'>";
      echo "<li class='waves-effect'><a href='eventos.php?p=1'><<</a></li>";
      for($i=$p-$maxLinks;$i<=$p-1;$i++){
        if ($i<=0) {
        }
        else {
          echo "<li class='waves-effect'><a href='eventos.php?p=".$i."'>$i</a></li>";
        }
      }
      echo "<li class='active purple'><a href='eventos.php?p=$p'>$p</a></li>";
      for($i=$p+1;$i<=$p+$maxLinks; $i++){
        if ($i>$numPaginasNecessarias) {
        }
        else {
          echo "<li class='waves-effect'><a href='eventos.php?p=".$i."'>$i</a></li>";
        }
      }
      echo "<li class='waves-effect'><a href='eventos.php?p=$numPaginasNecessarias'>>></a></li>";
    }
    ?>
    <ul>
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
      $('.carousel').carousel();
    });
$('.carousel.carousel-slider').carousel({fullWidth: false ,indicators: true,});
</script>
</body>
</html>   