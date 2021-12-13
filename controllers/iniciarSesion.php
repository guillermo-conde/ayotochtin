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

        if ($acceso) {
            session_start();
            $_SESSION['nombre'] = $usuario;
            header('location: ../panel');
        } else {
            header('location: ../panel');
        }
        
    } else {
        $acceso = false;
    }
    
    
?>