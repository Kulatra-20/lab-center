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
                                $sql="select * from tbempresa";
                                $result=$con->query($sql);
                                if ($result->num_rows>0) {
                                while($row=$result->fetch_assoc()){   
                            ?>
                            <tr>
                                        <td><img style='height:200px' src="images/parceiros/fundadores/<?php echo $row['img']?>"></td>
                                        <td><?php echo $row['link'] ?></td>
                                        <td><a class="material-icons" href='boempresas.php?id_empresa=<?php echo $row['id_empresa']?>' onClick="return confirm('Eliminar empresa?')">delete</a></td>
                                        <td><a class="material-icons" href='alterarempresa.php?id_empresa=<?php echo $row['id_empresa']?>'> update</a></td>
                                    </tr>
                                    <?php
                                        if (isset($_GET['id_empresa']))
                                        {
                                            if($_GET['id_empresa'] == $row['id_empresa'])
                                            {
                                                unlink('images/parceiros/fundadores/'.$row['img']);
                                            }

                                            $id_empresa=$_GET['id_empresa'];
                                            $sql="DELETE FROM tbempresa WHERE id_empresa=".$id_empresa;
                                    
                                            $con->query($sql);
                                            $con->close();
                                            header('location:boempresas.php');
                                        }
                                    }
                                }
                                ?>
                                <tr>
                                    <td><a class="waves-effect btn red darken -4" href="inserirempresa.php" type="submit"> Inserir </a></td>
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