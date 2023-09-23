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
    <br></br>
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
            <div class="container">        
                <table class="stripped">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Link</th>
                                    <th>Eliminar</th>
                                    <th>Alterar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">               
                            <?php
                                $sql="select * from tbincubacao";
                                $result=$con->query($sql);
                                if ($result->num_rows>0) {
                                while($row=$result->fetch_assoc()){   
                            ?>
                            <tr>
                                        <td><img style='height:200px' src="images/parceiros/incubacao/<?php echo $row['img']?>"></td>
                                        <td><?php echo $row['link'] ?></td>
                                        <td><a class="material-icons" href='boincubacao?id_incubacao=<?php echo $row['id_incubacao']?>' onClick="return confirm('Eliminar incubação?')">delete</a></td>
                                            <td><a class="material-icons" href='alterarincubacao.php?id_incubacao=<?php echo $row['id_incubacao']?>'> update</a></td>
                                    </tr>
                                    <?php

                                        if (isset($_GET['id_incubacao']))
                                        {
                                            if($_GET['id_incubacao'] == $row['id_incubacao'])
                                            {
                                                unlink('images/parceiros/incubacao/'.$row['img']);
                                            }

                                            $id_incubacao=$_GET['id_incubacao'];
                                            $sql="DELETE FROM tbincubacao WHERE id_incubacao=".$id_incubacao;
                                    
                                            $con->query($sql);
                                            $con->close();
                                            
                                            header('location:boincubacao.php');
                                        }
                                    }
                                }
                                ?>
                                <tr>
                                    <td><a class="waves-effect btn red darken -4" href="inseririncubacao.php" type="submit"> Inserir </a></td>
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