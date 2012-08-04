<? 
$destinatario = "eventosnellysilva@hotmail.com"; 
$asunto = "Formulario Contacto"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Formulario Contacto</title> 
</head> 
<body> 
<h1>Cuerpo de Mensaje</h1><br/><br/>
<p>De: <b>' . $_POST['nombre'] .'</b></p>
<p>Mail: <b>' . $_POST['mail'] .'</b></p>
<p>Fono: <b>' . $_POST['fono'] .'</b></p>
<p>Comentario:</p>
<p>' . $_POST['comentario'] . '</p>
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8\r\n"; 

//dirección del remitente 
$headers .= "From: " . $_POST['nombre'] . "<" . $_POST['mail'] . ">\r\n"; 

if(mail($destinatario,$asunto,$cuerpo,$headers)){
	header("Location: http://www.nellysilvaeventos.cl/?F=ok");
}else{
	header("Location: http://www.nellysilvaeventos.cl/?F=error");
}
?>