<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <link rel ="icon" type="image/jpg" href ="public/img/writter.jpg"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand text-info" href="../public/index.php">Jean forteroche</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
              
  <a class="nav-link text-light bg-dark" href="../public/index.php"> <i class="fas fa-home"> </i> Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light bg-dark" href="../public/index.php?route=articles"><i class="fas fa-newspaper"></i> Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light bg-dark" href="../public/index.php?route=contact"><i class="far fa-id-card"></i> Contact</a>
                </li>
                <?php if ($this->session->get('username')) { ?>
                    <li class="nav-item">
                          <a class="nav-link text-light bg-dark" href="../public/index.php?route=administration"><i class="fas fa-tools"></i> Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light bg-dark" href="../public/index.php?route=logout"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
                    </li>
                <?php } else{ ?>
                <li class="nav-item">
                    <a class="nav-link text-light bg-dark" href="../public/index.php?route=register"><i class="fas fa-sign"></i> Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light bg-dark" href ="../public/index.php?route=login"><i class="fas fa-blog"></i> Connexion</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div id="content">
    <?= $content ?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>