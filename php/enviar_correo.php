<?php

if(isset($_POST["userName"])&& !empty($_POST["userName"])&& 
  isset($_POST["userEmail"])&& !empty($_POST["userEmail"])&&
  isset($_POST["userMsg"])&& !empty($_POST["userMsg"])){
    


    
    $nombre= $_POST["userName"];
    $email= $_POST["userEmail"];
    $comentario= $-POST["userMsg"];

   mail("kadelarr@hotmail.com", $mail, $nombre, $comentario);
    echo "correo enviado satisfactoriamente";
}

?>