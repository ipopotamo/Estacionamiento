<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['patente']) >= 1 && strlen($_POST['lug'])) {
	    $id    = trim($_POST['id']);
        $name  = trim($_POST['name']);
	    $ape   = trim($_POST['apellido']);
	    $dni   = trim($_POST['dni']);
	    $pat   = trim($_POST['patente']);
		$lug   = trim($_POST['lug']);
	    $consulta  = "INSERT INTO persona_auto(id_client,nombre, apellido,dni,patente) VALUES ('$id','$name','$ape','$dni','$pat')";
	    $cont      = "UPDATE pisos SET estado='ocupado' , id_cli= '$id' WHERE lugar ='$lug'  ";
	    $resultado = mysqli_query($con,$consulta);
        $result    = mysqli_query($con,$cont);
		
	    if ($resultado) {
	    	?>
	    	<h3 class="ok"> se agrego el cliente </h3>
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

