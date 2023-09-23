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
        <div class="container" style="margin-top:7%;" >
                <div class="row">
                    <div class="container">
                        <center>
                            <h4>Parceiros Fundadores:</h4>
                        </center>
                    </div>
                    <center>
                        <?php
                            include "connString.php";
                            $sql = "SELECT * FROM tbempresa order by id_empresa asc";
                            $result=$con->query($sql);
                                if ($result->num_rows>0)
                                {
                                    while ($row=$result->fetch_assoc())
                                    {
                        ?>
                            <a style="padding-left: 5em" href="<?php echo $row['link']?>" target="_blank" ><img style="width:25%"  src="images/parceiros/fundadores/<?php echo $row['img']?>"></a>
                            <?php
                                    }
                                }
                            ?>
                    </center>
                    <div class="container">
                        <center>
                            <h4>Parceiros:</h4>
                        </center>
                    </div>
                        <center>
                            <?php
                                include "connString.php";
                                $sql = "SELECT * FROM tbparceiros order by id_parceiro asc";
                                $result=$con->query($sql);
                                    if ($result->num_rows>0)
                                    {
                                        while ($row=$result->fetch_assoc())
                                        {
                            ?>
                            <a style="padding-left: 5em" href="<?php echo $row['link']?>" target="_blank" ><img style="width:25%"  src="images/parceiros/parceiros/<?php echo $row['img']?>"></a>
                            <?php
                                        }
                                    }
                            ?>
                        </center>
                    <div class="container">
                        <center>
                            <h4>Incubação:</h4>
                        </center>
                    </div>
                    <center>
                        <?php
                            include "connString.php";
                            $sql = "SELECT * FROM tbincubacao order by id_incubacao asc";
                            $result=$con->query($sql);
                                if ($result->num_rows>0)
                                {
                                    while ($row=$result->fetch_assoc())
                                    {
                        ?>
                            <a style="padding-left: 5em" href="<?php echo $row['link']?>" target="_blank" ><img style="width:25%"  src="images/parceiros/incubacao/<?php echo $row['img']?>"></a>
                        <?php
                                    }
                                }
                        ?>
                    </center>
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