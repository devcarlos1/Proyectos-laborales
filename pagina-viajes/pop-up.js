const popup= document.querySelector(".ifanel-contenedor-popup");

tiempo();
function tiempo(){
    let tiempo = setTimeout(mostrar, 10000);
}

function mostrar(){ 
   popup.classList.remove("oculto");
}

function quitar(){
    popup.classList.add("oculto");
}