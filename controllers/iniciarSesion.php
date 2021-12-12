<?php

    require 'limpiarInputs.php';
    require '../models/Consultas.php';
    require '../config/config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $usuario = limpiarTexto($usuario);

        $consulta = new Consultas();
        $acceso = $consulta->iniciarSesion($usuario, $password);
    } else {
        $acceso = false;
    }
    
    
?>