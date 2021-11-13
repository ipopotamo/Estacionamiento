<?php
$inc = include("conetest.php");
if ($inc) {
	$consulta = "SELECT * FROM kkk";
	$resultado = mysqli_query($con,$consulta);
}
	    ?>

        <table>
			  	<thead>
						<th>ESTADO</th>
						<th>PISO</th>
						<th>PATENTE</th>
					</thead>
							<tbody>
						<?php while($row = $resultado->fetch_assoc()){    ?>
            	<tr>
						 		<td><?php  echo $row['estado']  ?></td>
								<td><?php  echo $row['patente'] ?></td>
								<td><?php  echo $row['piso']    ?></td>
   					<?php }?>
							</tbody>
        </table>
