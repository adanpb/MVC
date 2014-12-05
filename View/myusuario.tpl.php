<?php
    $usuario02 = new Usuario();

?>
<html>
    <head></head>
    <body>
        <h1><?=$titulo; ?></h1>
        <p><?=$contenido; ?></p>
        <p><?=$nombre; ?></p>
        <p><?php
                $usuario02->setUsuario();
                echo"<br>";
                $usuario02->getUsuario();
                echo"<br>";
                $usuario02->consultaGeneral();
            ?></p>
    </body>
</html>