document.addEventListener('DOMContentLoaded', function () {
  // Sélection de la navbar
  var navbar = document.querySelector('.navbar');
  if (navbar && !navbar.classList.contains('sticky-top')) {
    navbar.classList.add('sticky-top');
  }

  // Masquer/afficher la navbar selon le scroll
  let lastScrollTop = window.scrollY;
  let ticking = false;
  window.addEventListener('scroll', function () {
    if (!navbar) return;
    if (!ticking) {
      window.requestAnimationFrame(function () {
        let scrollTop = window.scrollY;
        if (scrollTop > lastScrollTop && scrollTop > 80) {
          // Scroll vers le bas : cacher la navbar
          navbar.style.transform = 'translateY(-100%)';
        } else {
          // Scroll vers le haut : afficher la navbar
          navbar.style.transform = 'translateY(0)';
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        ticking = false;
      });
      ticking = true;
    }
  });

  // Ajoute la transition si pas déjà présente
  if (navbar && !navbar.style.transition) {
    navbar.style.transition = 'transform 0.3s ease-in-out';
  }

  // Fermer le menu mobile après clic sur un lien
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
  const navbarCollapse = document.getElementById('navbarNav');
  navLinks.forEach(function(link) {
    link.addEventListener('click', function() {
      if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    });
  });

  // Scroll fluide vers les ancres
  navLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId.startsWith('#')) {
        e.preventDefault();
        const target = document.querySelector(targetId);
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      }
    });
  });
});