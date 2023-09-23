<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        function navBar()
        {
    ?>
            <ul class="dropdown-content" style="background-color:#fff" id="menuConhecimento">
                <li><a  style="color:purple" href="tesp">Cursos TeSP</a></li>
                <li><a style="color:purple" href="iefp">Cursos IEFP</a></li>
            </ul>
            <ul class="dropdown-content" style="background-color:#fff" id="menuEmpreendoderismo">
              <li><a style="color:purple" href="entidades">Entidades Incubadas</a></li>
            </ul>
        <div class="nav-wrapper">
            <nav class="nav-center" style="background-color:#fff">
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="color:purple" >menu</i></a>
                        <div class="left">                            
                            <li><a style="color:purple" href="index"><img src="images/footer_nav/logolb.png" class="brand-logo" style="width:80px; margin-top:10px; margin-left:1%;"></a></li>
                        </div>
                        <ul class="right hide-on-med-and-down">
                            <li><a style="color:purple" href="quemsomos" >Sobre Nós</a></li>
                            <li><a style="color:purple" href="noticias">Notícias</a></li>
                            <li><a style="color:purple" href="eventos">Eventos</a></li>
                            <li><a style="color:purple" href="parceiros">Parceiros</a></li>
                            <li><a style="color:purple" data-activates="menuEmpreendoderismo" class="dropdown-button" data-beloworigin="true">Empreendedorismo</a></li>
                            <li><a style="color:purple" data-activates="menuConhecimento" class="dropdown-button" data-beloworigin="true">Conhecimento</a></li>
                            <li><a style="color:purple" href="robotica">Robótica para Todos</a></li>
                            <li><a style="color:purple"  href="fablab">Fab-Lab</a></li>
                            <li><a style="color:purple" href="contatos">Contactos</a></li>
                        </ul>
            </nav>
      </div>
      <!-- Move the sidenav outside of .navbar-fixed -->
        <ul class="side-nav" id="mobile-demo" style="background-color:#fff">
            <li><a style="color:purple"  href="index">Início</a></li>
            <li><a style="color:purple"  href="quemsomos" >Sobre Nós</a></li>
            <li><a style="color:purple" href="noticias">Notícias</a></li>
            <li><a style="color:purple" href="eventos">Eventos</a></li>
            <li><a style="color:purple" href="parceiros">Parceiros</a></li>
            <li><a style="color:purple" data-activates="menuEmpreendoderismo" class="dropdown-button" data-beloworigin="true">Empreendedorismo</a></li>
            <li><a style="color:purple" data-activates="menuConhecimento" class="dropdown-button" data-beloworigin="true">Conhecimento</a></li>
            <li><a style="color:purple" href="robotica">Robótica para Todos</a></li>
            <li><a style="color:purple"  href="fablab">Fab-Lab</a></li>
            <li><a style="color:purple"  href="contatos">Contactos</a></li>
        </ul>
        <!--<div id="google_translate_element"></div>-->
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>        
        <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'pt', includedLanguages: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
        </script>
        
    <?php
        }
    ?>
    <?php
        function footer()
        {
    ?>
            <footer class="page-footer" style="background-color:#fff">
            <div class="footer-copyright"></div>
            <div class="container">
              <div class="row">
                <div class=" col l3 s12">
                    <ul>
                      <li><a style="color:purple"  href="index">Início</a></li>
                      <li><a style="color:purple"  href="quemsomos" >Sobre Nós</a></li>
                      <li><a style="color:purple"  href="noticias">Notícias</a></li>
                      <li><a style="color:purple"  href="eventos">Eventos</a></li>
                      <li><a style="color:purple"  href="parceiros">Parceiros</a></li>
                      <li><a style="color:purple" data-activates="menuEmpreendoderismo" class="dropdown-button" data-beloworigin="true">Empreendedorismo</a></li>
                      <li><a style="color:purple" data-activates="menuConhecimento" class="dropdown-button" data-beloworigin="true">Conhecimento</a></li>
                      <li><a style="color:purple"  href="robotica">Robótica para Todos</a></li>
                      <li><a style="color:purple"  href="fablab">Fab-Lab</a></li>
                      <li><a style="color:purple"  href="contatos">Contactos</a></li>
                    </ul>
                  </div>
                  <div class="col l4 offset-l2 s12">
                    <li>
                      <ul class="toggle-footer">
                      <a style="color:purple"><b>Torres Vedras LabCenter</b></a>
                      <li><a style="color:purple"><u>O Conhecimento aliado ao Empreendedorismo.</u></a><li>
                      <li><a href="https://goo.gl/maps/ZNKbHmsV4Nw" target="_blank" style="color:purple">Rua José Eduardo César Nº 6  2560 232 Torres Vedras</a><li>
                      <li><a style="color:purple"href="https://goo.gl/maps/ZNKbHmsV4Nw" target="_blank"><i class="material-icons" style="color:purple">&#xE0C8;</i>39°05'30.4"N 9°15'35.3"W.</a></li>
                      <p style="color:purple"><i class="material-icons" style="color:purple">&#xE0B0;</i> 261243000</p>
                      <p style="color:purple"><i class="material-icons" style="color:purple">&#xE0B0;</i> 919718441 </p>
                      <li><a href="mailto:labcenter@cm-tvedras.pt" style="color:purple"><i class="material-icons" style="color:purple">&#xE0BE;</i> labcenter@cm-tvedras.pt</a></li>
                      </ul>
                  </div>
                  <div class="col l3  s12">
                      <ul class="toggle-footer">
                          <img src="images/footer_nav/logo-cmtv-footer.png"/>
                      </ul>
                      <ul class="toggle-footer" >
                        <img  src="images/footer_nav/logolb.png"/>
                      </ul>
                    </li>
                  </div>     
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2018 
              </div>
            </div>
          </footer>
    <?php
        }    
    ?>
    <?php
        if (isset($_POST['terminar']))
        {
        unset($_SESSION['user']);
        unset($_SESSION['logado']);
        session_destroy();
        header("location:lgbolbcmtv.php");
        }
        function navBarBack()
        {
    ?>
            <ul id="dropdownPa" class="dropdown-content red darken-4">
              <li><a class="white-text" href="boparceiros">Parceiros</a></li>
              <li><a class="white-text" href="boincubacao">Incubação</a></li>
            </ul>
            <ul id="dropdownPaM" class="dropdown-content red darken-4">
              <li><a class="white-text" href="boparceiros">Parceiros</a></li>
              <li><a class="white-text" href="boincubacao">Incubação</a></li>
            </ul>
            <ul id="dropdownC" class="dropdown-content red darken-4">
              <li><a class="white-text" href="botesp">Cursos TeSP</a></li>
              <li><a class="white-text" href="boiefp">Cursos IEFP</a></li>
            </ul>
            <ul id="dropdownCM" class="dropdown-content red darken-4">
              <li><a class="white-text" href="botesp">Cursos TeSP</a></li>
              <li><a class="white-text" href="boiefp">Cursos IEFP</a></li>
            </ul>
            
            <div class="navbar-fixed">
                <nav class="red darken-4">
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="boslider">Slider</a></li>
                            <li><a href="bosobrenos">Sobre Nós</a></li>
                            <li><a href="boentidades">Entidades Incubadas</a></li>
                            <li><a class="dropdown-button" href="boempresas" data-activates="dropdownPa"  data-beloworigin="true">Parceiros-Fundadores</a></li>
                            <li><a class="dropdown-button" data-activates="dropdownC" data-beloworigin="true">Conhecimento</a></li>
                            <li><a href="boeventos">Eventos</a></li>
                            <li><a href="bonoticias">Notícias</a></li>
                            <li><a href="borobotica">Robótica</a></li>
                            <li><a href="bocontatos">Contactos</a></li>
                            <li><form method="post"><button class="red darken-4" style="color:white" type="submit" name="terminar"><i class="large material-icons">exit_to_app</i></button></form></li>
                        </ul>
                </nav>
            </div>
            <!-- Move the sidenav outside of .navbar-fixed -->
              <ul class="side-nav red darken-4" id="mobile-demo">
                <li><a class="white-text" href="boslider">Slider</a></li>
                <li><a class="white-text" href="bosobrenos">Sobre Nós</a></li>
                <li><a class="white-text" href="boentidades">Entidades Incubadas</a></li>
                <li><a data-activates="dropdownPaM" class="dropdown-button white-text" data-beloworigin="true" href="boempresas" >Parceiros-Fundadores</a></li>
                <li><a class="dropdown-button white-text" data-activates="dropdownCM" data-beloworigin="true">Conhecimento</a></li>
                <li><a class="white-text" href="boeventos">Eventos</a></li>
                <li><a class="white-text" href="bonoticias">Notícias</a></li>
                <li><a class="white-text" href="borobotica">Robótica</a></li>
                <li><a class="white-text" href="bocontatos">Contactos</a></li>
                <li><form method="post"><button  class="btn waves-effect waves-light red darken-4" type="submit" name="terminar" value="Terminar sessão"> 
                      Terminar Sessão
                    </button></form></li>
              </ul>
        
    <?php
        }
    ?>
</body>
</html>