<?php 
    session_start();
    $error = false;
    if (isset($_SESSION['nombre'])) {
        require 'views/panel.php';
    } else {
        require 'CLogin.php';
    }
    
?>