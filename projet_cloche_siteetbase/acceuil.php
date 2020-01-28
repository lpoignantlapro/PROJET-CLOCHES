<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Accueil du site Cloche</title>
    <!-- css-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- contenu du site-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="acceuil.php">ACCEUIL</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="cloche.php">Faire sonner une cloche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="melodie.php">Mélodies</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Déconnexion</button>
                </form>
            </div>
        </nav>

        <!-- <?php
           // session_start();
           // session_destroy();
          //  header('location: index.php');
          //  exit;
        ?> -->


</body>
</html>