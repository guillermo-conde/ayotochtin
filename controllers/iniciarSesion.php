<?php    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require 'limpiarInputs.php';
        require '../models/MConsultas.php';
        require '../config/config.php'; 

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $usuario = limpiarTexto($usuario);

        $consulta = new Consultas();
        $acceso = $consulta->iniciarSesion($usuario, $password);


        if ($acceso) {
            session_start();
            $_SESSION['nombre'] = $usuario;
            if (isset($_SESSION['error'])) {
                unset($_SESSION['error']);
            }
            header ('location: ../panel');
        } else {
            session_start();
            $_SESSION['error'] = "<script>alert('Los datos no corresponden, intente nuevamente')</script>";
            header ('location: ../panel');
        }
        
    }
    
    
?>