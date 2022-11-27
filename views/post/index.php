<?php
$title = 'Article';

require_once BASE_VIEW_PATH . 'header.php';
?>

<a href="/">Retour</a><br>

<?php

use Models\Comment;
use Models\Post;

$postModel = new Post('posts');
$tablePost = $postModel->selectPost($_POST['id']);

$commentModel = new Comment('comments');
$tableComment = $commentModel->selectComment($tablePost[0]->id);

echo $tablePost[0]->id . '</br>';
echo $tablePost[0]->title . '</br>';
echo $tablePost[0]->content . '</br>';
echo $tablePost[0]->created_at . '</br>';

?>

<?php foreach ($tableComment as $comment) : ?>
    <?= $comment->username ?></br>
    <?= $comment->content  ?></br>
    <?= $comment->created_at  ?></br>
<?php endforeach ?>

<form method="POST" action="/comment">
    <input type="hidden" name="id_post" value="<?= $tablePost[0]->id ?>">
    <input type="text" name="username">
    <textarea name="content"></textarea>
    <input type="submit" name="comment" value="Ajouter le commentaire">
</form>
<?php
require_once BASE_VIEW_PATH . 'footer.php';
