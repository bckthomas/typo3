window.addEventListener('scroll', function () {
  const header = document.querySelector('.js-header');
  if (window.scrollY > 50) {
    header.classList.add('header--scrolled');
  } else {
    header.classList.remove('header--scrolled');
  }
});