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

    $postModel = new Post('posts');
    $table = $postModel->postById($_POST['id']);
    echo $table[0]->id . '</br>';
    echo $table[0]->title . '</br>';
    echo $table[0]->content . '</br>';
    echo $table[0]->created_at . '</br>';

    ?>
</body>

</html>