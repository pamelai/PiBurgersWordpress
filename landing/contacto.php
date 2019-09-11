<?php
   require_once('config/config.php');
   define('URL', 'index.php#contac');

   foreach($_POST as $dato => $valor):
      $aDatosPost[$dato]=mysqli_real_escape_string($conexion, htmlentities($valor));

      if(!empty($dato)):
         $_SESSION['datos'][$dato]=$valor;

      endif;

   endforeach;

   $nombre=$aDatosPost['nombre'];
   $email=$aDatosPost['email'];
   $msj=$aDatosPost['msj'];

   if(isset($email) && empty($email)):
      $_SESSION['error']='email';
      header('Location:'.URL);
      die();

   elseif(isset($msj) && empty($msj)):
      $_SESSION['error']='msj';
      header('Location:'.URL);
      die();

   endif;

   $_SESSION['ok']='enviado';
   header ('Location:'.URL);
   
   unset($_SESSION['datos']);  