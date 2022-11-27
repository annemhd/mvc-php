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

    if (isset($_POST['insertB'])) {
        $req = 'title=:title, content=:title';
        $values = ['title' => $_POST['title'], 'content' => $_POST['content']];
        $postModel->insertPost($req, $values);
        echo 'Article ajouté </br>';
        echo '<a href="/">retour</a>';
    } else {

    ?>

        <form method="POST" action="">
            <input type="hidden" name="id">
            <input type="text" name="title">
            <input type="text" name="content">
            <input type="submit" name="insertB" value="Ajouter">
        </form>

    <?php

    }

    ?>
</body>

</html>