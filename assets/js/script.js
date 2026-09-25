
const hamburgerBtn = document.getElementById('hamburger-btn');
const closeBtn = document.getElementById('close-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileNavLinks = document.querySelectorAll('.mobile-nav-links a');

hamburgerBtn.addEventListener('click', () => {
  mobileMenu.classList.add('active');
});


function closeMenu() {
  mobileMenu.classList.remove('active');
}

closeBtn.addEventListener('click', closeMenu);

mobileNavLinks.forEach(link => {
  link.addEventListener('click', closeMenu);
});