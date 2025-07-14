document.addEventListener('DOMContentLoaded', function () {
  // Les données des compétences
  const skills = [
    {
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg',
      label: 'HTML',
    },
    {
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg',
      label: 'CSS',
    },
    {
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
      label: 'JAVASCRIPT',
    },
    {
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg',
      label: 'BOOTSTRAP',
    },
    {
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
      label: 'SQL',
    },
    {
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
      label: 'PHP',
    }
  ];

  const carousel = document.querySelector('.skills-carousel');
  const prevBtn = document.getElementById('skills-prev');
  const nextBtn = document.getElementById('skills-next');
  let currentIndex = 0;
  let autoSlideInterval = null;
  let autoSlideTimeout = null;

  // Génère dynamiquement les items
  function renderItems() {
    carousel.innerHTML = '';
    skills.forEach(skill => {
      const item = document.createElement('div');
      item.className = 'skills-carousel-item';
      item.innerHTML = `<img src="${skill.img}" width="50" alt="${skill.label}"><p>${skill.label}</p>`;
      carousel.appendChild(item);
    });
  }

  function getVisibleCount() {
    if (window.innerWidth < 768) return 1;
    if (window.innerWidth < 992) return 2;
    return 3;
  }

  function updateCarousel() {
    const items = carousel.querySelectorAll('.skills-carousel-item');
    const visibleCount = getVisibleCount();
    items.forEach((item, i) => {
      item.style.display = (i >= currentIndex && i < currentIndex + visibleCount) ? 'flex' : 'none';
    });
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex + visibleCount >= skills.length;
  }

  function nextSlide() {
    const visibleCount = getVisibleCount();
    if (currentIndex + visibleCount < skills.length) {
      currentIndex += visibleCount;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  }

  function prevSlide() {
    const visibleCount = getVisibleCount();
    if (currentIndex > 0) {
      currentIndex -= visibleCount;
      if (currentIndex < 0) currentIndex = 0;
    } else {
      // Optionnel : revenir à la fin si on clique sur "précédent" au début
      currentIndex = Math.max(skills.length - visibleCount, 0);
    }
    updateCarousel();
  }

  function startAutoSlide() {
    stopAutoSlide();
    autoSlideInterval = setInterval(nextSlide, 5000);
  }

  function stopAutoSlide() {
    if (autoSlideInterval) clearInterval(autoSlideInterval);
    autoSlideInterval = null;
  }

  function resetAutoSlide() {
    stopAutoSlide();
    if (autoSlideTimeout) clearTimeout(autoSlideTimeout);
    autoSlideTimeout = setTimeout(startAutoSlide, 5000);
  }

  prevBtn.addEventListener('click', function () {
    prevSlide();
    resetAutoSlide();
  });

  nextBtn.addEventListener('click', function () {
    nextSlide();
    resetAutoSlide();
  });

  window.addEventListener('resize', function () {
    currentIndex = 0;
    updateCarousel();
    resetAutoSlide();
  });

  renderItems();
  updateCarousel();
  startAutoSlide();
}); 