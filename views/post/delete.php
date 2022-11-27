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
    if (isset($_POST['delete'])) {
        $table = $postModel->deletePost($_POST['id']);
    }

    ?>

    Post supprimé

    <a href="/">Retour</a>
</body>

</html>