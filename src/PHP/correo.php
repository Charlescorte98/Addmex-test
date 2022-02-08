<?php 
$nombre_usuario=$_POST['name'];
$email_usuario=$_POST['email'];
$tel_usuario=$_POST['celular'];
$consulta_usuario=$_POST['msg']; 
// Creo 3 variables que me toman lo que se envía por POST de cada valor
$destino="carloscorte1998@gmail.com";
 $asunto="ADDMEX";  
 $mensaje="Nombre: ".$nombre_usuario."\r\n";
 $mensaje.="Email: ".$email_usuario."\r\n";
 $mensaje.="Telefono: ".$tel_usuario."\r\n";
 $mensaje.="Consulta: ".$consulta_usuario."\r\n";

 $remitente="From: info.ADDMEX";

   mail($destino, $asunto, $mensaje, $remitente);   
   header("Location:contacto.php?i=ok");  
   ?>