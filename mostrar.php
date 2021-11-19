<!DOCTYPE html>
<html lang="en">
<head>
	<link rel = "stylesheet" href = "CSS/css_tabla.css">

</head>
<body>
<?php
$inc = include("conexion.php");

if ($inc) {
	$consulta = "SELECT * FROM persona_auto INNER JOIN pisos ON persona_auto.id_client=pisos.id_cli ORDER BY id_client";
	$resultado = mysqli_query($con,$consulta);
}
	    ?>

        <table class = "tabla" >
			  	<thead>
						<th class = "col">Numero de cliente</th>
						<th class = "col">Nombre</th>
						<th class = "col">Apellido</th>
						<th class = "col">DNI</th>
						<th class = "col">Patente</th>
						<th class = "col">Lugar</th>
						<th class = "col">Piso</th>

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
</body>
</html>
