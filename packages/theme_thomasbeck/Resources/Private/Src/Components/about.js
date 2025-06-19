document.querySelectorAll('.js-skill-percent').forEach(skill => {
  const width = skill.getAttribute('data-percent');
  if (width) {
    skill.style.setProperty('--dynamic-width', width);
  }
});