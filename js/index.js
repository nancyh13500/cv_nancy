// let lastScrollTop = 0;
// const navbar = document.getElementById('mainNavbar');

// window.addEventListener('scroll', function() {
//   let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//   if (scrollTop > lastScrollTop) {
//     // On descend : cacher la navbar
//     navbar.style.top = "-80px";
//   } else {
//     // On remonte : afficher la navbar
//     navbar.style.top = "0";
//   }
//   lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
// }); 

// Navbar scroll effect
document.addEventListener('DOMContentLoaded', function () {
  const navbar = document.querySelector('.navbar');
  let lastScrollTop = 0;

  // Add transition for smooth effect
  navbar.style.transition = 'transform 0.3s ease-in-out';

  window.addEventListener('scroll', function () {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      // Scrolling down
      if (scrollTop > 50) {
        navbar.style.transform = 'translateY(0)';
        navbar.classList.add('navbar-scrolled');
      }
    } else {
      // Scrolling up
      navbar.style.transform = 'translateY(0)';
      navbar.classList.add('navbar-scrolled');
    }

    lastScrollTop = scrollTop;
  });