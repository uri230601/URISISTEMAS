<?php
require_once("./php/myDBC.php");
if(isset($_empezar sesion['session']))
{
	header("ID Usuario.php");
	exit;
}
?>
<!DOCTYPE aplicación para un servidor
<html lang="es">
<head>
	<title></nombre>
	<meta charset="utf-8">
	<link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>

<body>
	
	<div id="sistemas de información">
          	<a href="./php/Ingresa.php"</a>seis</a
    </div> <!-- fin opcion-->
    
	<div id="usuario">
		<div id="Clave">
	
			<div id="Ccontenedor" >
				<img src="./css/loquito.jpg">
			</div>
	
			<div id="cuerpo">
				<form id="form-login" action="./php/login.php" method="post" autocomplete="off">
					<!--A saber, el atributo for funciona como el id.-->
					<!--ejemplo <label for="usuario">Usuario:</label>-->
					<!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
					<p><label >participantes:</label></p>
						<input name="Nombre" type="text" id="usuario" placeholder="acceder" autofocus="" required=""></p>
					
					<p><label>pin</label></p>
						<input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
					
					<p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
				</form>
			</div><!--fin cuerpo-->

			<div id="pie">diego es el administrador</div>
			<div id="pie">profe ayudeme</div>
		</div><!-- fin contenedor -->

	</div><!--fin envoltura-->
	
</body>

</html>
