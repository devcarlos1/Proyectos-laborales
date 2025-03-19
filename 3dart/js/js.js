const btnExit = document.querySelector(".header__exit--mobile");
const menuMobile = document.querySelector('.header__nav--mobile');
const btnMenuMobile = document.querySelector(".header__btn--mobile");
let verificar=false;
btnMenuMobile.addEventListener("click",()=>{
    menuMobile.classList.remove("invisible");

})

btnExit.addEventListener("click",()=>{
  if(verificar){
    menuMobile.classList.remove("invisible");
      verificar=true;
  }
  if(!verificar){
    menuMobile.classList.add("invisible");
      verificar=false;
  }
  console.log(verificar)

})

