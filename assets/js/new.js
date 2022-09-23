const menuu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
const navLogo = document.querySelector('#navbar__logo');

const mobileMenu = () =>{
    menuu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
}

menuu.addEventListener('click',mobileMenu);