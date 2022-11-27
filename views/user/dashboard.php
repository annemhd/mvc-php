<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les posts</title>
</head>

<body>
    <?php
    var_dump($_POST['email']);
    ?>
    <?php
    session_start();
    echo 'Session: ' . $_SESSION['test'] . '<br>';

    use Models\User;

    $userModel = new User('users');

    if (isset($_POST['login'])) {

        $table = $userModel->selectUser($_POST['email']);
        echo $table[0]->id . '</br>';
        echo $table[0]->email . '</br>';
        echo $table[0]->first_name . '</br>';
    }

    ?>
</body>

</html>