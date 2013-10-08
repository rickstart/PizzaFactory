<?php
function check_email_address($email)
{
	if(preg_match("/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/", $email))
	{
		return true;
	} 
	else 
	{
		return false;
	}
}

function send($destino,$asunto,$cuerpo)
{
	
   	//para el envío en formato HTML
   	$headers = "MIME-Version: 1.0\r\n";
   	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
   	
   	//dirección del remitente
   	$headers .= "From: Pizza Factory <ricardo.centeno@pizzafactory.com.mx>\r\n";
   	
   	
   	//ruta del mensaje desde origen a destino
   	$headers .= "Return-path: ricardo.centeno@pizzafactory.com.mx\r\n";
   	
   	
   	//mando el correo... 
   	mail($destino,asunto,$cuerpo,$headers); 

   	//doy las gracias por el envío 
}
?>