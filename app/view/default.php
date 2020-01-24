<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Actu - Olympique de Marseille</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background: #0F2439">
            <!-- <a class="navbar-brand" href="index.php?page='home'"> -->
                <a class="navbar-brand" href="./">
                <!-- <span class="navbar-brand mb-0 h1">OM Actu</span> -->
                <span class="navbar-brand mb-0 h1"></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Actualité <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Connexion</a>
                </li> -->
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #0097D7;"></nav>
</header>
<main>
        <?= $content ?>
    </main>
    <footer>
        <div class="d-flex justify-content-center align-items-center">
            <p class="mt-4 mb-4 h6 text-center" style="color: #0F2439">IIM 2020 - Quentin Bernigaud</p>
        </div>
    </footer>
</body>

</html>