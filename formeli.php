<!DOCTYPE html>
<html>
<head>
	<a href="index.php"><button>volver</button></a>
		<h1>Eliminar usuario</h1>
		<meta charset="utf-8">

</head>
<body>
    <form method="post">

    	<input type="text"   name="name_eli"    placeholder="Numero de cliente que desea eliminar">

    	<input type="submit" name="register">
    </form>
    <?php
        include("eliminar.php");
    ?>
</body>
