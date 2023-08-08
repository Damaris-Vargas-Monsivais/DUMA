<?php 
$nombre=$_POST['nombre'];
$mensaje=$_POST['mensaje'];

mail('dm249833@gmail.com','titulo',$mensaje.' de '.$nombre);
 echo 'ok';
?>