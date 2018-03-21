<!DOCTYPE html>
<html>
<head>
	<title>Página Principal</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"	integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj"	crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script	src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script	src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
	<script	src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
	<script type="text/javascript" src="js/registrar.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="container">
	<form>
		<div class="contenido col-xs-12 col-md-12 text-xs-center" id="contenido">
			<h1 id="titulo">BIENVENIDO A LA PÁGINA PRINCIPAL</h1>
			<?php
				$banner1 = '<a href="#index.php?menu=principal" target=""><img src="mabon-ostara.jpg" alt="mabon-ostara" title="MABON-OSTARA"></a>';
				$banner2 = '<a href="index.php?menu=principal" target=""><img src="chiste.jpg" alt="Chiste" title="Chiste"></a>';
				$banner3 = '<a href="index.php?menu=principal" target=""><img src="brujisTatuajes.jpg" alt="Brujas" title="Brujas - Tatuajes"></a>';
				$banner4 = '<a href="index.php?menu=principal" target=""><img src="linux.jpg" alt="Linux" title="Linux"></a>';
				$banners = array($banner1, $banner2, $banner3, $banner4);
				shuffle($banners);
			?>
			<div>
  				<?php print $banners[0] ?>
			</div>
		</div>
	</form>

</body>
</html>