<?php

    session_start();

    if (!isset($_SESSION['nombre'])) {
        require 'login.php';
    }
    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administración</title>
</head>
<body>
    
</body>
</html>