<?php
require_once __DIR__ . '/../templates/header.php';
?>

<!-- Hero Section -->
<header class="hero-section" style="min-height: 400px;">
    <div class="container">
        <h1 class="name display-4 fw-bold">WebAgency</h1>
        <h3 class="lead">L'agence de tous vos projets et en tout liberté</h3>
    </div>
</header>

<!-- Section présentation du projet -->
<section class="presentation py-5">
    <div class="container px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-md-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">À propos du projet</h1>
                <p class="pt-3">WebAgency est un projet de site vitrine pour une agence web. Ce projet a été réalisé dans le cadre de ma formation de développeur web et web mobile.</p>
                <p class="pt-3">Le site présente les services de l'agence, son équipe et permet aux clients de prendre contact facilement.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
                    <a href="../index.php#projects" class="btn bg-dark text-white btn-lg px-4 me-md-2">
                        <i class="bi bi-arrow-left"></i> Retour aux projets
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <a href="https://webagency.sites-webnex.fr/" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo.png" alt="Logo WebAgency" class="img-fluid d-block mx-auto logo-nh">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section technologies utilisées -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center mb-5">Technologies utilisées</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-3 col-sm-6 text-center">
                <div class="p-4 bg-secondary rounded">
                    <i class="bi bi-filetype-html" style="font-size: 3rem;"></i>
                    <p class="mt-3 mb-0">HTML5</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="p-4 bg-secondary rounded">
                    <i class="bi bi-filetype-css" style="font-size: 3rem;"></i>
                    <p class="mt-3 mb-0">CSS3</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="p-4 bg-secondary rounded">
                    <i class="bi bi-code-slash" style="font-size: 3rem;"></i>
                    <p class="mt-3 mb-0">Responsive Design</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section fonctionnalités -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-5">Fonctionnalités</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-layout-text-window-reverse" style="font-size: 2.5rem; color: #333;"></i>
                        <h5 class="card-title mt-3">Design moderne</h5>
                        <p class="card-text">Interface utilisateur moderne et intuitive avec un design soigné.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-phone" style="font-size: 2.5rem; color: #333;"></i>
                        <h5 class="card-title mt-3">Responsive</h5>
                        <p class="card-text">Site adaptatif pour tous les types d'écrans (mobile, tablette, desktop).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-envelope-paper" style="font-size: 2.5rem; color: #333;"></i>
                        <h5 class="card-title mt-3">Formulaire de contact</h5>
                        <p class="card-text">Formulaire de contact pour permettre aux clients de prendre rendez-vous.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>