const menur = document.getElementById('menuy');
const moblier = document.querySelector('.navegacion');
const mostrare = document.querySelector('.menu');
const close = document.getElementById('close');
let isShowwn = true
menur.addEventListener('click',()=>{
    if (isShowwn === true) 
    {
        moblier.style.width = '100%'
        moblier.style.background = 'rgba(0,0,0,.3)'
        moblier.style.top = '0%'
        mostrare.style.left = '0px'
        isShowwn = true;
        moblier.style.display = 'block'
    } 
})
close.addEventListener('click',()=>{
    moblier.style.display = 'none'
    moblier.style.width = '0%'
    moblier.style.background = 'rgba(0,0,0,.0)'
    mostrare.style.left = '-320px'
    isShowwn = true;
})
