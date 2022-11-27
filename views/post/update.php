<?php
$title = 'Mettre à jour un article';

require_once BASE_VIEW_PATH . 'header.php';
?>


<?php

use Models\Post;

$postModel = new Post('posts');

$table = $postModel->selectPost($_POST['id']);

if (isset($_POST['updateB'])) {
    $req = 'title=:title, content=:content';
    $values = ['title' => $_POST['title'], 'content' => $_POST['content']];
    $postModel->updatePost($_POST['id'], $req, $values);
    echo '<p class="mb-4">L\'article a bien été mis à jour</p>';
    echo '<a href="/" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded">retour</a>';
} else {
 
?>

    <a href="/" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded">Retour</a><br>


    <form method="POST" action="" class="mt-6">
        <input type="hidden" name="id" value="<?= $table[0]->id ?>">

        <label class="block text-gray-700 text-xl font-bold mb-2">
            Titre
        </label>
        <input type="text" name="title" value="<?= $table[0]->title ?>" class="shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

        <label class="block text-gray-700 text-xl font-bold mb-2">
            Contenu
        </label>
        <textarea type="text" name="content" class="h-80 shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><?= $table[0]->content ?></textarea>
        <input type="submit" name="updateB" value="Mettre à jour" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-1 rounded">
    </form>

<?php

}

require_once BASE_VIEW_PATH . 'footer.php';
?>