<?php
    $usuario = new Usuario();

    $titulo = 'Bienvenidos al MyUsuario';
    $contenido = 'Contenido de la variable...';

    $variables = array('titulo'=>$titulo,
    'contenido'=>$contenido,
    'nombre'=>$usuario->setUsuario());

    view('myusuario', $variables);
?>