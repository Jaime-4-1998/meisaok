const menu = document.getElementById('burgr-icon');
const moblie = document.querySelector('.nave');

let isShown = false
menu.addEventListener('click',()=>{
    if (!isShown) 
    {
        moblie.style.display = 'flex'
        isShown = true;
    } 
    else if (isShown)
    {
        moblie.style.display = 'none'
        isShown = false;
    }
})



const drpdwnBtns = document.getElementById("drpdwn-btn");
const drpdwns = document.querySelector(".drpdwn");
drpdwnBtns.addEventListener('click',()=>{
    if (!isShown) 
    {
        drpdwns.style.display = 'block'
        isShown = true;
    } 
    else if (isShown)
    {
        drpdwns.style.display = 'none'
        isShown = false;
        drpdwnss.style.display = 'none'
        isShown = false;
    }
})

const drpdwnBtnss = document.getElementById("drpdwn-btns");
const drpdwnss = document.querySelector(".drpdwns");
drpdwnBtnss.addEventListener('click',()=>{
    if (!isShown) 
    {
        drpdwnss.style.display = 'block'
        isShown = true;
    } 
    else if (isShown)
    {
        drpdwnss.style.display = 'none'
        isShown = false;
        drpdwns.style.display = 'none'
        isShown = false;
    }
})