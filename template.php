<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?php echo $title;?></title>
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <link href="/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/css/custom.css" rel="stylesheet" />

        <script src="/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="d-flex flex-column h-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/exercice1">exercice1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/exercice2">exercice2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/exercice3">exercice3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/exercice4">exercice4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/exercice5">exercice5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"><?php echo $title;?></h1>
                    <p class="lead fw-normal text-white-50 mb-0">Projet développement web</p>
                </div>
            </div>
        </header>
        <section id="content" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div>
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </section>
        <footer class="mt-auto py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Exercices PHP 2022-2023</p></div>
        </footer>
    </body>
</html>
