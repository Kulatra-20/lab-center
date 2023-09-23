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
    <div class="container" >
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
    <table class="stripped">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Eliminar</th>
                        <th>Alterar</th>
                    </tr>
                </thead>
                <tbody>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">               
                 <?php
                     $sql="select * from tbnoticias";
                     $result=$con->query($sql);
                     if ($result->num_rows>0) {
                       while($row=$result->fetch_assoc()){   
                 ?>
                <tr>      
                            <td><img style='height:100px' src="images/noticias/<?php echo $row['img']?>"></td>
                            <td><?php echo $row['titulo'] ?></td>
                            <td><?php echo $row['data'] ?></td>
                            <td><center><a class="material-icons" href='bonoticias.php?id_noticia=<?php echo $row['id_noticia']?>' onClick="return confirm('Eliminar noticia?')">delete</a></center></td>
                            <td><a class="material-icons" href='alterarnoticia.php?id_noticia=<?php echo $row['id_noticia']?>'> update</a></td>
                          </tr>
                          <?php
                              if (isset($_GET['id_noticia']))
                              {

                                if($_GET['id_noticia'] == $row['id_noticia'])
                                {
                                  unlink('images/noticias/'.$row['img']);
                                }

                                $id_noticia=$_GET['id_noticia'];
                                $sql="DELETE FROM tbnoticias WHERE id_noticia=".$id_noticia;
                            
                                $con->query($sql);
                                $con->close();
                                header('location:bonoticias.php');
                              }
                        }
                      }
                      ?>
                      <tr>
                        <td><a class="waves-effect btn red darken -4" href="inserirnoticia.php" type="submit"> Inserir </a></td>
                      </tr>
                    </form>
                  </tbody>     
    </div>                    
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $( document ).ready(function(){})
    $(".button-collapse").sideNav();
</script>
</body>
</html>