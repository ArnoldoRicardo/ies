<?php

if($_POST['submit']){
	$name = $_POST['name'];
	$mensaje = $_POST['message'];
	$remitente = $_POST['email'];
	$destinatario = "anyback@gmail.com";
	$asunto = $_POST['subject']; 
	$cuerpo = '
	<html> 
	<head> 
	<title>mensaje enviado desde iesfrosur.edu.mx</title> 
	</head> 
	<body>
	'.$mensaje.'
	</body> 
	</html> 
	'; 

	//Envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//Dirección del remitente 
	$headers .= "From: ".$name." <".$remitente.">\r\n";

	//Dirección de respuesta (Puede ser una diferente a la de pepito@mydomain.com)
	$headers .= "Reply-To: ".$remitente."\r\n"; 

	//Ruta del mensaje desde origen a destino 
	$headers .= "Return-path: holahola@mydomain.com\r\n"; 

	//direcciones que recibián copia 
	//$headers .= "Cc: maria@mydomain.com\r\n"; 

	//Direcciones que recibirán copia oculta 
	//$headers .= "Bcc: pepe@pepe.com, juan@juan.com\r\n"; 

	mail($destinatario,$asunto,$cuerpo,$headers);

}
else{
	?><script type="text/javascript">

	console.log("mesaje no eviado");
	
	</script><?php
}
?>