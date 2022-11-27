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
    session_start();
    echo 'Session: ' . $_SESSION['test'] . '<br>';

    use Models\Post;

    $postModel = new Post('posts');

    if (isset($_POST['read'])) {

        $table = $postModel->selectPost($_POST['id']);
        echo $table[0]->id . '</br>';
        echo $table[0]->title . '</br>';
        echo $table[0]->content . '</br>';
        echo $table[0]->created_at . '</br>';
    }

    ?>
</body>

</html>