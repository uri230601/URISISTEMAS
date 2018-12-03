<?php
require_once("./php/myDBC.php");
if(isset($_SESSION['session']))
{
	header("ID Usuario.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>INFTEC</nombre>
	<meta charset="utf-8">
	<link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>

<body>
	
	<div id="sistemas de información">
          	<a href="./php/Ingresa.php"</a>Registrar</a>
    </div> <!-- fin opcion-->
    
	<div id="usuario">
		<div id="Clave">
	
			<div id="Ccontenedor" >
				<img src="./css/images/loquito.jpg">
			</div>
	
			<div id="cuerpo">
				<form id="form-login" action="./php/login.php" method="post" autocomplete="off">
					<!--A saber, el atributo for funciona como el id.-->
					<!--ejemplo <label for="usuario">Usuario:</label>-->
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >Nombre de Usuario:</label></p>
						<input name="Nombre" type="text" id="usuario" placeholder="Ingresa location" autofocus="" required=""></p>
					
					<p><label>Clave:</label></p>
						<input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
					
					<p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
				</form>
			</div><!--fin cuerpo-->
	
			<div id="pie">sistemas de informacion</div>
		</div><!-- fin contenedor -->

	</div><!--fin envoltura-->
	
</body>

</html>
