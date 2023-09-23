<?php
 session_start();
 ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BackOffice-LabCenter</title>
      <link rel="Shortcut Icon" type="image/x-icon" href="images/fundolb.png"/>
</head>
<body>
<?php
      include 'funcooes.php';
      navBarBack();
    ?>
    <br><br>
    <div class="container" style="text-align: center;">
    <?php
        if (isset($_SESSION['logado']))
        {
        if ($_SESSION['logado']==true)
        {
            //$utilizador = $_SESSION['user'];
        }
        }
        else header("location:lgbolbcmtv.php");
        if (isset($_POST['terminar']))
                {
                unset($_SESSION['user']);
                unset($_SESSION['logado']);
                session_destroy();
                header("location:lgbolbcmtv.php");
                }
                    include 'connString.php';
                    
    ?>
        <table class="striped">
                        <thead>
                          <tr>
                            <th>Foto</th>
                            <th>Mostrar</th>
                            <th>Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <form method="post" action="MEslider.php" enctype="multipart/form-data">
                            <?php
                            include 'connString.php';
                            $sql="select * from tbslider";
                            $resultadoSlider=$con->query($sql);
                            if ($resultadoSlider->num_rows>0) {
                              while($row=$resultadoSlider->fetch_assoc()){
                                ?>
                                <tr>
                                  <td><img style="height:200PX"class="responsive-img" src="images/slider/<?php echo $row['imagem']?>"></td>
                                  <td><input type="submit" value="<?php if($row['mostrar'] == 0){echo 'SIM';} else{echo 'NÃO';}?>" name="a<?php echo $row['id_slide']?>" required></td>
                                  <td><a class="material-icons" href='boslider.php?id_slide=<?php echo $row['id_slide']?>' onClick="return confirm('Eliminar foto?')">delete</a></td></td>
                                </tr>
                                <?php
                                 if (isset($_GET['id_slide']))
                                 {
                                   $id_slide=$_GET['id_slide'];
                                   
                                   if($_GET['id_slide'] == $row['id_slide'])
                                     {
                                         unlink('images/slider/'.$row['imagem']);
                                   }
                                   
                                   $sql="DELETE FROM tbslider WHERE id_slide=".$id_slide;
                               
                                   $con->query($sql);
                                   $con->close();
                                   header('location:boslider.php');
                                 } 
                              }
                            }
                            ?>
                            <tr>
                              <td><a class="waves-effect btn red darken -4" href="inserirfotoslider.php" type="submit"> Inserir </a></td>
                            </tr>
                          </form>
                        </tbody>
        </table>     
    </div>                    
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $( document ).ready(function(){})
    $(".button-collapse").sideNav();
</script>
</body>
</html>