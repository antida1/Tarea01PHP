<!DOCTYPE html>
<html>
<head>
	<title>Ingreso</title>
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
	<form action="ingreso.php" method="POST">
		<div class="contenido col-xs-12 col-md-12 text-xs-center" id="contenido">
			<h1 id="titulo">INGRESO</h1>
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" style="padding: 0px 7px 0px 1px;">
							<label class="label control-label" for="usuario">Usuario: </label>
						</span>
						<input type="text" name="usuario" value="" class="textBox form-control" placeholder="Usuario" title="Ingrese su usuario aquí">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" style="padding: 0px 7px 0px 1px;">
							<label class="label control-label" for="contrasena">Contraseña: </label>
						</span>
						<input type="password" name="contrasena" class="textBox form-control" value="" placeholder="Contraseña" title="Ingrese su contrasena aquí">
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div align="center">
					<div>
						<input type="button" class="button btn btn-primary col-lg-3" name="btnIngresar" value="INGRESAR" id="btnIngresar" title="Ingresar">  
						<input type="hidden" name="accion" value="ingresar">				
						<a href="index.php?menu=" id="lnklogin" class="link btn btn-primary col-lg-2""><i class="fa fa-backward" aria-hidden="true"></i> Regresar</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>