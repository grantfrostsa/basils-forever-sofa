const hamMenu = document.querySelector('.header__hamburger-nav');

const offScreenMenu = document.querySelector('.header__hamburger-off-screen-menu');

hamMenu.addEventListener('click', () => {
  hamMenu.classList.toggle('active');
  offScreenMenu.classList.toggle('active');
});

window.addEventListener('scroll', () => {
  hamMenu.classList.remove('active');
  offScreenMenu.classList.remove('active');
});

