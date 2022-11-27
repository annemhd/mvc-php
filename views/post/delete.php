<?php
$title = 'Supprimer un article';

require_once BASE_VIEW_PATH . 'header.php';
?>

<a href="/">Retour</a><br>

<?php

use Models\Post;

$postModel = new Post('posts');
if (isset($_POST['delete'])) {
    $table = $postModel->deletePost($_POST['id']);
}

?>

Post supprimé

<a href="/">Retour</a>

<?php
require_once BASE_VIEW_PATH . 'footer.php';
