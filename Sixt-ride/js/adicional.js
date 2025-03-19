const inputBuscador= document.querySelector(".formulario__elemento__buscador input");
const iconBuscador = document.querySelector(".formulario__elemento__buscador__img");
const barraBuscador = document.querySelector(".formulario__elemento__buscador");

inputBuscador.addEventListener('focus', ()=>{
    iconBuscador.classList.add("color-svg");
    barraBuscador.classList.add("border__bottom__color");
});
inputBuscador.addEventListener('focusout', ()=>{
    iconBuscador.classList.remove("color-svg");
    barraBuscador.classList.remove("border__bottom__color");
});


const inputDestino = document.querySelector("input.formulario__elemento__destino");
const barraDestino = document.querySelector("div.formulario__elemento__destino");
inputDestino.addEventListener('focus', ()=>{
    barraDestino.classList.add("border__bottom__color");
});
inputDestino.addEventListener('focusout', ()=>{
    barraDestino.classList.remove("border__bottom__color");
});


const inputTiempo = document.querySelector(".formulario__elemento__tiempo .fecha");
const inputTiempo2 = document.querySelector(".formulario__elemento__tiempo .tiempo");
const barraTiempo = document.querySelector(".formulario__elemento__tiempo");
inputTiempo.addEventListener('focus', ()=>{
    barraTiempo.classList.add("border__bottom__color");
});
inputTiempo.addEventListener('focusout', ()=>{
    barraTiempo.classList.remove("border__bottom__color");
});


const inputUsuario =document.querySelector(".formulario--usuario__form__input input");
const barraUsuario = document.querySelector(".formulario--usuario__form__input")
inputUsuario.addEventListener("focus", ()=>{
  barraUsuario.classList.add("border__bottom__color");
})
inputUsuario.addEventListener("focusout", ()=>{
    barraUsuario.classList.remove("border__bottom__color");
  })


const show1 =document.querySelector(".info--4__elemento__show-1");
const lista__oculta = document.querySelectorAll(".lista-1 li:nth-child(n + 5)");
const arriba1 = document.querySelector(".info--4__elemento__show-1__btn__arriba");
const abajo1 = document.querySelector(".info--4__elemento__show-1__btn__abajo");
console.log(lista__oculta);
let showContador= 1;
show1.addEventListener("click", ()=>{
if(!(showContador % 2)){
    for(let i=0; i < lista__oculta.length; i++){
        lista__oculta[i].classList.add("visible");
    }
    arriba1.classList.remove('invisible');
    abajo1.classList.add("invisible");
}
if((showContador % 2)){
    for(let i=0; i < lista__oculta.length; i++){
        lista__oculta[i].classList.remove("visible");
    }
    arriba1.classList.add('invisible');
    abajo1.classList.remove("invisible");
}
showContador+=1;
});

const show2 =document.querySelector(".info--4__elemento__show-2");
const lista__oculta2 = document.querySelectorAll(".lista-2 li:nth-child(n + 5)");
const arriba2 = document.querySelector(".info--4__elemento__show-2__btn__arriba");
const abajo2 = document.querySelector(".info--4__elemento__show-2__btn__abajo");
let showContador2= 1;
show2.addEventListener("click", ()=>{
if(!(showContador2 % 2)){
    for(let i=0; i < lista__oculta2.length; i++){
        lista__oculta2[i].classList.add("visible");
    }
    arriba2.classList.remove('invisible');
    abajo2.classList.add("invisible");
}
if((showContador2 % 2)){
    for(let i=0; i < lista__oculta2.length; i++){
        lista__oculta2[i].classList.remove("visible");
    }
    arriba2.classList.add('invisible');
    abajo2.classList.remove("invisible");
}
showContador2+=1;
});


const show3 =document.querySelector(".info--4__elemento__show-3");
const lista__oculta3 = document.querySelectorAll(".lista-3 li:nth-child(n + 5)");
const arriba3 = document.querySelector(".info--4__elemento__show-3__btn__arriba");
const abajo3 = document.querySelector(".info--4__elemento__show-3__btn__abajo");
let showContador3= 1;
show3.addEventListener("click", ()=>{
if(!(showContador3 % 2)){
    for(let i=0; i < lista__oculta3.length; i++){
        lista__oculta3[i].classList.add("visible");
    }
    arriba3.classList.remove('invisible');
     abajo3.classList.add("invisible");
    console.log("Holads");
}
if((showContador3% 2)){
    for(let i=0; i < lista__oculta3.length; i++){
        lista__oculta3[i].classList.remove("visible");
    }
    arriba3.classList.add('invisible');
     abajo3.classList.remove("invisible");
}
showContador3+=1;
});



