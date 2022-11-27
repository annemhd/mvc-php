<?php
$title = 'Commentaire ajouté';

require_once BASE_VIEW_PATH . 'header.php';

use Models\Comment;

$commentModel = new Comment('comments');

$req = 'id_post=:id_post,username=:username, content=:content';
$values = ['id_post' => $_POST['id_post'], 'username' => $_POST['username'], 'content' => $_POST['content']];
$commentModel->insertComment($req, $values);
echo '<p class="mb-4">Le commentaire a bien été ajouté </p>';
echo '<a href="/" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded">retour</a>';

require_once BASE_VIEW_PATH . 'footer.php';
