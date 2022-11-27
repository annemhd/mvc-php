<?php
$title = 'Commentaire ajouté';

require_once BASE_VIEW_PATH . 'header.php';
?>

<a href="/">Retour</a><br>

<?php

use Models\Comment;

$commentModel = new Comment('comments');

$req = 'id_post=:id_post,username=:username, content=:content';
$values = ['id_post' => $_POST['id_post'], 'username' => $_POST['username'], 'content' => $_POST['content']];
$commentModel->insertComment($req, $values);
echo 'commentaire ajouté </br>';
echo '<a href="/">retour</a>';

require_once BASE_VIEW_PATH . 'footer.php';
?>