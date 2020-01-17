<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/styles.css">

    <title>Shareboard</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <span class="navbar-brand">ShareBoard</span>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= ROOT_URL; ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= ROOT_URL; ?>shares">Shares</a>
        </li>
    </ul>


    <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= ROOT_URL; ?>">Welcome <?= $_SESSION['user_data']['name'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= ROOT_URL; ?>users/logout">Logout</a>
            </li>

        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= ROOT_URL; ?>users/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= ROOT_URL; ?>users/register">Register</a>
            </li>

        <?php endif; ?>
    </ul>
</nav>

<div class="container py-3">

    <div class="row">
        <div class="col-10 mx-auto">
            <?php Messages::display() ?>
            <?php require($view) ?>
        </div>
    </div>

</div>

<footer>

</footer>

</body>
</html>