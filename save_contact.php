<?php
include"conexion.php";
include"functions.php";
$name=$_POST["txtname"];
$email=$_POST["txtemail"];
$comment=$_POST["txtcomment"];
$subject=$_POST["txtsubject"];



if(check_email_address($email)&& $name!='')
{

	$sql = "INSERT INTO `pizzafac_pizzafactorydb`.`table_contact` (`name`, `email`, `comments`) VALUES ('".$name."','".$email."','".$comment."');";
	//echo $sql;
	//echo $conexion;
	//echo $name,"<br>" ,$email,"<br>" ,$comment; 
	//	$result=mysql_query("INSERT INTO 'pizzafactorydb'.'table_contact'('name', 'email', 'comments') VALUES ('$name','$email','$comment'); ",$conexion);
		$result=mysql_query($sql,$conexion);
	//	echo "<br>result= ",$result;
	//	include "close_conexion.php";
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
	include "close_conexion.php";
	$body = "Contacto\n";
	$body .= "Nombre: " . $name. "\n";
	$body .= "Email: " . $email . "\n";
	$body .= "Comentarios: " . $comment. "\n";
	
	//mando el correo...
	if($subject!='')
	{
		send("ricardo.celj@gmail.com",$subject,$body);
	}
	else 
	{
		send("ricardo.celj@gmail.com","Contacto Pizza Factory",$body);
	}
	//doy las gracias por el envío
	header
	
}
else
{
	echo "Email Invalido";
}	




?>