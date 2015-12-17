<?php

$mail="kadelarr@hotmail.com";
$nombre =$_POST['userName'];
$email =$_POST['userEmail'];
$comentario =$_POST['userMsg'];
$message="
Nombre: ".$nombre."
Email: ".$email."
Comentario:".$comentario."
";
if(mail ($mail,"Nuevo Mensaje", $message))
    
  
    header ("Location: services.html");

?>