const menu= document.querySelectorAll('.header__nav__list__element--desktop');
const banners = document.querySelectorAll('.banners__list__element');
const btnMobile = document.querySelector('.header__menu__btn--mobile');
const btnExitMobile = document.querySelector('.header__menu__btn__exit--mobile');
const menuMobile = document.querySelector('.header__menu--mobile');
const menuRrssMobile = document.querySelector('.header__menu__rrss__list__element--mobile');
const rrssDesktop = document.querySelector('.header__rrss--desktop');

for(let i=0; i < menu.length; i++){
    menu[i].addEventListener('mouseover',(e)=>{
     menu[i].classList.add('scale');
     banners[i].children[0].classList.remove('filter-img');
     banners[i].children[0].children[0].classList.add('position__title');
     if(i == 0){
        document.querySelector('.header__logo a img').src="../img/logos/Logo_INICIO.png";
     }
     if(i == 1){
        document.querySelector('.header__logo a img').src="../img/logos/Logo_SERVICIOS.png";
     }
     if(i == 2){
        document.querySelector('.header__logo a img').src="../img/logos/Logo_PROYECTOS.png";
     }
     if(i == 3){
        document.querySelector('.header__logo a img').src="../img/logos/Logo_CONTACTENOS.png";
     }
    }); 
    menu[i].addEventListener('mouseout',(e)=>{
        menu[i].classList.remove('scale');
        banners[i].children[0].classList.add('filter-img');
        banners[i].children[0].children[0].classList.remove('position__title');
        document.querySelector('.header__logo a img').src="../img/logos/Logo.png";
    }); 
}

for(let i=0; i < banners.length; i++){
    banners[i].addEventListener('mouseover',(e)=>{
     banners[i].children[0].classList.remove('filter-img');
     banners[i].children[0].children[0].classList.add('position__title');
     menu[i].classList.add('scale');
     if(i == 0){
        document.querySelector('.header__logo a img').src="../img/logos/Logo_INICIO.png";
     }
     if(i == 1){
        document.querySelector('.header__logo a img').src="../img/logos/Logo_SERVICIOS.png";
     }
     if(i == 2){
        document.querySelector('.header__logo a img').src="../img/logos/Logo_PROYECTOS.png";
     }
     if(i == 3){
        document.querySelector('.header__logo a img').src="../img/logos/Logo_CONTACTENOS.png";
     }
    }); 
    banners[i].addEventListener('mouseout',(e)=>{
        banners[i].children[0].classList.add('filter-img');
        banners[i].children[0].children[0].classList.remove('position__title');
        menu[i].classList.remove('scale');
        document.querySelector('.header__logo a img').src="../img/logos/Logo.png";

    }); 
}

for(let i =0; i < menuRrssMobile.length; i++){
    menuRrssMobile[i].addEventListener('touchstart',()=>{
        menuRrssMobile[i].classList.add('scale-1-1');
    });
    menuRrssMobile[i].addEventListener('touchend',()=>{
        menuRrssMobile[i].classList.remove('scale-1-1');
    });
}

btnMobile.addEventListener('click',()=>{
    menuMobile.classList.remove('invisible');

});
btnExitMobile.addEventListener('click', ()=>{
    menuMobile.classList.add('invisible');

});

let scrollPos= 0;
window.scrollBy(0, {
    behavior: 'smooth'
})
window.addEventListener('scroll',(e)=>{
    if ((window.scrollY > scrollPos && (window.scrollY < 81))  ){
            document.querySelector('header').style.height= (141 - window.scrollY) + 'px';
    }
    if(window.scrollY > 20 && !(rrssDesktop.classList[1] == "opacity-0")){
        rrssDesktop.classList.add('opacity-0');
            rrssDesktop.classList.add('invisible');

    }
    if(window.scrollY > scrollPos){
        if(document.querySelector('header').clientHeight < 120){
            document.querySelector('.header__logo').classList.add('invisible');
           document.querySelector('header').style.paddingTop= (80 - document.querySelector('header').clientHeight) + 'px';
           if(document.querySelector('.header__name').classList.contains("opacity-0-NT")) document.querySelector('.header__name').classList.remove('opacity-0-NT');
        }
        if(document.querySelector('header').clientHeight < 110){
            console.log('Nojoda');
            document.querySelector('.header__name').style.width= ( 140 -  document.querySelector('header').clientHeight) + 'px';
        }
        scrollPos= window.scrollY;
    }

    if (window.scrollY < scrollPos){
        console.log(window.scrollY)
        if((window.scrollY < 81)){
            document.querySelector('header').style.height= (141 - window.scrollY) + 'px';
        }
        if(window.scrollY < 20 && window.scrollY == 0){
            rrssDesktop.classList.remove('opacity-0');
            rrssDesktop.classList.remove('invisible');
        }
        if(document.querySelector('header').clientHeight > 120){
            document.querySelector('.header__name').classList.add('opacity-0-NT');
            document.querySelector('.header__logo').classList.remove('invisible');  
        }
        if(document.querySelector('header').clientHeight > 55){
            document.querySelector('.header__name').style.width= (123 - document.querySelector('header').clientHeight ) + 'px';
        }
            scrollPos= window.scrollY;
    }
});

    

   

