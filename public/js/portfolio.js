document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  const menu = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.navigation');
  menu.addEventListener('click', () => { const active = nav.classList.toggle('open'); menu.classList.toggle('active', active); menu.setAttribute('aria-expanded', active); });
  nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => { nav.classList.remove('open'); menu.classList.remove('active'); menu.setAttribute('aria-expanded', false); }));
});
