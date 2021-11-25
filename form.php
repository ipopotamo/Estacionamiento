<!DOCTYPE html>
<html>
<head>
		<h1>Registrar usuario</h1>
		<meta charset="utf-8">
<a href="index.php"><button>volver</button></a> 

</head>
<body>

    <form method="post">
    	<h1>inserte lugar</h1>
		<input type="text"     name="id"       placeholder="idcliente">
    	<input type="text"   name="name"     placeholder="Nombre">
    	<input type="text"   name="apellido" placeholder="Apellido">
    	<input type="text"   name="dni"      pattern="[0-9]+" placeholder="DNI">
    	<input type="text"   name="patente"  placeholder="patente">
   		<input type="text"   name="lug"      placeholder="lugar">
    	<input type="submit" name="register">
    </form>
    <?php
		include("vacio.php");
    include("subir.php");
    ?>

</body>
