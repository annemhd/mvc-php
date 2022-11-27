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

    $table = $postModel->selectPost($_POST['id']);
    ?>
    <form method="POST" action="/update">
        <input type="hidden" name="id" value="<?= $table[0]->id ?>">
        <input type="text" name="title" value="<?= $table[0]->title ?>">
        <input type="text" name="content" value="<?= $table[0]->content ?>">
        <input type="submit" name="update" value="Mettre à jour">
    </form>
    <?php

    if (isset($_POST['update'])) {
        $req = 'title=:title, content=:title';
        $test = ['title' => $_POST['title'], 'content' => $_POST['content']];
        $postModel->updatePost($_POST['id'], $req, $test);
        echo 'mise a jour éffectuée';
    }

    ?>
</body>

</html>