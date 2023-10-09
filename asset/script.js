const menuIcon = document.querySelector('#menu');
const navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
  menuIcon.classList.toggle('bx-x');
  navbar.classList.toggle('active');
};

// sticky navbar//
const navbarScrol = document.querySelector('.header');
window.addEventListener('scroll', function () {
  const value = window.scrollY;
  return value > 0 ? navbarScrol.classList.add('change') : navbarScrol.classList.remove('change');
});
