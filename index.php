<?php
header('Content-Type: text/html; charset=utf8'); ?><!DOCTYPE html>
<html lang="es-ES" class="no-js">
<head>
    <meta name="description" content="Portal de Datos GBIF.ES"/>
    <meta name="author" content="Portal de Datos GBIF.ES">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://www.gbif.es/wp-content/uploads/2017/05/favicon-gbif.png" rel="shortcut icon"  type="image/x-icon"/>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen, print" />	
	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen, print" />	
	<?php include 'head.html';?>
</head>
<body style="margin-top:0px;">

<?php include 'banner.html';?>

<!-- main content -->
<div id="content" class="site-content">
	<div id="primary" class="content-area parent_homepage">
		<main id="main" class="site-main">
			<section class="banner_numbers container">
				<div class="banner" style="margin-left:-20px; margin-right:-20px;">
					<img src="http://localhost/gbifes/images/Banner_Portal.jpg" alt="" 
					class="hidemobile">
				</div>
				<div class="buscador">
					<div class="container">
						<form action="http://registros.gbif.es/occurrences/search" method="get">
							<input type="search"  style="width: 100%; line-height: 1em;" placeholder="Buscar en el portal de datos" name="q">
							
							<input type="submit" name="submit" class="search-submit">
						</form>
<!--
						<a class="hidemobile" style="float:right; position:relative; margin-right: 130px; top:-80px;" 
						href="http://registros.gbif.es/#tab_advanceSearch">Búsqueda <br/>Avanzada</a> 
					-->
					
					</div>					
				</div>
				<div class="numbers_box">
					<h4 class="text"></h4>					
					<div class="numbers">
						<div class="number">
							<div class="number_nro" >
								<a href="http://registros.gbif.es/occurrences/search" id="number_registros" style="color:#36de97;text-decoration:none; ">
								20.000.000
								</a>
							</div>
							<div class="number_text">registros</div>
						</div>
						<div class="number">
							<div class="number_nro">
								<a href="http://colecciones.gbif.es/datasets" id="number_bases" style="color:#36de97;text-decoration:none; ">
								200
								</a>
							</div>
							<div class="number_text">bases de datos</div>
						</div>
						<div class="number">
							<div class="number_nro">
								<a href="http://colecciones.gbif.es" id="number_instituciones" style="color:#36de97; text-decoration:none; ">
									80
								</a>		
							</div>
							<div class="number_text">instituciones</div>
						</div>
					</div>
				</div>
			</section>
			<section class="franja_verde">
				<div class="container">
					<div class="row fv_list">
							<div class="col-sm-3 fv_item">
								<a class="enlace" href="http://colecciones.gbif.es" target="_self">
									<figure>
										<img src="images/Icon_Instituciones.png" alt="Comparte" class="style-svg">
									</figure>
									<h3 style="color:white;">Instituciones, colecciones y proyectos</h3>
									<p>Consulta información de todas las<br/> 
										entidades españolas que publican<br/> 
										datos en GBIF
									</p>
								</a>
							</div>
							<div class="col-sm-3 fv_item">
								<a class="enlace" href="http://colecciones.gbif.es/datasets" target="_self">
									<figure>
										<img src="images/Icon_Juegos_Datos.png" alt="Explora" class="style-svg">
									</figure>
									<h3 style="color:white;">Juegos de datos</h3>
									<p>Accede a todas loas bases de datos<br/>
										de biodiversidad compartidas a<br/>
										través de GBIF.es
									</p>
								</a>
							</div>
							<div class="col-sm-3 fv_item">
								<a class="enlace" href="http://registros.gbif.es/explore/your-area" target="_self">
									<figure>
										<img src="images/Icon_Explora_Area.png" alt="Gestiona" class="style-svg">
									</figure>
									<h3 style="color:white;">Explora tu área</h3>
									<p>Localiza y consulta las<br/>
										especies que te rodean
									</p>
								</a>
							</div>
							<div class="col-sm-3 fv_item">
								<a class="enlace" href="http://regiones.gbif.es" target="_self">
									<figure>
										<img src="images/Icon_Regiones.png" alt="Aprende" class="style-svg">
									</figure>
									<h3 style="color:white;">Regiones</h3>
									<p>Explora las especies<br/>
										includidas en un<br/>
										determinado territorio<br/>
										parque natural, area
									</p>
								</a>
							</div>
						</div>
				</div>
			</section>
		</main>
	</div>
</div>
<!-- end of main content -->

<?php include 'footer.html';?>

</body>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="js/stats.js"></script>
<script>
loadStats();
</script>

</html>
