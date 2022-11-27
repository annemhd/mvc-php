<?php
$title = 'Article';

require_once BASE_VIEW_PATH . 'header.php';
?>

<a href="/" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded">Retour</a><br>

<?php

use Models\Comment;
use Models\Post;

$postModel = new Post('posts');
$tablePost = $postModel->selectPost($_POST['id']);

$commentModel = new Comment('comments');
$tableComment = $commentModel->selectComment($tablePost[0]->id);
?>
<div class="mt-6 mb-6">
    <h1 class="text-5xl mb-6"><?= $tablePost[0]->title ?></h1>
    <p class="mb-2"><?= $tablePost[0]->content ?></p>
    <p class="text-slate-500">Crée le <?= date('d/m/Y', strtotime($tablePost[0]->created_at)) ?></p>
</div>

<hr class="mb-6">


<h3 class="text-2xl mb-2 font-semibold">Commentaire(s)</h3>

<?php foreach ($tableComment as $comment) : ?>

    <div class="mb-6 border border-slate-300 p-3">
        <h4 class="text-lg font-medium"><?= $comment->username ?> <span class="text-slate-500 text-sm font-normal">le <?= date('d/m/Y', strtotime($comment->created_at))  ?></span></h4>
        <p><?= $comment->content  ?></p>

    </div>

<?php endforeach ?>
<h3 class="text-2xl mb-2 font-semibold">Ajouter un commentaire</h3>
<form method="POST" action="/comment">
    <input type="hidden" name="id_post" value="<?= $tablePost[0]->id ?>">
    <input type="text" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Pseudonyme">
    <textarea name="content" class="h-40 shadow appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    <input type="submit" name="comment" value="Ajouter le commentaire" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-1 rounded">
</form>
<?php
require_once BASE_VIEW_PATH . 'footer.php';
