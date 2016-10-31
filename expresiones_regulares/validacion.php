<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Validacion</title>
	<link rel="stylesheet" href="StyleSheet.css">
</head>
<body>
	<?php 
	$duival = '/^\d{8}-[0-9]{1}$/';//validar DUI
	$palabrasval = '/^[a-zA-Z]+(\s*[a-zA-Z]*)+$/';//permitir letras mayusculas y minusculas con espacios
	$nitval = '/^[0-9]{4}-[0-9]{6}-\d{3}-\d{1}$/';//validar DUI
	$edadval = '/^[0-9]{1,3}$/';//permite ingresar solo 3 numeros
	if (isset($_POST['enviar'])) {
		$dui = $_POST['dui'];
		$primer_apellido = $_POST['primer_apellido'];
		$segundo_apellido = $_POST['segundo_apellido'];
		$nombres = $_POST['nombres'];
		$conocido_por = $_POST['conocido_por'];
		$ciudad_nacimiento = $_POST['ciudad_nacimiento'];
		$profesion = $_POST['profesion'];
		$edad = $_POST['edad'];
		$nit = $_POST['nit'];
		if (preg_match($duival,$_POST['dui'])) {
			echo "<h4 style= 'color: #009C11;'>Su numero de dui es: ".$dui."</h4>";
		}else{
			echo "<h4 style= 'color: #D52600'>ERROR: Ingrese un numero de dui valido.</h4>";
		}if (preg_match($nitval, $_POST['nit'])) {
			echo "<h4 style= 'color: #009C11;'>Su numero de nit es: ".$nit."</h4>";
		}else{
			echo "<h4 style= 'color: #D52600'>ERROR: Ingrese un numero de nit valido.</h4>";
		}if (preg_match($palabrasval, $_POST['primer_apellido'])) {
			echo "<h4 style= 'color: #009C11;'>Su primer apellido es: ".$primer_apellido."</h4>";
		}else{
			echo "<h4 style= 'color: #D52600'>ERROR:Error al ingresar primer apellido</h4>";
		}if (preg_match($palabrasval, $_POST['segundo_apellido'])) {
			echo "<h4 style= 'color: #009C11;'>Su segundo apellido es: ".$segundo_apellido."</h4>";
		}else{
			echo "<h4 style= 'color: #D52600'>ERROR:Error al ingresar segundo apellido</h4>";
		}if (preg_match($palabrasval, $_POST['nombres'])) {
			echo "<h4 style= 'color: #009C11;'>Su nombres es: ".$nombres."</h4>";
		}else{
			echo "<h4 style= 'color: #D52600'>ERROR:Error al ingresar nombres</h4>";
		}if (preg_match($palabrasval, $_POST['conocido_por'])) {
			echo "<h4 style= 'color: #009C11;'>Eres conocido por: ".$conocido_por."</h4>";
		}else{
			echo '<h4 style= "color: #D52600">ERROR:Error al ingresar el campo "conocido por"</h4>';
		}if (preg_match($palabrasval, $_POST['ciudad_nacimiento'])) {
			echo "<h4 style= 'color: #009C11;'>Su ciudad nacimiento es: ".$ciudad_nacimiento."</h4>";
		}else{
			echo "<h4 style= 'color: #D52600'>ERROR:Error al ingresar el campo ciudad nacimiento</h4>";
		}if (preg_match($palabrasval, $_POST['profesion'])) {
			echo "<h4 style= 'color: #009C11;'>Su profesion es: ".$profesion."</h4>";
		}else{
			echo '<h4 style= "color: #D52600">ERROR: Error al ingresar el campo "profesion"</h4>';
		}if (preg_match($edadval, $_POST['edad'])) {
			echo "<h4 style= 'color: #009C11;'>Su edad es: ".$edad."</h4>";
		}else{
			echo '<h4 style= "color: #D52600">ERROR: Error al ingresar el campo "edad"</h4>';
		}
	}
?>
</body>
</html>


