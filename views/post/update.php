<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    use Models\Post;

    $postModel = new Post('posts');

    foreach ($posts as $post) : ?>
        <form method="POST" action="/update">
            <input type="text" name="title" value="<?= $post->title ?>">
            <input type="text" name="content" value="<?= $post->content ?>">
            <input type="submit" name="update" value="Mettre à jour">
        </form>
    <?php endforeach;

    $test = 'title="' . $_POST['title'] . '", content="' . $_POST['content'] . '"';
    $test = array($_POST['title']);
    $postModel->updatePost($_POST['id'], $test);
    var_dump($_POST['id']);

    ?>
</body>

</html>