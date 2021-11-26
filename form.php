<!DOCTYPE html>
<html>
<head>
		<h1>Registrar usuario</h1>
		<meta charset="utf-8">
<a href="index.php"><button>volver</button></a>
<br><br>

</head>
<body>

    <form method="post">
		<input type="text"     name="id"       placeholder="idcliente">
    	<input type="text"   name="name"     placeholder="Nombre">
    	<input type="text"   name="apellido" placeholder="Apellido">
    	<input type="text"   name="dni"      pattern="[0-9]+" placeholder="DNI">
    	<input type="text"   name="patente"  placeholder="patente">
   		<input type="text"   name="lug"      placeholder="lugar"><br>
    	<input type="submit" name="register">
    </form>
	<h1>Lugares Vacios</h1>

    <?php
		include("vacio.php");
    include("subir.php");
    ?>

</body>
