const menu = document.getElementById('show__menu');
const moblie = document.querySelector('.moblie__nav__menu');
let isShown = false
menu.addEventListener('click',()=>{
    if (!isShown) 
    {
        moblie.style.transform = 'translateX(-50%) scale(1)'
        isShown = true;
    } 
    else if (isShown)
    {
        moblie.style.transform = 'translateX(-50%) scale(0)'
        isShown = false;
    }
})