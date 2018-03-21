<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
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
	<form action="registro.php" method="POST">
		<div class="contenido col-xs-12 col-md-12 text-xs-center" id="contenido">
			<h1 id="titulo">REGISTRO DE USUARIO</h1>	
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" style="padding: 0px 7px 0px 1px;">
							<label class="label control-label" for="nombre">Nombres: </label>
						</span>
						<input type="text" name="nombre"  class="textBox form-control" value="" placeholder="Nombres" title="Ingrese su nombre aquí">
					</div>					
				</div>				
			</div>		
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" style="padding: 0px 7px 0px 1px;">
							<label class="label control-label" for="apellido">Apellidos: </label>
						</span>
						<input type="text" name="apellido" class="textBox form-control" value="" placeholder="Apellidos" title="Ingrese su apellido aquí">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" style="padding: 0px 7px 0px 1px;">
							<label class="label control-label" for="tipoId">Tipo de Identificación: </label>
						</span>
						<select  class="textBox form-control">
							<option value="0">Seleccione</option>
							<option value="1">Tarjeta de Identidad</option>
							<option value="2">Cédula de Ciudadania</option>
							<option value="3">Cédula de Extranjería</option>
						</select>
					</div>
				</div>	
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" style="padding: 0px 7px 0px 1px;">
							<label class="label control-label" for="numId">Número de Identificación: </label>
						</span>
						<input type="text" name="numId" value="" class="textBox form-control" placeholder="Número de Identificación" title="Ingrese su Número de Identificación aquí">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="input-group">
						<span class="input-group-addon" style="padding: 0px 7px 0px 1px;">
							<label class="label control-label" for="email">Correo Electrónico: </label>
						</span>
						<input type="text" name="email" value="" class="textBox form-control" placeholder="Correo Electrónico" title="Ingrese su Correo Electrónico aquí">
					</div>
				</div>
			</div>
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
						<input type="button" class="button btn btn-primary col-lg-3" name="btnRegistrar" value="REGISTRARME" id="btnRegistrar" title="REGISTRARME">  
						<input type="hidden" name="accion" value="registrar">				
						<a href="index.php?menu=" id="lnklogin" class="link btn btn-primary col-lg-2""><i class="fa fa-backward" aria-hidden="true"></i> Regresar</a>
					</div>
				</div>
			</div>
		</div>	
	</form>
</body>
</html>