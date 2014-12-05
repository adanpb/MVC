<?php
    $titulo = 'Bienvenidos al Home';
$contenido = '......';//Todas las conexiones a la BD deben estar en los controladores

$variables = array('titulo'=>$titulo,'contenido'=>$contenido);

view('home',$variables);
?>