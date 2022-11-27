<?php
$title = 'Tout les articles';

require_once BASE_VIEW_PATH . 'header.php';
?>

<form method="POST" action="/insert">
    <input type="submit" name="insert" value="Ajouter un article">
</form>
<?php

foreach ($posts as $post) : ?>
    <?= $post->title ?></br>
    <?= $post->created_at ?>
    <form method="POST" action="/post">
        <input type="hidden" name="id" value="<?= $post->id ?>">
        <input type="submit" name="read" value="Voir">
    </form>
    <form method="POST" action="/delete">
        <input type="hidden" name="id" value="<?= $post->id ?>">
        <input type="submit" name="delete" value="supprimer">
    </form>
    <form method="POST" action="/update">
        <input type="hidden" name="id" value="<?= $post->id ?>">
        <input type="submit" name="update" value="modifier">
    </form>
<?php endforeach;

require_once BASE_VIEW_PATH . 'footer.php';
?>