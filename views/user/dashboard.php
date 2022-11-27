<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>

<body>
    <?php

    use Models\User;

    $userModel = new User('users');

    $table = $userModel->selectUser($_POST['email']);

    echo $table[0]->email . '</br>';

    ?>
</body>

</html>