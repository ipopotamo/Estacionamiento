<?php
include("conexion.php");
if (isset($_POST['register']))
   {
    if (strlen($_POST['name_eli']) >= 1){
      $name = trim($_POST['name_eli']);
      $consulta  ="DELETE FROM persona_auto WHERE id_client = '$name' ";
	    $cont      ="UPDATE pisos SET id_cli = 0 WHERE id_cli = '$name'";
  	  $sec       ="SELECT lugar FROM pisos WHERE id_cli = 0";
	  $resultado = mysqli_query($con,$consulta);
	  $result    = mysqli_query($con,$cont);
	  $re        = mysqli_query($con,$sec);
	    if ($resultado)
	    	?>
	    	<h3 class="ok"> Se borro el cliente y los espacios vacios son: </h3>
			<?php	while($row = $re->fetch_assoc()){

		    echo $row['lugar']."-";
		 }



        }


    }
       ?>
