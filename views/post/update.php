<?php
$title = 'Mettre à jour un article';

require_once BASE_VIEW_PATH . 'header.php';
?>

<a href="/">Retour</a><br>

<?php

use Models\Post;

$postModel = new Post('posts');

$table = $postModel->selectPost($_POST['id']);

if (isset($_POST['updateB'])) {
    $req = 'title=:title, content=:content';
    $values = ['title' => $_POST['title'], 'content' => $_POST['content']];
    $postModel->updatePost($_POST['id'], $req, $values);
    echo 'Màj </br>';
    echo '<a href="/">retour</a>';
} else {

?>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= $table[0]->id ?>">
        <input type="text" name="title" value="<?= $table[0]->title ?>">
        <input type="text" name="content" value="<?= $table[0]->content ?>">
        <input type="submit" name="updateB" value="Mettre à jour">
    </form>

<?php

}

require_once BASE_VIEW_PATH . 'footer.php';
?>