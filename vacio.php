<!DOCTYPE html>
<html lang="en">
<head>
	<link rel = "stylesheet" href = "CSS/css_tabla.css">

</head>
<body>
<?php
$inc = include("conexion.php");

if ($inc) {
	$consulta = "SELECT pisos.lugar,pisos.piso FROM pisos INNER JOIN estado ON estado.id_piso = pisos.lugar WHERE estado.estado ='libre' ";
	$resultado = mysqli_query($con,$consulta);
}
   if($resultado)
   {
     ?><h1>HAY LUGARES VACIOS</h1> <?php
      }
   else
   {
?><h1>NO HAY LUGARES VACIOS</h1><?php
   }
	    ?>

        <table class = "tabla" >
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
