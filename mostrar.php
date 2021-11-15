<!DOCTYPE html>
<html lang="en">
<head>
	<link rel = "stylesheet" href = "CSS/css_tabla.css">
</head>
<body>
<?php
$inc = include("conexion.php");

if ($inc) {
	$consulta = "SELECT * FROM persona_auto";
	$resultado = mysqli_query($con,$consulta);
}
	    ?>

        <table class = "tabla" >
			  	<thead>
						<th class = "col" >Nombre</th>
						<th class = "col">Apellido</th>
						<th class = "col">DNI</th>
						<th class = "col">Patente</th>
					</thead>
						<tbody>
						<?php while($row = $resultado->fetch_assoc()){    ?>
            	<tr>
						 		
								<td class = "fil"><?php  echo $row['nombre'] ?></td>
								<td class = "fil"><?php  echo $row['apellido'] ?></td>
								<td class = "fil"><?php  echo $row['dni'] ?></td>
								<td class = "fil"><?php  echo $row['patente'] ?></td>

								
   					<?php }?>
						</tbody>
        </table>
</body>
</html>



