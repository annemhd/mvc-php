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
    use Source\Session;

    $session = new Session();
    echo $session->getAttribute('email');

    $postModel = new Post('posts');

    if (isset($_POST['read'])) {

        $table = $postModel->selectPost($_POST['id']);
        echo $table[0]->id . '</br>';
        echo $table[0]->title . '</br>';
        echo $table[0]->content . '</br>';
        echo $table[0]->created_at . '</br>';
    }

    ?>
    <a href="/">Retour</a>
</body>

</html>