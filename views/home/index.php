<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <?php
    foreach ($posts as $post) : ?>
        <?= $post->title ?></br>
        <?= $post->created_at ?>
        <form method="POST" action="/post">
            <input type="hidden" name="id" value="<?= $post->id ?>">
            <input type="submit" value="Voir">
        </form>
        <?php echo $_POST['submit'] ?>
    <?php endforeach ?>
</body>

</html>