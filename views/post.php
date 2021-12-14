<?php
    require 'models/MConsultas.php';
    $idPost = $seccion->extraerPost($_SERVER['REQUEST_URI']);

    $consulta = new Consultas();
    $post = $consulta->obtenerPost($idPost);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1><?php echo $post['titulo_post'];?></h1>
    <p><?php echo $post['contenido_post'];?></p>
</body>
</html>