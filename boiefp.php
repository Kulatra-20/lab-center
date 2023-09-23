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
           
                    include 'connString.php';
                        
                    ?>
            <div class="container">        
                <table class="stripped">
                            <thead>
                                <tr>
                                    <th>Informação</th>
                                    <th>Alterar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">               
                            <?php
                                $sql="select * from tbiefp";
                                $result=$con->query($sql);
                                if ($result->num_rows>0) {
                                while($row=$result->fetch_assoc()){   
                            ?>
                            <tr>
                                        <td><?php echo $row['texto'] ?></td>
                                            <td><a class="material-icons" href='alterariefp.php?id_iefp=<?php echo $row['id_iefp']?>'> update</a></td>
                                    </tr>
                                    <?php
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
</script>
</body>