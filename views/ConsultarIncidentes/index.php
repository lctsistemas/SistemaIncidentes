<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["id_usuario"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
<title>SistemaIncidentes</>::VerIncidentes</title>
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
								<h3>Ver Incidentes</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Inicio</a></li>
									<li class="active">Ver Incidentes</li>
								</ol>
							</div>
						</div>
					</div>
			</header>

			<div class="box-typical box-typical-padding">
				<table id="incid_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 5%;">Nro.Ticket</th>
							<th class="d-none d-sm-table-cell" style="width: 40%;">Incidente</th>
							<th style="width: 15%;">Area</th>
							<th class="d-none d-sm-table-cell" style="width: 12%;">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 7%;">Nivel de Prioridad</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Creacion</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Usuario que reporto</th>
							<th class="text-center" style="width: 5%;"></th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>

    <?php require_once("../MainJS/js.php");?>
	<script type="text/javascript" src="consultarticket.js"></script>

</body>
</html>
<?php
  }else{
	  header("Location:".Conectar::ruta()."index.php");
  }
  ?>