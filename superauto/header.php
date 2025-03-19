<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <title>Super Kool</title>
</head>
<body>
        <header class="header">
            <div class="header__izq">
             <div class="header__izq__btn__menu">
                <div class="header__izq__btn__menu--linea"></div>
                <div class="header__izq__btn__menu--linea"></div>
                <div class="header__izq__btn__menu--linea"></div>
             </div>
            
            
             <a href="#" class="header__izq__logo">
                 <img src="<?php echo get_template_directory_uri(); ?>/logo/logo__ska.svg" alt="">
                </a> 
                <nav class="header__izq__nav">
                 <ul class="header__izq__nav__lista">
                    <li class="header__izq__nav__lista__item"><a href="#precios" class="roboto-medium">Precios </a></li>
                  <li class="header__izq__nav__lista__item"><a href="#nosotros" class="roboto-medium">Nosotros</a></li>
                  <li class="header__izq__nav__lista__item"><a href="#contacto" class="roboto-medium">Contacto</a></li>

                 </ul>
                </nav>
            </div>
            <div class="header__der">
             <div class="header__der__rrss">
                 <ul class="header__der__rrss__lista">
                    <li class="header__der__rrss__lista__item__llamada"><a href="tel:+1 (513) 703-9445"><img src="<?php echo get_template_directory_uri(); ?>/img/phone-solid.svg" alt=""></a>
                    <p class="header__der__rrss__lista__item__llamada__tooltip">Comunicate con nosotros para obtener informacion en ingles</p></li>
                     <li class="header__der__rrss__lista__item"><a href="https://api.whatsapp.com/send?phone=16018171632" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt=""></a></li>
                     <li class="header__der__rrss__lista__item"><a href="https://t.me/SuperKoolAutos" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt=""></a></li>
                     <li class="header__der__rrss__lista__item"><a href="https://www.instagram.com/SuperKoolAutos/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt=""></a></li>
                 </ul>
             </div>
            </div>
            <?php wp_head(); ?>
         </header>