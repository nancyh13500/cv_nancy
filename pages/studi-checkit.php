<?php
require_once __DIR__ . '/../templates/header.php';
?>

<!-- Hero Section -->
<header class="hero-section" style="min-height: 400px;">
    <div class="container">
        <h1 class="name display-4 fw-bold">Studi CheckIt</h1>
        <h3 class="lead">Gérer vos "To do list" efficacement</h3>
    </div>
</header>

<!-- Section présentation du projet -->
<section class="presentation py-5">
    <div class="container px-4 py-5">
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-md-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">À propos du projet</h1>
                <p class="pt-3">Studi CheckIt est une application de gestion de tâches (To-Do List) développée dans le cadre de ma formation de développeur web et web mobile.</p>
                <p class="pt-3">Cette application permet aux utilisateurs de créer, organiser et suivre leurs tâches quotidiennes de manière simple et intuitive.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
                    <a href="../index.php#projects" class="btn bg-dark text-white btn-lg px-4 me-md-2">
                        <i class="bi bi-arrow-left"></i> Retour aux projets
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/img/logo-checkit.png" alt="Logo Studi CheckIt" class="img-fluid d-block mx-auto logo-nh">
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
                    <i class="bi bi-filetype-js" style="font-size: 3rem;"></i>
                    <p class="mt-3 mb-0">JavaScript</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="p-4 bg-secondary rounded">
                    <i class="bi bi-database" style="font-size: 3rem;"></i>
                    <p class="mt-3 mb-0">Base de données</p>
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
                        <i class="bi bi-plus-circle" style="font-size: 2.5rem; color: #333;"></i>
                        <h5 class="card-title mt-3">Création de tâches</h5>
                        <p class="card-text">Ajoutez facilement de nouvelles tâches à votre liste avec une description détaillée.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-check2-square" style="font-size: 2.5rem; color: #333;"></i>
                        <h5 class="card-title mt-3">Gestion des tâches</h5>
                        <p class="card-text">Marquez vos tâches comme terminées, modifiez-les ou supprimez-les selon vos besoins.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-folder" style="font-size: 2.5rem; color: #333;"></i>
                        <h5 class="card-title mt-3">Organisation</h5>
                        <p class="card-text">Organisez vos tâches par catégories et suivez votre progression au quotidien.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>