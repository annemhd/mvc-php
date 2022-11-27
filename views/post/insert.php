<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Ajouter un articles';

require_once BASE_VIEW_PATH . 'header.php';
?>

<a href="/">Retour</a><br>

<?php

use Models\Post;

$postModel = new Post('posts');

if (isset($_POST['insertB'])) {
    $req = 'title=:title, content=:content';
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

require_once BASE_VIEW_PATH . 'footer.php';
?>