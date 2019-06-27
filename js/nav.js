const ham = document.querySelector('.hamburger');
const navlinks = document.querySelector('.nav-links');
const links = document.querySelectorAll('.nav-links li');

ham.addEventListener('click', () => {
  navlinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
});