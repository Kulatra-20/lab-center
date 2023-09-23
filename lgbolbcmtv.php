<?php
 session_start();
 ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LabCenter-BackOffice</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="images/fundolb.png"/>
</head>
<body>
<?php
    if(isset($_POST['entrar']))
    {
        //criacao da connectionString
        include 'connString.php';

        if($con->connect_error)
        {
            die("Ligação Falhada");
        }
        else
        {
            $sql="SELECT nome,pw FROM tb_login";
            $result=$con->query($sql);

            if($result->num_rows>0)
            {
                while ($row=$result->fetch_assoc())
                {
                    if($row['nome'] == $_POST['utilizador'] && $row['pw'] == $_POST['senha'])
                    {
                        session_start();
                        $_SESSION['user'] = $row['nome'];
                        $_SESSION['logado']="sim";
                        header('location:boslider');
                    }
                }
                echo "<script>alert('Utilizador ou palavra-chave incorreta')</script>";
            }     
        }
    }
		
	?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
         <br>
         <main>
         <center>
						 <br>
						 <img src="images/footer_nav/logolb.png" alt="">
						 <br><br>
           <div class="container">
             <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 40px 60px 0px 40px; border: 1px solid #EEE;">

               <form class="col s12" method="post">
                 <div class='row'>
                   <div class='col s12'>
                   </div>
                 </div>

                 <div class='row'>
                   <div class='input-field col s12'>
                   	Utilizador:
                     <input class='validate' type='text' name='utilizador' id='utilizador' required/>
                   </div>
                 </div>

                 <div class='row'>
                   <div class='input-field col s12'>
                   	Palavra Chave:
                     <input class='validate' type='password' name='senha' id='Palavra_chave'required/>
                   </div>
                        <input type="checkbox" id="cbMostrarPw" onclick="myFunction()"/>
                        <label for="cbMostrarPw">Mostrar palavra-chave</label>  
                 </div>
                 <center>
                   <div class='row'>
                     <button type='submit' name='entrar' class='col s12 btn btn-large waves-effect purple' value="Iniciar Sessão" >Login</button>
                   </div>
                 </center>
                 <div class="preloader-wrapper big active">
               </form>
             </div>
           </div>
         </center>
       </main>
     </form>
     <script>
    function myFunction() {
        var x = document.getElementById("Palavra_chave");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>      
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>