const banner1= document.querySelector(".carusel--1__contenido__elemento--1");
const banner2= document.querySelector(".carusel--1__contenido__elemento--2");
const prev= document.querySelector(".carusel--1__btn__prev");
const next = document.querySelector(".carusel--1__btn__next");
const punto1 = document.querySelector(".carusel--1__btn__circular--1");
const punto2 = document.querySelector(".carusel--1__btn__circular--2");



function carusel1(){
    banner1.classList.add('left-100');
    banner1.classList.remove('left-0');

    setTimeout(()=>{
        banner1.classList.remove('left-100');
        banner1.classList.add('left-200');
    }, 1000);
    banner2.classList.remove('left-200');
    banner2.classList.add('left-0');
    next.classList.add("invisible");
    prev.classList.remove("invisible");
    punto1.classList.remove("back-punto");
    punto2.classList.remove("back-white");
    punto2.classList.add("back-punto");
    punto1.classList.add("back-white");

}
function carusel2(){
    banner2.classList.remove('left-0');
    banner2.classList.add("left-100");
    setTimeout(()=>{
        banner2.classList.remove('left-100');
        banner2.classList.add('left-200');
    }, 1000);
    banner1.classList.remove('left-200');
    banner1.classList.add('left-0');
    prev.classList.add("invisible");
    next.classList.remove("invisible");
    punto2.classList.remove("back-punto");
    punto1.classList.remove("back-white");
    punto1.classList.add("back-punto");
    punto2.classList.add("back-white");
}
function carusel(){
    contador=5000;
    contador2=10000;
   for(let i =0; i<30; i++){ 
    setTimeout(carusel1, contador);
    setTimeout(carusel2, contador2);
    contador+=10000;
    contador2+=10000;    
}
}

let contar =0;
prev.addEventListener('click',()=>{

    if(!(contar % 2)){
        banner2.classList.remove("left-200");
        banner2.classList.add("left-100--prev");
        setTimeout(()=>{
            banner1.classList.add("left-200--prev");
            banner2.classList.add("left-100--prev");
            banner2.classList.remove("left-100--prev");
        banner2.classList.add("right-0--prev");
        banner1.classList.remove("right-0--prev");
        banner1.classList.add("left-100--prev");

        punto1.classList.remove("back-punto");
        punto2.classList.remove("back-white");
        punto2.classList.add("back-punto");
        punto1.classList.add("back-white");
        }, 10);
        setTimeout(()=>{
            banner1.classList.remove("left-200--prev");
        },1000);
       }
       if(contar % 2){
        banner2.classList.remove("left-100--prev");
        banner1.classList.add("left-100--prev");

        setTimeout(()=>{
            banner2.classList.add("left-200--prev");
            banner1.classList.add("left-100--prev");
            banner1.classList.remove("left-100--prev");
        banner1.classList.add("right-0--prev");
        banner2.classList.remove("right-0--prev");

        banner2.classList.add("left-100--prev");

        punto2.classList.remove("back-punto");
        punto1.classList.remove("back-white");
        punto1.classList.add("back-punto");
        punto2.classList.add("back-white");           
        }, 10);
        setTimeout(()=>{
            banner2.classList.remove("left-200--prev");
        },10);
       }
   
contar+=1;
    console.log("hOLAADSA");
});
banner2.classList.add("left-200");
next.addEventListener('click',()=>{
    banner2.classList.remove("left-100--prev");
    banner1.classList.remove("left-100--prev");
    banner2.classList.remove("right-0--prev");
    banner1.classList.remove("right-0--prev");
    banner2.classList.remove("left-200--prev");
    banner1.classList.remove("left-200--prev");

   if(!(contar % 2)){
    banner1.classList.add('left-100');
    banner1.classList.remove('left-0');

    setTimeout(()=>{
        banner1.classList.remove('left-100');
        banner1.classList.add('left-200');
    }, 1000);
    banner2.classList.remove('left-200');
    banner2.classList.add('left-0');

    punto1.classList.remove("back-punto");
    punto2.classList.remove("back-white");
    punto2.classList.add("back-punto");
    punto1.classList.add("back-white");
   }
   if(contar % 2){
    banner2.classList.add('left-100');
    banner2.classList.remove('left-0');

    setTimeout(()=>{
        banner2.classList.remove('left-100');
        banner2.classList.add('left-200');
    }, 1000);
    banner1.classList.remove('left-200');
    banner1.classList.add('left-0');

    punto2.classList.remove("back-punto");
    punto1.classList.remove("back-white");
    punto1.classList.add("back-punto");
    punto2.classList.add("back-white");
   }
   contar+=1;
    console.log("MAMI");

});

    /*document.addEventListener("DOMContentLoaded",carusel);*/



const btn__prev = document.querySelector(".carusel--2__btn__prev");
const btn__next = document.querySelector(".carusel--2__btn__next");
const banner= document.querySelectorAll(".carusel--2__informacion__elementos");
const elemento2 = document.querySelector(".carusel--2__informacion > .carusel--2__informacion__elementos:nth-child(2)")
const style = getComputedStyle(elemento2);
const left = style.left;
console.log(left);

let contadorNuevo=1;
if(left != "0px"){
    btn__next.addEventListener("click", ()=>{
        if(contadorNuevo ==1){
         btn__prev.classList.remove("invisible");
         banner[1].classList.remove("left-200--1");
         banner[1].classList.add("left-0--1");
         banner[0].classList.add("left-100--1");
         console.log(contadorNuevo);   
     }
     if(contadorNuevo == 2){
         btn__prev.classList.remove("invisible");
         banner[2].classList.remove("left-200--1");
         banner[1].classList.add("left-100--1")
         banner[2].classList.add("left-0--1");
         console.log(contadorNuevo);   
     }
     if(contadorNuevo ==2){
       console.log("Nojoda");
     }
     if( contadorNuevo < 2){
         contadorNuevo+=1;
     }
       
     });
     btn__prev.addEventListener('click',()=>{
         if(contadorNuevo == 1){
             banner[1].classList.remove("left-0--1");
             banner[1].classList.add("left-200--1");
             btn__prev.classList.add("invisible");
             banner[0].classList.remove("left-100--1");
             banner[0].classList.add("left-0--1");
         }
         if(contadorNuevo == 2){
             banner[2].classList.remove("left-0--1");
             banner[2].classList.add("left-200--1");
             banner[1].classList.remove("left-100--1");
             banner[1].classList.add("left-0--1");
             console.log("this days");
         }
         if(contadorNuevo ==2){
             console.log("Maldita");
           }
         contadorNuevo= contadorNuevo - 1;
     })
}



if(left == "0px"){
    btn__next.addEventListener("click", ()=>{
         btn__prev.classList.remove("invisible");
         banner[1].classList.remove("left-200--2");
         banner[1].classList.add("left-0--2");
         banner[0].classList.add("left-100--2");
         banner[0].classList.add("position-absolute");
         banner[2].classList.remove("left-200--2");
         banner[2].classList.add("left-0--2");
         console.log("Culo")
       
     });
     btn__prev.addEventListener('click',()=>{
        btn__prev.classList.add("invisible");
        banner[0].classList.remove("left-100--2");
        banner[0].classList.remove("position-absolute");
        banner[2].classList.add("left-200--2");
        banner[2].classList.remove("left-0--2");
         console.log("Mami")
     })
}

