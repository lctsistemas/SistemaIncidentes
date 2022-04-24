<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["id_usuario"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
<title>SistemaIncidentes</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div>
	</div>

    <?php require_once("../MainJS/js.php");?>
	<script type="text/javascript" src="home.js"></script>

</body>
</html>
<?php
  }else{
	  header("Location:".Conectar::ruta()."index.php");
  }
  ?>