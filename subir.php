<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['patente']) >= 1 ) {
	    $name = trim($_POST['name']);
	    $ape = trim($_POST['apellido']);
	    $dni = trim($_POST['dni']);
	    $pat = trim($_POST['patente']);
	    $consulta = "INSERT INTO persona_auto(nombre, apellido,dni,patente ) VALUES ('$name','$ape','$dni','$pat')";
	    $resultado = mysqli_query($con,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok"> XD </h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Por favor complete los campos!</h3>
           <?php
    }
}

?>