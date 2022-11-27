<?php
$title = 'Tout les articles';

require_once BASE_VIEW_PATH . 'header.php';
?>

<form method="POST" action="/insert">
    <input type="submit" name="insert" value="Ajouter un article" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded">
</form>

<?php
foreach ($posts as $post) : ?>
    <div class="mb-6 border border-slate-300 p-6">
        <h2 class="text-xl"><?= $post->title ?></h2>
        <p class="text-slate-500 mb-4">Crée le <?= date('d/m/Y', strtotime($post->created_at)) ?></p>
        <div class="flex gap-1">
            <form method="POST" action="/post">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <input type="submit" name="read" value="Voir" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-1 rounded">
            </form>
            <form method="POST" action="/update">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <input type="submit" name="update" value="modifier" class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 mb-1 rounded">
            </form>
            <form method="POST" action="/delete">
                <input type="hidden" name="id" value="<?= $post->id ?>">
                <input type="submit" name="delete" value="supprimer" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mb-1 rounded">
            </form>
        </div>
    </div>
<?php endforeach;

require_once BASE_VIEW_PATH . 'footer.php';
?>