<!DOCTYPE html>
<html lang="en">
<head>
	
	<link rel = "stylesheet" href = "CSS/css_tabla.css">

</head>
<body>
<?php
$inc = include("conexion.php");

if ($inc) {
	$consulta = "SELECT lugar , piso FROM pisos WHERE id_cli = 0 ORDER BY lugar";
	$resultado = mysqli_query($con,$consulta);
}



     ?>
		 <table class = "tabla2" >
			 <thead>

				 <th class = "col">Lugar</th>
				 <th class = "col">Piso</th>

			 </thead>
				 <tbody>
				 <?php while($row = $resultado->fetch_assoc()){    ?>
					 <tr>
						<td class = "fil"><?php  echo $row['lugar'] ?></td>
						 <td class = "fil"><?php  echo $row['piso'] ?></td>
				 <?php }?>
				 </tbody>
		 </table>



</body>
</html>
