<?php
fuction conecta(){
   $dsn = 'mysql:host=myhost;dbname=ABD_4651';
   $usuario = 'system'
   $contraseña = 'ricardo21'
   
   try{
       $gbd = new PDO($dsn,$usuario, $contraseña);

   }catch (PDOException $e){
       echo 'Fallo la conexion: ' . $e->getMessage();
   }
   
return $gbd;
}
?>