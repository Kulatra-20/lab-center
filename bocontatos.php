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
    ?>
    <br>
    <div class="container">
        <table class="striped">
        
                    <thead>
                        <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Mensagem</th>
                        <th>Detalhe</th>
                        <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
                        <?php
                        include 'connString.php';
                        $sql="select * from tbcontato ORDER BY id_contato DESC";
                        $result=$con->query($sql);
                        if ($result->num_rows>0) {
                            while($row=$result->fetch_assoc()){
                                $id=$row['id_contato'];
                            ?>
                            <tr>
                                <td><?php echo $row['nome']?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['telefone'] ?></td>
                                <td><?php echo substr($row['msg'], 0, 30) ?></td>
                                <td><a style="cursor:pointer;color:#B71C1C;" data-target="vd<?php echo $id; ?>" class="material-icons modal-trigger">remove_red_eye</a></td>
                                <td><a style="cursor:pointer;color:#B71C1C;" class="material-icons" href='bocontatos.php?id_contato=<?php echo $row['id_contato']?>' onClick="return confirm('Eliminar mensagem?')">delete</a></td>
                            </tr>
                                <div id="vd<?php echo $id; ?>" class="modal">
                                    <div class="modal-content" data-id="<?php echo $row['id_contato']?>">
                                        <form method="post" enctype="multipart/form-data"/>
                                            Nome:
                                            <input disabled value="<?php echo $row['nome']?>" type="text"/>
                                            <br><br>
                                            Email:
                                            <input disabled value="<?php echo $row['email']?>" type="text"/>
                                            <br><br>
                                            Telefone:
                                            <input disabled value="<?php echo $row['telefone']?>" type="text" value="<?php echo $row['telefone']?>" />
                                            <br><br>
                                            Mensagem:
                                            <textarea disabled class="materialize-textarea"><?php echo $row['msg']?></textarea>
                                            <br><br>
                                        </form>
                                    </div>
                                </div>
                            <?php  
                                if (isset($_GET['id_contato']))
                                        {
                                            $id_contato=$_GET['id_contato'];
                                            $sql="DELETE FROM tbcontato WHERE id_contato=".$id_contato;
                                    
                                            $con->query($sql);
                                            $con->close();
                                            header('location:bocontatos.php');
                                        }
                            }
                        }
                        ?>
                        </form>
                    </tbody>
        
        </table>
    </div>                              
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $( document ).ready(function(){})
    $(".button-collapse").sideNav();

    $(document).ready(function(){
    $('.modal').modal();
  });
</script>
</body>
</html>