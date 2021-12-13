<?php
    require 'controllers/ObtenerSeccion.php';
    require 'config/config.php';

    

    if (isset($_COOKIE['ayotochtin_edad']) && $_COOKIE['ayotochtin_edad'] > 18) {
        $seccion = new ObtenerSeccion($_SERVER['REQUEST_URI']);

        if (!isset($seccion->data[2]) || $seccion->data[2] == 'index' || $seccion->data[2] == 'index.php') {
            $pagina = 'inicio';
        } else {
            $pagina = $seccion->validarPagina($seccion->data[2], paginas);
        }
        
        require('controllers/C'.$pagina.'.php');
    } else {
        // require 'views/edad.php';
    }
    

?>