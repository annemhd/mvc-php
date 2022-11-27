<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>

<body>
    <?php

    use Models\Post;
    use Models\User;

    if ($_POST['password'] !== $tableUser[0]->password) {
        echo 'Mauvais identifiants </br>';
        echo '<a href="/user">retour</a>';
    } else {

        $userModel = new User('users');
        $tableUser = $userModel->selectUser($_POST['email']);

        $postModel = new Post('posts');
        $tablePosts = $postModel->selectUserPosts($tableUser[0]->id);

    ?>

        <form method="POST" action="/post">
            <input type="submit" name="insert" value="Ajouter un article">
        </form>
        <?php

        foreach ($tablePosts as $post) : ?>
            <?= $post->title ?></br>
            <?= $post->created_at ?>
            <form method="POST" action="/post">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <input type="submit" name="read" value="Voir">
            </form>
            <form method="POST" action="/delete">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <input type="submit" name="delete" value="supprimer">
            </form>
            <form method="POST" action="/update">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <input type="submit" name="update" value="modifier">
            </form>
    <?php endforeach;
    }
    ?>
</body>

</html>