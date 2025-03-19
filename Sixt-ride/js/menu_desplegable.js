const fondo__opaco = document.querySelector(".header__menu__fondo--desktop");
const btn__menu__desplegableDesktop = document.querySelector(".header__btn__menu--desktop");
const btn__menu__desplegableMobile = document.querySelector(".header__btn__menu--mobile");
const linea__menu1 = document.querySelector(".header__btn__menu--desktop .header__btn__menu--linea:nth-child(1)");
const linea__menu2 = document.querySelector(".header__btn__menu--desktop .header__btn__menu--linea:nth-child(2)");
const linea__menu3 = document.querySelector(".header__btn__menu--desktop .header__btn__menu--linea:nth-child(3)");
const linea__menu1Mobile = document.querySelector(".header__btn__menu--mobile .header__btn__menu--linea:nth-child(1)");
const linea__menu2Mobile = document.querySelector(".header__btn__menu--mobile .header__btn__menu--linea:nth-child(2)");
const linea__menu3Mobile = document.querySelector(".header__btn__menu--mobile .header__btn__menu--linea:nth-child(3)");


const menu__desplegableDesktop = document.querySelector(".header__menu--desktop");
const menu__desplegableMobile = document.querySelector (".header__menu--mobile");
const btn__titulo= document.querySelectorAll(".header__menu--mobile .header__menu__elemento__titulo");
const menu__lista= document.querySelectorAll(".header__menu--mobile > .header__menu__elementos .header__menu__elemento .header__menu__elemento__lista");
verificar=false;
const btn__nav__desplegable = document.querySelector(".header__nav__mostrar--mobile");
const nav__desplegable = document.querySelector(".header__nav__menu--mobile");
let verificar2= false;
/*Formulario Usuario*/
const btn__usuario__x = document.querySelector(".header__der__usuario");
const form__usuario = document.querySelector(".formulario--usuario__contenedor");
const btn__form__usuario = document.querySelector(".formulario--usuario__close");
/*Formulario mundo*/
const btn__mundo__x = document.querySelector(".header__der__mundo");
const form__mundo = document.querySelector(".formulario--mundo__contenedor");
const btn__form__mundo = document.querySelector(".formulario--mundo__close");

/*Formulario Usuario*/
btn__usuario__x.addEventListener('click',()=>{
       form__usuario.classList.remove("invisible");
       fondo__opaco.classList.remove("invisible");
});
btn__form__usuario.addEventListener('click', ()=>{
  form__usuario.classList.add("invisible");
  fondo__opaco.classList.add("invisible");
})
/*Formulario mundo*/
btn__mundo__x.addEventListener('click',()=>{
  form__mundo.classList.remove("invisible");
  fondo__opaco.classList.remove("invisible");
});
btn__form__mundo.addEventListener('click', ()=>{
form__mundo.classList.add("invisible");
fondo__opaco.classList.add("invisible");
})


btn__nav__desplegable.addEventListener('click',()=>{
if(!verificar2){
  nav__desplegable.classList.remove("invisible");
  verificar2=true;
} else if(verificar2){
  nav__desplegable.classList.add("invisible");
  verificar2=false;
}
});


btn__menu__desplegableDesktop.addEventListener('click', ()=>{ 
  if(!verificar){ 
    menu__desplegableDesktop.classList.remove("invisible");
    linea__menu1.classList.add("linea__menu1");
    linea__menu2.classList.add("linea__menu2");
    linea__menu3.classList.add("invisible");
    fondo__opaco.classList.remove("invisible");

    verificar=true;
  }else if(verificar){
    menu__desplegableDesktop.classList.add("invisible");
    linea__menu1.classList.remove("linea__menu1");
    linea__menu2.classList.remove("linea__menu2");
    linea__menu3.classList.remove("invisible");
    fondo__opaco.classList.add("invisible");

  verificar=false;
}
});
btn__menu__desplegableMobile.addEventListener('click', ()=>{ 
  if(!verificar){ 
    linea__menu1Mobile.classList.add("linea__menu1");
    linea__menu2Mobile.classList.add("linea__menu2");
    linea__menu3Mobile.classList.add("invisible");
    menu__desplegableMobile.classList.remove("invisible");
    verificar=true;
  }else if(verificar){
    linea__menu2Mobile.classList.remove("linea__menu2");
    linea__menu1Mobile.classList.remove("linea__menu1");
    linea__menu3Mobile.classList.remove("invisible");
    menu__desplegableMobile.classList.add("invisible");
  verificar=false;
}
});
for(let i =0; btn__titulo.length; i++){
    btn__titulo[i].addEventListener('click', (e)=>{
      menu__lista[i].classList.remove("invisible");
      menu__lista.forEach(function funcion__arreglo(elemento, posicion,arr){
        if(posicion != i ){
         menu__lista[posicion].classList.add("invisible");
        }
      });
    });
}






