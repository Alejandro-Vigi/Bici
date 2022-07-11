<?php

    include("../Conexion/conexion.php");
	//Llamada al input del formulario

	if(isset($_POST['enviarphp'])){
	   if(strlen($_POST['nombresphp']) >= 1 &&
			strlen($_POST['correophp']) >= 1 &&
			strlen($_POST['mensajephp']) >= 1)
		{
				$names = trim($_POST["nombresphp"]);
				$email = trim($_POST["correophp"]);
				$message = trim($_POST["mensajephp"]);
				$consulta = "INSERT INTO CONTACTO(nombres, correo, mensaje) VALUES ('$names','$email','$message')";
				$resultado = mysqli_query($conexion,$consulta);
				if ($resultado) {
					?> 
						<section class="validacion">
						<h3>¡Tu mensaje se ha enviado correctamente!</h3>
						</section>
				   <?php
				} else {
					?> 
						<section class="validacion-error">
						<h3 class="bad">¡Ups ha ocurrido un error!</h3>
						</section>
				   <?php
				}
			}   else {
					?> 
						<section class="validacion-error">
						<h3 class="bad">¡Por favor complete los campos!</h3>
						</section>  
				   <?php
			}
	}
?>