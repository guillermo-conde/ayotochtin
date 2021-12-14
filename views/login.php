<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Inicio de sesión</h1>
    <form action="controllers/iniciarSesion.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario">
        <label for="password">Contraseña: </label>
        <input type="password" name="password">
        <input type="submit" value="Iniciar Sesión">
    </form>

    <?php if (isset($_SESSION['error']) && $_SESSION['error'] != ''): ?>
        <ul>
        <?php echo $_SESSION['error']; session_destroy() ?>
        </ul> 
    <?php endif ?>    
    <p>¿Olvidó su contraseña? Reestablezcala <a href="#">aquí</a></p>
</body>
</html>