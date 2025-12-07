<?php
require_once __DIR__ . '/templates/header.php';
?>


<!-- Hero Section -->
<header id="header" class="hero-section">
  <div class="container">
    <h1 class="name display-4 fw-bold">Nancy HANOYAN</h1>
    <h3 class="lead">Développeur web et web mobile full stack</h3>
    <a href="#projects" class="btn btn-projects btn-light mt-4">Découvrir mes projets</a>
    <div class="cv mt-4">
      <a href="cv/cv nancy.pdf" class="btn btn-cv btn-light" target="_blank">Télécharger mon CV</a>
    </div>

  </div>
</header>

<!-- Section presentation -->
<section class="presentation" id="presentation">
  <div class="container px-4 py-5">
    <div class="row flex-lg-row align-items-start g-5 py-5">
      <div class="col-md-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">A propos de moi</h1>
        <p class="pt-5">En reconversion professionnelle de développeur web et web mobile, vous trouverez les projets que j'ai fait durant cette formation.
          Projets auxquels j'ai appris ce métier passionnant et complet. Je reste à votre disposition pour un éventuel projet à réaliser pour vous.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
          <a href="/cv/cv nancy.pdf" type="button" class="btn bg-dark text-white btn-lg px-4 me-md-2" target="_blank">Télécharger mon CV</a>
        </div>
      </div>
      <div class="col-md-6">
        <img src="assets/img/logo nh.jpg" alt="logo" class="img-fluid d-block mx-auto logo-nh">
      </div>
    </div>
  </div>

</section>

<!-- Projets -->
<section id="projects" class="projects py-5 bg-dark text-white">
  <div class="projects container">
    <h2 class="text-center mb-5">Mes projets</h2>
    <div class="row g-4 justify-content-center ms-1 me-1">
      <div class="col-md-4">
        <a href="pages/webagency.php" class="text-decoration-none">
          <div class="card h-100 text-center">
            <img src="assets/img/logo.png" class="card-img-top mx-auto mt-3" alt="WebAgency">
            <div class="card-body">
              <p class="card-text">L'agence de tous vos projets et en tout liberté.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="pages/studi-checkit.php" class="text-decoration-none">
          <div class="card h-100 text-center">
            <img src="assets/img/logo-checkit.png" class="card-img-top mx-auto mt-3" alt="Checkit">
            <div class="card-body">
              <p class="card-text">Gérer vos "To do list"</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Compétences -->
<section id="skills" class="skills py-5 bg-white">
  <div class="container">
    <h2 class="text-center mb-5">Mes compétences</h2>
    <div class="skills-carousel-container">
      <div class="d-flex align-items-center justify-content-center w-100">
        <button id="skills-prev" class="skills-carousel-btn bg-dark" aria-label="Précédent">&lt;</button>
        <div class="skills-carousel"></div>
        <button id="skills-next" class="skills-carousel-btn bg-dark" aria-label="Suivant">&gt;</button>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="contact py-5 bg-dark text-white">
  <div class="container">
    <h2 class="text-center">Contactez-moi</h2>
    <p class="text-center">Envie de collaborer ? Envoyez-moi un message avec les détails de votre projet et je vous
      recontacterai.</p>
    <div class="row justify-content-center mt-4">
      <div class="col-md-4">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Votre email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" id="phone" placeholder="Votre téléphone">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Votre message" required></textarea>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-light mt-3">Envoyer le message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/templates/footer.php';
?>