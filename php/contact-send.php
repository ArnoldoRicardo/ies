<?php
extract($_POST);
if(isset($enviar))
{
	if($name==NULL || $subject==NULL || $message==NULL)
	{
		error("Hay campos vacios");
	}
	else
	{
		$mimail="contacto@iesfrosur.edu.mx";
		$headers = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "X-Priority: 3\n";
		$headers .= "X-MSMail-Priority: Normal\n";
		$headers .= "X-Mailer: php\n";
		$headers .= "From: \"".$name."\" <".$email.">\n";
		$asunto.="Mensaje desde www.frontera-comalapa.com";
		if(mail($mimail,$subject,$message,$headers)){
			echo "mensaje enviado";
		}else{
			echo "fallo!";
		}

	}

}
else {
	echo "mensaje no enviado";
}
?>