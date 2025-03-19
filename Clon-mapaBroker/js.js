const btn__menu__desplegable = document.querySelector(".header__izq__btn__menu");
const menu__desplegable = document.querySelector('.menu-desplegable');
const btn__menu__desplegable__activo= document.querySelector('.menu-desplegable__menu__contenedor-salir__btn');
const elementos__menu__desplegable__activo= document.querySelectorAll('.menu-desplegable__menu__lista__item')
verificar=false;

btn__menu__desplegable.addEventListener('click', ()=>{ 
    if(!verificar){ 
      menu__desplegable.classList.remove("invisible");  
      verificar=true;
    }
  });

btn__menu__desplegable__activo.addEventListener('click',()=>{
    if(verificar){
        menu__desplegable.classList.add("invisible");
      verificar=false;
    }
} );

elementos__menu__desplegable__activo.forEach((elemento)=>{
       elemento.addEventListener('click', ()=>{
        menu__desplegable.classList.add("invisible");
      verificar=false;
       })
})