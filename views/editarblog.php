<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@4.0.7/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
    <title>Blog</title>
</head>
<body>
    <h1>Nuevo post</h1>
    <form action="insertar.php" method="post">
        <label for="titulo">Título del post</label>
        <input type="text" name="titulo">
        <label for="extracto">Extracto el post</label>
        <input type="text" name="extracto">
        <label for="contenido">Contenido del post</label>
        <textarea name="contenido" id="example"></textarea>
        <input type="submit">
    </form>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@4.0.7/js/froala_editor.pkgd.min.js'></script>

    <script>
        var editor = new FroalaEditor('#example');
    </script>
</body>
</html>