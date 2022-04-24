<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["id_usuario"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
<title>SistemaIncidentes::RegistroIncidente</title>
<style>
	.espacio{
		margin-top:15px;
	}
</style>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			
			<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Nuevo Incidente</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Inicio</a></li>
									<li class="active">Nuevo Incidente</li>
								</ol>
							</div>
						</div>
					</div>
			</header>

			<div class="box-typical box-typical-padding">	
				<div class="row">
					<form method="POST" id="incid_form" enctype="multipart/form-data">
					<input type="hidden" id="id_usu" name="id_usu" value="<?php echo $_SESSION["id_usuario"] ?>">

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Incidente</label>
								<input type="text" name="nom_inci" id="nom_inci" class="form-control" id="exampleInput" placeholder="Ingrese un titulo">
								
								
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="id_area">Origen</label>
								<select id="id_area" name="id_area" class="form-control">
									
								</select>
							</fieldset>
						</div>		
						<div class="col-lg-12 mb-5">
						<label class="form-label semibold" for="desc_incid">Descripcion</label>
							<div class="input-group">
								<span class="input-group-addon">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								</span>
									<textarea class="form-control" id="desc_incid" name="desc_incid" rows="4" placeholder="Ingresa una descripcion"></textarea>
							</div>
                 		</div>
						 <br/>

						
							<div class="col-lg-6">
								<div class="form-group mt-5 espacio">
									
										<span class="input-group-btn">
											<input type="file" id="arch_inc" name="arch_inc" multiple="multiple" class="btn btn-primary btn-file"/>
										</span>
									</div>
								
							</div>
  					
						<br>
						<div class="col-lg-12">
								<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
  					</form>
				</div>
  			</div>
		</div>
	</div>

    <?php require_once("../MainJS/js.php");?>
	<script type="text/javascript" src="nuevoticket.js"></script>

</body>
</html>
<?php
  }else{
	  header("Location:".Conectar::ruta()."index.php");
  }
  ?>