(() => {
  const burgerButton = document.querySelector('.js-burger');
  const menu = document.getElementById(burgerButton.getAttribute('aria-controls'));

  // Fonction pour activer le comportement burger (mobile)
  const enableBurger = () => {
    if (!burgerButton.dataset.burgerEnabled) {
      burgerButton.dataset.burgerEnabled = 'true';
      burgerButton.addEventListener('click', onBurgerClick);
      document.addEventListener('click', onDocumentClick);
    }

    menu.setAttribute('aria-hidden', 'true');
    burgerButton.setAttribute('aria-expanded', 'false');
  };

  // Fonction pour désactiver le burger (desktop)
  const disableBurger = () => {
    burgerButton.removeEventListener('click', onBurgerClick);
    document.removeEventListener('click', onDocumentClick);
    delete burgerButton.dataset.burgerEnabled;

    menu.removeAttribute('aria-hidden');
    burgerButton.setAttribute('aria-expanded', 'false');
  };

  // Clic sur le bouton burger
  const onBurgerClick = e => {
    e.preventDefault();

    const isExpanded = burgerButton.getAttribute('aria-expanded') === 'true';
    const newState = !isExpanded;

    burgerButton.setAttribute('aria-expanded', newState);
    menu.setAttribute('aria-hidden', !newState);

    if (newState) {
      // Menu ouvert → focus sur le premier lien
      const firstLink = menu.querySelector('a, button, [tabindex]:not([tabindex="-1"])');
      if (firstLink) firstLink.focus();
    } else {
      // Menu fermé → rendre le focus au bouton
      burgerButton.focus();
    }
  };

  // Clic en dehors du menu → fermeture
  const onDocumentClick = e => {
    const isClickInsideMenu = menu.contains(e.target);
    const isClickOnButton = burgerButton.contains(e.target);

    if (
      burgerButton.getAttribute('aria-expanded') === 'true' &&
      !isClickInsideMenu &&
      !isClickOnButton
    ) {
      burgerButton.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-hidden', 'true');
      burgerButton.focus(); // focus de retour sur le bouton
    }
  };

  // Gérer la taille de fenêtre
  const checkWindowSize = () => {
    if (window.innerWidth < 992) {
      enableBurger();
    } else {
      disableBurger();
    }
  };

  // Éviter les appels multiples au resize
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(checkWindowSize, 150);
  });

  window.addEventListener('DOMContentLoaded', checkWindowSize);
})();
