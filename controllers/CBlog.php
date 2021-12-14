<?php 
    require 'models/MConsultas.php';

    $consulta = new Consultas();
    $posts = $consulta->obtenerPosts();

    require 'views/blog.php';

?>