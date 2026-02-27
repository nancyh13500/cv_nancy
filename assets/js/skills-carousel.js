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
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
      label: 'PHP',
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
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg',
      label: 'DOCKER',
    },
    {
      img: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg',
      label: 'MONGODB',
    },
    {
      img: 'https://cdn.simpleicons.org/portainer/13BEF9',
      label: 'PORTAINER',
    },
  ];

  const carousel = document.querySelector('.skills-carousel');
  const prevBtn = document.getElementById('skills-prev');
  const nextBtn = document.getElementById('skills-next');
  let currentIndex = 0;
  let direction = 1; // 1 = vers la droite, -1 = vers la gauche
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

  function getMaxIndex() {
    return Math.max(skills.length - getVisibleCount(), 0);
  }

  function updateCarousel() {
    const items = carousel.querySelectorAll('.skills-carousel-item');
    const visibleCount = getVisibleCount();
    items.forEach((item, i) => {
      item.style.display = (i >= currentIndex && i < currentIndex + visibleCount) ? 'flex' : 'none';
    });
    const canSlide = skills.length > visibleCount;
    prevBtn.disabled = !canSlide;
    nextBtn.disabled = !canSlide;
  }

  function nextSlide() {
    const maxIndex = getMaxIndex();
    if (currentIndex < maxIndex) {
      currentIndex += 1;
      direction = 1;
    } else {
      // Arrivé à droite : retour au début si on clique sur "suivant"
      currentIndex = 0;
      direction = 1;
    }
    updateCarousel();
  }

  function prevSlide() {
    if (currentIndex > 0) {
      currentIndex -= 1;
      direction = -1;
    } else {
      // Arrivé à gauche : on repart immédiatement dans l'autre sens
      direction = 1;
      const maxIndex = getMaxIndex();
      if (maxIndex > 0) currentIndex += 1;
    }
    updateCarousel();
  }

  function autoSlide() {
    const maxIndex = getMaxIndex();
    if (maxIndex === 0) return;

    if (direction === 1) {
      if (currentIndex < maxIndex) {
        currentIndex += 1;
      } else {
        direction = -1;
        currentIndex -= 1;
      }
    } else {
      if (currentIndex > 0) {
        currentIndex -= 1;
      } else {
        direction = 1;
        currentIndex += 1;
      }
    }

    updateCarousel();
  }

  function startAutoSlide() {
    stopAutoSlide();
    autoSlideInterval = setInterval(autoSlide, 3000);
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
    currentIndex = Math.min(currentIndex, getMaxIndex());
    direction = 1;
    updateCarousel();
    resetAutoSlide();
  });

  renderItems();
  updateCarousel();
  startAutoSlide();
}); 