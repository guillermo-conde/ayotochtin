<?php
    require 'controllers/obtenerSeccion.php';
    require 'config/config.php';

    

    if (isset($_COOKIE['ayotochtin_edad'])) {
        $seccion = new ObtenerSeccion($_SERVER['REQUEST_URI'], paginas);
        require 'views/'.$seccion->data.'.php';
    } else {
        require 'views/edad.php';
    }
    

?>