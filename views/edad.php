
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/assets/css/estiloEdad.css">
    <title>Verificación de edad</title>
</head>
<body>
    <h1>Por favor ingresa tu fecha de nacimiento</h1>
    <form action="" method="post">
        <label for="diaNacimiento">Día de nacimiento</label>
        <input type="number" name="diaNacimiento" min="1" max="31" placeholder="dd" required>
        <label for="mesNacimiento">Mes de nacimiento</label>
        <input type="number" name="mesNacimiento" min="1" max="12" placeholder="mm" required>
        <label for="anioNacimiento">Año de nacimiento</label>
        <input type="number" name="anioNacimiento" min="1900" max="<?php echo date('Y')?>" placeholder="aaaa" required>
        <input type="submit" value="Comprobar">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dia = $_POST['diaNacimiento'];
            $mes = $_POST['mesNacimiento'];
            $anio = $_POST['anioNacimiento'];

            function agregarCero($fecha){
                if (strlen($fecha)<2 && $fecha<10) {
                    $fecha = "0".$fecha;
                }
                return $fecha;
            }

            $dia = agregarCero($dia);
            $mes = agregarCero($mes);
            $anio = agregarCero($anio);

            $fechaNacimiento = new DateTime($anio.'-'.$mes.'-'.$dia);
            $fechaActual  =  new DateTime(date("Y-m-d"));

            $diferencia = $fechaNacimiento->diff($fechaActual);

            if ($diferencia->y >= 18) {
                setcookie('ayotochtin_edad', $diferencia->y, time() + 60 * 60 * 24);
                header('location: ');
            } else {
                echo '<span>Aún eres menor de edad</span>';
            }
            
        }

    ?>
    

</body>
</html>