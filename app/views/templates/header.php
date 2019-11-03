<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">

        <!-- include summernote css/js -->
        <link href="<?= BASEURL; ?>/summernote/summernote-bs4.css" rel="stylesheet">

        <title>Just a simple blog</title>
        <style>
            #header {
                background: url("<?= BASEURL; ?>/img/header.jpg");
            }
        </style>
    </head>
    <body>
        <nav class="navbar bg-dark navbar-dark">
            <div class="container">
                <a href="<?= BASEURL; ?>" class="navbar-brand">Just a Simple blog</a>
                <?php if (isset($_SESSION['email'])): ?>
                    <p class="text-sm-left"><a href="#"><?= $_SESSION['email']; ?></a></p>
                    <a href="<?= BASEURL; ?>/login/runLogout" class="navbar-brand">Logout</a>
                <?php else: ?>
                    <a href="<?= BASEURL;?>/login/index" class="navbar-brand">Login</a>
                <?php endif; ?>

            </div>
        </nav>

        <section id="header" class="jumbotron text-center">
            <h1 class="display-3">Just a simple blog</h1>
            <p class="lead">I made this project to learn PHP and MVC pattern</p>
            <a href="#" class="btn btn-primary">About</a>
            <a href="#" class="btn btn-success">Contact</a>
        </section>

        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= BASEURL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/editor">Editor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>