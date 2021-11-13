<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>inserte lugar</h1>
    	<input type="text" name="name" placeholder="Nombre">
    	<input type="text" name="apellido" placeholder="Apellido">
    	<input type="text" name="dni"  pattern="[0-9]+" placeholder="DNI">
    	<input type="text" name="patente" placeholder="patente">
    	<input type="submit" name="register">
    </form>
    <?php 
        include("subir.php");
    ?>
</body>
</html>