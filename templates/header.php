<?php
// Calcul du chemin de base relatif
$basePath = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
$styleVersion = filemtime(__DIR__ . '/../assets/css/style.css');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nancy HANOYAN - Développeur web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/style.css?v=<?php echo $styleVersion; ?>">
    <link rel="icon" type="image/png" href="<?php echo $basePath; ?>images/favicon.ico" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
        <div class="container">
            <a class="navbar-brand d-flex ms-3" href="<?php echo $basePath; ?>index.php">
                <img src="<?php echo $basePath; ?>assets/img/logo nh bg white.jpg" alt="Logo NH" class="logo-navbar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?php echo $basePath; ?>index.php#header">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $basePath; ?>index.php#presentation">Qui suis-je ?</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $basePath; ?>index.php#projects">Mes projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $basePath; ?>index.php#skills">Mes compétences</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $basePath; ?>index.php#contact">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>

