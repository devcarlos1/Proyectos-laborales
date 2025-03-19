const nav = document.querySelector('nav');
const header = document.querySelector('header');
const btnMenu = document.querySelector('.header__izq__btn__menu');
const testimonialsRow = document.querySelectorAll('.testimonials__row');
const btnReadMore = document.querySelector('.testimonials__btns__read');
const navListElement = document.querySelectorAll('.nav__list__element');
let verificar= true;
let verificar2 = true;
nav.style.top= header.clientHeight + "px";

btnMenu.addEventListener('click',()=>{
    if(!verificar){
        nav.classList.add('invisible');
        verificar=true;
      }
      else{
        nav.classList.remove('invisible');
    verificar=false;
      }
});
for(let i=0; i< navListElement.length; i++){
  navListElement[i].addEventListener('click',()=>{
    nav.classList.add('invisible');
    verificar=true;
  
});
}

btnReadMore.addEventListener('click',()=>{
  if(verificar2){
    testimonialsRow[1].classList.remove('invisible');
    verificar2=false;
  }
  else{
    testimonialsRow[1].classList.add('invisible');
    console.log('remenber when i have you');
verificar2=true;
  }
});
