<?php
include("conexion.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['name_eli']) >= 1){
      $name = trim($_POST['name_eli']);
      $consulta  ="DELETE FROM persona_auto WHERE id_client = '$name' ";
	    $resultado = mysqli_query($con,$consulta);
	    if ($resultado) 
	    	?>
	    	<h3 class="ok"> Se borro el cliente </h3>
       <?php

     }
   }
       ?>
