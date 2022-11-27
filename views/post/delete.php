<?php
$title = 'Supprimer un article';

require_once BASE_VIEW_PATH . 'header.php';

use Models\Post;

$postModel = new Post('posts');
if (isset($_POST['delete'])) {
    $table = $postModel->deletePost($_POST['id']);
    echo '<p class="mb-4">L\'article a bien été supprimé </p>';
    echo '<a href="/" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded">retour</a>';
}

require_once BASE_VIEW_PATH . 'footer.php';
