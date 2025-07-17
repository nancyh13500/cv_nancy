<?php
require_once __DIR__ . '/header.php';
?>

<!-- Hero Section -->
<header class="hero-section">
  <div class="container">
    <h1 class="name display-4 fw-bold">Nancy HANOYAN</h1>
    <p class="lead">Développeur web et web mobile full stack</p>
    <a href="#projects" class="btn btn-projects btn-light mt-3">Découvrir mes projets</a>
  </div>
</header>

<!-- Projets -->
<section id="projects" class="projects py-5 bg-dark text-white">
  <div class="projects container">
    <h2 class="text-center mb-5">Mes projets</h2>
    <div class="row g-4 justify-content-center ms-1 me-1">
      <div class="col-md-4">
        <a href="http://127.0.0.1:5500/" target="_blank" class="text-decoration-none">
          <div class="card h-100 text-center">
            <img class="card-img-top mx-auto mt-3" alt="Asso_tricot">
            <div class="card-body">
              <p class="card-text">Apprendre à tricoter pour les tout petits.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="http://127.0.0.1:5501/index.html" target="_blank" class="text-decoration-none">
          <div class="card h-100 text-center">
            <img src="assets/img/logo.png" class="card-img-top mx-auto mt-3" alt="WebAgency">
            <div class="card-body">
              <p class="card-text">L'agence de tous vos projets et en tout liberté.</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="http://checkit/" target="_blank" class="text-decoration-none">
          <div class="card h-100 text-center">
            <img src="assets/img/logo-checkit.png" class="card-img-top mx-auto mt-3" alt="Checkit">
            <div class="card-body">
              <p class="card-text">Gérer vos listes à faire</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Compétences -->
<section id="skills" class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center mb-5">Mes compétences</h2>
    <div class="skills-carousel-container">
      <div class="d-flex align-items-center justify-content-center w-100">
        <button id="skills-prev" class="skills-carousel-btn me-2 bg-dark" aria-label="Précédent">&lt;</button>
        <div class="skills-carousel"></div>
        <button id="skills-next" class="skills-carousel-btn ms-2 bg-dark" aria-label="Suivant">&gt;</button>
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
require_once __DIR__ . '/footer.php';
?>