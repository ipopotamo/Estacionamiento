<!DOCTYPE html>
<html>
<head>
	<a href="index.php"><button>volver</button></a>
		<h1>Eliminar usuario</h1>
		<meta charset="utf-8">
			<link rel = "stylesheet" href = "CSS/css_tabla.css">

</head>
<body>
    <form method="post">

    	<input type="text"   name="name_eli"    placeholder="Numero de cliente que desea eliminar">
    	<input type="submit" name="register">
    </form>
		<br>
		<?php
		$inc = include("conexion.php");

		if ($inc) {
			$consulta = "SELECT * FROM persona_auto INNER JOIN pisos ON pisos.lugar = persona_auto.id_client ORDER BY id_client";
			$resultado = mysqli_query($con,$consulta);
		}
			    ?>

		        <table class = "tabla" >
					  	<thead>

								<th class = "col">Numero del cliente</th>
								<th class = "col">Nombre</th>
								<th class = "col">Apellido</th>
								<th class = "col">DNI</th>
								<th class = "col">Patente</th>
								<th class = "col">Lugar</th>
								<th class = "col">Pisos</th>
							</thead>
								<tbody>
								<?php while($row = $resultado->fetch_assoc()){    ?>
		            	<tr>


										<td class = "fil"><?php  echo $row['id_client'] ?></td>
										<td class = "fil"><?php  echo $row['nombre'] ?></td>
										<td class = "fil"><?php  echo $row['apellido'] ?></td>
										<td class = "fil"><?php  echo $row['dni'] ?></td>
										<td class = "fil"><?php  echo $row['patente'] ?></td>
										<td class = "fil"><?php  echo $row['lugar'] ?></td>
										<td class = "fil"><?php  echo $row['piso'] ?></td>


		   					<?php }?>
								</tbody>
		        </table>


    <?php
        include("eliminar.php");
    ?>
</body>
