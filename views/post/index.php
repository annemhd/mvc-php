<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les posts</title>
</head>

<body>
    <?php

    use Models\Post;

    foreach ($posts as $post) : ?>
        <?= $post->id ?>
        <?= $post->title ?>
        <?php
        $test = new Post('posts');
        $test->postById($post->id);
        ?>
    <?php endforeach ?>
</body>

</html>