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
    // session_start();
    // echo 'Session: ' . $_SESSION['test'] . '<br>';

    use Models\User;

    $userModel = new User('users');

    var_dump($userModel->selectUser('jane'));

    // var_dump($_POST['email']);

    // var_dump($userModel->selectUser('janedoe@gmail.com'));

    ?>
</body>

</html>