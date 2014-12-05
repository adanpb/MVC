<?php
$titulo = 'Bienvenidos a Nosotros';
$contenido = '......';//Todas las conexiones a la BD deben estar en los controladores

$variables = array('titulo'=>$titulo,'contenido'=>$contenido);

view('nosotros',$variables);

?>