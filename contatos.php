<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
   <link rel="Shortcut Icon" type="image/x-icon" href="images/fundolb.png"/>
  <title>Lab Center</title>
<style>

#textarea1:focus {
    border-bottom: 1px solid #9c27b0;
    box-shadow: 0 1px 0 0 #9c27b0;
  }
  
  #textarea1:focus + label {
    color: #9c27b0;
  }
</style>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
  <style>
    
  </style>
</head>
<body >
    <?php 
     include 'funcooes.php';
     navBar();
    ?>
        <div class="container row">
                <center>
                    <h3>Torres Vedras LabCenter</h3>
                    <h4><strong>O Conhecimento aliado ao Empreendedorismo.</strong></h4>
                    <h5>Edificado situado em pleno Centro Histórico de Torres Vedras.</h5>
                </center>
            
                            
            <div class=" col s12 m6" style="margin-top:20px" >
                <h4>Formulário de contacto</h4>
                    <form method="post" id="form_cont" autocomplete="off" enctype="multipart/form-data" class="col s12">
                    <div class="col s12" style="border: 1px solid purple">
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="nome" id="textarea1" id="nome" type="text" autocomplete="off" <?php if (isset($_POST['nome'])) echo 'value= \' '.$_POST['nome'].'\''; ?> required/>
                                <label >Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12" >
                                <input name="email" id="textarea1" type="email" autocomplete="off" <?php if (isset($_POST['email'])) echo 'value= \' '.$_POST['email'].'\''; ?> required/>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="telefone" id="textarea1" type="tel" maxlength="9" autocomplete="off" <?php if (isset($_POST['telefone'])) echo 'value= \' '.$_POST['telefone'].'\''; ?>required>
                                <label >Telefone</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="mensagem" id="textarea1" class="materialize-textarea" autocomplete="off" required><?php if (isset($_POST['mensagem'])) echo $_POST['mensagem']; ?></textarea>
                                <label>Mensagem</label>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Lfrt1oUAAAAAO0VKJ3hGkCGjY8BrMd2sEEv_Gib"></div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button id="submitBtn" disabled class="btn waves-effect waves-light" style="background-color: purple" type="submit" name="enviar">Enviar
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>  
            </div>
            <div class=" col s12 m6" style="margin-top:20px">
                <ul>
                <h5><b>Acesso 1:</b></h5>
                    <li><a class="black-text" href="https://goo.gl/maps/ZNKbHmsV4Nw" target="_blank" class="white-text">Rua José Eduardo César Nº 6  2560-232 Torres Vedras</a><li>
                        </p>
                    <li><a class="black-text" href="https://goo.gl/maps/ZNKbHmsV4Nw" target="_blank"><i class="material-icons black-text text-lighten-3">&#xE0C8;</i> 39°05'30.4"N 9°15'35.3"W.</a></li>
                </p>
                <h5><b>Acesso 2 (também para correspondência):</b></h5>
                        </p>
                    <li><a class="black-text" href="https://goo.gl/maps/Tstfz8nsFCG2" target="_blank" class="white-text">Rua Serpa Pinto Nº 3A 2560-363 Torres Vedras</a><li>
                        </p>
                    <li><a class="black-text" target="_blank"><i class="material-icons black-text text-lighten-3">&#xE916;</i> Horário: todos os dias úteis das 9h00 às 18h00.</a></li>
                        </p>
                    <a class=" purple btn-floating btn-large social facebook"  target="_blank" href="https://www.facebook.com/TorresVedrasLabCenter/"><i class="fa fa-facebook-square"></i></a>
                    <a class=" purple btn-floating btn-large social instagram"  target="_blank" href="https://www.instagram.com/torresvedrascm/?hl=pt"><i class="fa fa-instagram"></i></a>
                </ul>
            </div>
        </div>
            
            <?php
                                include 'connString.php';
                                if (isset($_POST['enviar']))
                                    {
                                       // $nome = $_POST['nome'];
                                        //$email = $_POST['email'];
                                        $telefone = $_POST['telefone'];
                                        //$msg = $_POST['mensagem'];
                                        if (trim($_POST['nome']) == '')
                                        {
                                            echo '<script>alert("Insira o seu nome");</script>';
                                        }
                                        elseif ($_POST['telefone'] != is_numeric($_POST['telefone']) || strlen($_POST['telefone']) < 9 )
                                            {
                                                echo '<script>alert("Insira o seu nº de telefone correto");</script>';
                                            }
                                        
                                        else
                                            {
                                                $sql = "INSERT INTO tbcontato (nome,email,telefone,msg) VALUES ('$_POST[nome]',' $_POST[email]',' $_POST[telefone]','$_POST[mensagem]' )";

                                                        $con->query($sql);

                                                        echo '<script>alert("Mensagem enviada com sucesso!")</script>';
                                                        echo "<meta http-equiv='refresh' content='0'>";
                                ?>
                                <?php           
                                            }
                                    }
                                ?>
    <script>
        function recaptchaCallback() 
        {
                $('#submitBtn').removeAttr('disabled');
        };
    </script>
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