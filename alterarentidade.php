<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BackOffice-LabCenter-</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="images/fundolb.png"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
</head>
<body>

    <?php
      include 'funcooes.php';
      navBarBack();
    ?>

<?php

    include 'connString.php';

		if ($con -> connect_error)
		{
			die("Connection falhada: " . $con->connect_error);
		}

		//include('index.php')

		 if (isset($_GET['id_entidade']))
		{
			$id=$_GET['id_entidade'];

			$sql="SELECT * FROM tb_entidades";
			$result = $con->query($sql);

				if ($result->num_rows > 0)
				{
					while ($row = $result -> fetch_assoc())
					{
	?>
    <div class="container" style="align center">
        <form action="processoalteraentidade.php" method="post">
            <input type="hidden" name="id_entidade" value="<?php echo $row['id_entidade']?>"/>
            <br><br>
            Descrição:
            <textarea class="ckeditor" name="texto" required><?php echo $row['texto']?></textarea>
            <br><br>
            <button class="waves-effect waves-red btn red darken -4" type="submit" name="alterar" value="inserir"> Alterar </button>
        </form>
    </div>
	<?php
	}}}
		else
		{
			echo ("não existem dados a apresentar.");
		}
		$con->close();

	?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $( document ).ready(function(){})
    $(".button-collapse").sideNav();
</script>
</body>
</html>