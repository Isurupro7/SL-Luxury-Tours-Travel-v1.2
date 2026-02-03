(function () {
  const toggle = document.querySelector('[data-theme-toggle]');
  const body = document.body;
  const storageKey = 'sl-luxury-theme';

  const setTheme = (mode) => {
    if (mode === 'dark') {
      body.classList.add('is-dark');
    } else {
      body.classList.remove('is-dark');
    }
    localStorage.setItem(storageKey, mode);
  };

  const stored = localStorage.getItem(storageKey);
  if (stored) {
    setTheme(stored);
  }

  if (toggle) {
    toggle.addEventListener('click', () => {
      const next = body.classList.contains('is-dark') ? 'light' : 'dark';
      setTheme(next);
    });
  }
})();
