document.addEventListener('scroll', () => {
  const sections = document.querySelectorAll('div[id]');

  sections.forEach((section) => {
    const rect = section.getBoundingClientRect();
    const height = section.offsetHeight;
    const top = rect.top;

    // Calcul du pourcentage de progression dans la section
    const progress = Math.min(
      Math.max(((window.innerHeight - top) / (window.innerHeight + height)) * 100, 0),
      100
    );

    const progressEl = document.querySelector(
      `.js-summary-item[data-target="#${section.id}"] .js-scroll-progress`
    );

    if (progressEl) {
      const pct = Math.round(progress);
      progressEl.style.width = pct + '%';
      progressEl.setAttribute('aria-valuenow', pct);
    }
  });
});
