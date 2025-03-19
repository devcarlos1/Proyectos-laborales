const buttonGallery = document.querySelector('.gallery__button');
const listGallery = document.querySelector('.gallery__list');
const buttonServices = document.querySelector('.services__button');
const buttonMenuOpen = document.querySelector('.header__menu p');
const buttonMenuClose = document.querySelector('.header__menu__nav__close');
const navA = document.querySelector('.header__menu__nav__nav__a');
const Menu = document.querySelector('.header__menu__nav');
const spinnerContainer = document.querySelector('.spinner--container');

const maxImg = 84;
let init = 1;
let fin = 10;
let counterServices = 2;
document.addEventListener('DOMContentLoaded', ()=>{
    newImages(init, fin);
    init= fin + 1;
    fin= fin + 10;
});

buttonGallery.addEventListener('click', ()=>{

if(document.querySelector('#img-' + maxImg)) {
    listGallery.innerHTML= "";
    buttonGallery.textContent = "View More Projects";
    newImages(1, 10);
    init= 11;
    fin=  init + 10;
    return;  
}

if(document.querySelector('#img-' + (maxImg - 10))) {
    buttonGallery.textContent = "View Less Projects";
}

newImages(init, fin);
init= fin + 1;
fin= fin + 10;

});

function newImages(init, fin){ 
    let counter= init;
    for(let i=init; i <= fin && i<= maxImg; i++){
        let structure = structureImages(counter);
            listGallery.appendChild(structure);
            counter++;
    } 
}

function structureImages(counter) {
    let list = document.createElement('LI');
    list.classList.add('gallery__list__element');
    let div = document.createElement('DIV');
    div.classList.add('gallery__list__element__img');
    let img = document.createElement('IMG');
    img.id= "img-" + counter;
    img.src= './img/img-min/img-' + counter + '-min' + '.jpg';
    div.appendChild(img);
    list.appendChild(div);
    return list;
}



buttonServices.addEventListener('click', ()=>{
    if(!(counterServices%2) ){
        for(let i=9; i < 20 ;i++ ){
            document.querySelector('#service-' +  i).classList.remove('none');  
        }
        buttonServices.textContent="View Less Services";
        counterServices++;
        return;
    } 
    for(let i=9; i<= 20; i++){
        document.querySelector('#service-' +  i).classList.add('none');  
    }
    buttonServices.textContent="View More Services";
    counterServices++;
});
buttonMenuClose.addEventListener('click', ()=>{
    Menu.classList.add('none');
});
buttonMenuOpen.addEventListener('click', ()=>{
    Menu.classList.remove('none');
});
navA.addEventListener('click',()=>{
    Menu.classList.add('none');
});
document.addEventListener('DOMContentLoaded',()=>{
    spinnerContainer.classList.add('none');
});