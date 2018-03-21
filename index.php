<!DOCTYPE html>
<html>
<head>
	<title>Plantilla WEB con PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"	integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj"	crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script	src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script	src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
	<script	src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
	<script type="text/javascript" src="js/registrar.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
</head>
<body class="container">	
	<!--Header es lo que definira el bloque de contenido de tipo titulo o menu de navegación -->
	<header>
		<?php
		//Tendremos una instrunción de php para mostrar el header construido
		include('header.php');		
		?>
	</header>
	<!--El section se utiliza para definir secciones con gran contenido en la página WEB. Este sera el bloque que recibira todo el contenido central y variable del sitio-->
	<section>
		<div>
			<?php
				if (isset($_GET['menu'])) { //Si la variable menu está definida, entonces se evalua la opción seleccionada
					if($_GET['menu']=='registro'){
					include('registro.php');

					}else if ($_GET['menu']== 'ingreso') {
					include('ingreso.php');
					}else if ($_GET['menu']== '') {
						echo '<h1 id="titulo">BIENVENIDO PÁGINA ITM  POR: <br /> LINA DAVID</h1>';
					}else if ($_GET['menu']=='principal') {
						include('principal.php');
					}
				}

				//TAREA: traer una plantilla con estilos y 4 opciones				
			?>			
		</div>
		
	</section>

	<!--Footer es lo que definira el bloque de contenido de pie de página -->
	<footer style="display: inline-block;">
		<?php
		//Tendremos una instrunción de php para mostrar el footer construido		
		include('footer.php');
		//Consultar include, include-once, require-once
		?>
	</footer>
</body>
</html>