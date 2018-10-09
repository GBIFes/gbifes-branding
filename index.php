<?php
header('Content-Type: text/html; charset=utf8'); ?><!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta name="description" content="Portal de Datos GBIF.ES"/>
    <meta name="author" content="Portal de Datos GBIF.ES">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de datos de GBIF.ES</title>
    <link href="https://www.gbif.es/wp-content/uploads/2017/05/favicon-gbif.png" rel="shortcut icon"  type="image/x-icon"/>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen, print" />	
	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen, print" />	
	<?php include 'head.html';?>
</head>
<body>

<?php include 'banner.html';?>

<!-- main content -->
<div id="content" class="site-content">
	<div id="primary" class="content-area parent_homepage">
		<main id="main" class="site-main">
			<div class="page_header primarygreen" style="background-image: url(https://datos.gbif.es/images/Banner_Portal_no_text.png)">
				<h1 id="main_title_label"></h1>
			</div>
			<section class="banner_numbers container">
				<div class="buscador">
					<div class="container">
						<form action="https://registros.gbif.es/occurrences/search" method="get">
							<a class="hiddenmobile" 
								id="advanced_search_link"
								href="https://registros.gbif.es/#tab_advanceSearch">
								<span id="search_input_advanced1">Búsqueda</span><br/>
								<span id="search_input_advanced2">Avanzada</span>
							</a> 
							<input type="search" id="main_search_input" 
							placeholder="" 
							name="q">						
							<input type="submit" name="submit" class="search-submit" id="main_search_submit">
						</form>
					
					</div>					
				</div>
				<div class="numbers_box">
					<h4 class="text"></h4>					
					<div class="numbers">
						<div class="number">
							<div class="number_nro" >
								<a href="https://registros.gbif.es/occurrences/search" id="number_registros" style="text-decoration:none;" class="portal-link loading_stats">
									20.000.000
								</a>
							</div>
							<div class="number_text" id="numbers_occurrences_label">registros</div>
						</div>
						<div class="number">
							<div class="number_nro">
								<a href="https://colecciones.gbif.es/datasets" id="number_bases" style="text-decoration:none;"  class="portal-link loading_stats">
									200
								</a>
							</div>
							<div class="number_text" id="numbers_datasets_label">bases de datos</div>
						</div>
						<div class="number">
							<div class="number_nro">
								<a href="https://colecciones.gbif.es" id="number_instituciones" style="text-decoration:none;"  class="portal-link loading_stats">
									80
								</a>		
							</div>
							<div class="number_text" id="numbers_institutions_label">instituciones</div>
						</div>
					</div>
				</div>
			</section>
			<section class="franja_verde">
				<div class="container">
					<div class="row fv_list">
						<div class="col-sm-3 fv_item">
							<a class="enlace portal-link " href="https://colecciones.gbif.es" target="_self">
								<figure>
									<img src="images/Bandeja.svg" alt="Comparte" class="style-svg">
								</figure>
								<h3 id="sub_menu_collections">Instituciones, colecciones y proyectos</h3>
								<p id="sub_menu_collections_detail">Consulta información de todas las
									entidades españolas que publican
									datos en GBIF
								</p>
							</a>
						</div>
						<div class="col-sm-3 fv_item">
							<a class="enlace portal-link " href="https://colecciones.gbif.es/datasets" target="_self">
								<figure>
									<img src="images/Etiqueta.svg" alt="Explora" class="style-svg">
								</figure>
								<h3 id="sub_menu_datasets">Juegos de datos</h3>
								<p id="sub_menu_datasets_detail">Accede a todas las bases de datos
									de biodiversidad compartidas a
									través de GBIF.es
								</p>
							</a>
						</div>
						<div class="col-sm-3 fv_item">
							<a class="enlace portal-link " href="https://registros.gbif.es/explore/your-area" target="_self">
								<figure>
									<img src="images/Prismaticos.svg" alt="Gestiona" class="style-svg">
								</figure>
								<h3 id="sub_menu_explore">Explora tu área</h3>
								<p id="sub_menu_explore_detail"> Localiza y consulta las
									especies que te rodean
								</p>
							</a>
						</div>
						<div class="col-sm-3 fv_item">
							<a class="enlace portal-link" href="https://regiones.gbif.es" target="_self">
								<figure>
									<img src="images/Globo.svg" alt="Regiones" class="style-svg">
								</figure>
								<h3 id="sub_menu_regions">Regiones</h3>
								<p id="sub_menu_regions_detail">Explora las especies
									includidas en un
									determinado territorio
									parque natural, área marina
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="https://datos.gbif.es/js/jquery.i18n.properties.js" type="text/javascript"></script>

<?php include 'footer.html';?>

</body>
<style>

#site-menu {
	border-bottom: none !important;
}

#main_search_input {
	width: 100%; 
	line-height: 1em; 
	top: 55%;
}
#main_search_submit {
	top: 58%;
}
#advanced_search_link {
	color: black; 
	font-weight: bold; 
	float:right; 
	position:relative; 
	margin-right: 100px; 
	top:100px;
}
.loading_stats {
	color:#aaa;
	text-decoration:none;
}
.loaded_stats {
	color:#36de97;
	text-decoration:none; 
	transition-delay: 0.5s;
}
.parent_homepage .franja_verde { padding-top: 90px; }
.fv_item { margin-top: 20px;}
</style>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="https://auth.gbif.es/js/jquery.i18n.properties.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/stats.js" type="text/javascript"></script>
<script>
   loadStats();
</script>
</html>


