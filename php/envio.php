<?php

$mail = "kadelarr@hotmail.com";

$nombre= $_POST ['userName'];
$email= $_POST ['userEmail'];
$comentario= $POST ['userMsg'];

$Thank = "contact2.html";

$message = "
Nombre: ".$nombre."
Email: ".$email."
Comentario: ".$comentario."
";

if(mail($mail, "Nuevo Mensaje", $message))
    
Header ("location: $Thank");
echo 'mensaje enviado correctamente';

?>