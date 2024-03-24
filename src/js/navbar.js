/*-----------------------------------------------
|  Navbar
-----------------------------------------------*/

const navbarInit = () => {
  const navbar = document.querySelector('[data-navbar-soft-on-scroll]');
  const navbarContainer = document.querySelector('[data-navbar-collapse]');

  if (navbar) {
    const windowHeight = window.innerHeight;
    const handleAlpha = () => {
      const scrollTop = window.scrollY;
      const alpha = (scrollTop / windowHeight) * 2;
      let opacity;
      let blur;
      if (alpha <= 0) {
        opacity = 1;
        blur = 0;
      } else if (alpha >= 1) {
        opacity = 0.65;
        blur = 10;
      } else {
        opacity = 1 - alpha * 0.5;
        blur = alpha * 10;
      }
      navbar.style.backgroundColor = `rgba(255, 218, 145, ${opacity})`;
      navbarContainer.style.backgroundColor = `rgba(255, 218, 145, ${opacity})`;
      navbar.style.backdropFilter = `blur(${blur}px)`;
      navbarContainer.style.backdropFilter = `blur(${blur}px)`;
    };
    handleAlpha();
    document.addEventListener('scroll', () => handleAlpha());
  }

  const navbarNav = document.querySelector('[data-navbar-nav]');
  navbarNav.addEventListener('click', (event) => {
    if (event.target.closest('li')) {
      const navbarToggler = document.querySelector('[data-bs-toggle]');
      const navbarItemContainer = document.querySelector('[data-navbar-collapse]');
      navbarToggler.setAttribute('aria-expanded', false);
      navbarItemContainer.classList.remove('show');
      navbarToggler.classList.add('collapsed');
    }
  });
};

export default navbarInit;
