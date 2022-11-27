<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Ajouter un articles';

require_once BASE_VIEW_PATH . 'header.php';

use Models\Post;

$postModel = new Post('posts');

if (isset($_POST['insertB'])) {
    $req = 'title=:title, content=:content';
    $values = ['title' => $_POST['title'], 'content' => $_POST['content']];
    $postModel->insertPost($req, $values);
    echo '<p class="mb-4">L\'article a bien été ajouté </p>';
    echo '<a href="/" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded">retour</a>';
} else {

?>
    <a href="/" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded">Retour</a><br>

    <form method="POST" action="" class="mt-6">
        <input type="hidden" name="id">
        <label class="block text-gray-700 text-xl font-bold mb-2">
            Titre
        </label>
        <input type="text" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

        <label class="block text-gray-700 text-xl font-bold mb-2">
            Contenu
        </label>
        <textarea name="content" class="h-80 shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        <input type="submit" name="insertB" value="Ajouter" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-1 rounded">
    </form>

<?php

}

require_once BASE_VIEW_PATH . 'footer.php';
?>