<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de Comprobación</title>
</head>
<body bgcolor="#21302E">
	<?php
    $trabajador = $_GET['id_trabajador'];
    echo "El trabajador es: $trabajador <br>";
    $password = $_GET['password_trabajador'];
    echo "Tu contraseña es: $password <br>";
    echo "<a href='../aeternitas_info.html' target='Pantalla_principal'>Regresar</a><br>";
    echo "<a href='../aeternitas_menu_trabajador.html' target='Pantalla_principal'>Avanzar</a>";
	?>
	
</body>
</html>