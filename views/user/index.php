<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <?php
    var_dump($_POST);
    ?>

    <form method="POST" action="/dashboard">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit" name="login" value="Connexion">
    </form>

</body>

</html>