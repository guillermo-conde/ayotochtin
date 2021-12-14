<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <?php foreach ($posts as $post): ?>
        <h2> <?php echo $post['id_post'].'._ '.'<a href="/blog/post/'.$post['id_post'].'">'.$post['titulo_post'].'</a>';?></h2>
        <p> <?php echo $post['extracto_post']?></p><br>
    <?php endforeach; ?>
</body>
</html>