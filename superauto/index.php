<?php get_header(); ?>

<div class="menu-desplegable invisible">
        <div class="menu-desplegable__fondo"></div>
        
        
        <div class="menu-desplegable__menu">
            <div class="menu-desplegable__menu__contenedor-salir">
                <img src="<?php echo get_template_directory_uri(); ?>/img/circle-xmark-solid.svg" alt="" class="menu-desplegable__menu__contenedor-salir__btn">
            </div>
            <ul class="menu-desplegable__menu__lista">
                <li class="menu-desplegable__menu__lista__item"><a href="#precios" class="roboto-medium">Precios</a></li>
            <li class="menu-desplegable__menu__lista__item"><a href="#nosotros" class="roboto-medium">Nosotros</a> </li>
            <li class="menu-desplegable__menu__lista__item"><a href="#contacto" class="roboto-medium">Contacto</a></li>   
        </ul>
        </div>
 </div>

 <section class="banner-principal" >
          <div class="banner-principal__background"></div>
        <div class="banner-principal__info">
            <h1 class="banner-principal__info__titulo roboto-bold">Super Kool <br> Autos LLC            </h1>
            <p class="banner-principal__info__parrafo roboto-medium">Auction Brokers & Car Dealership</p>
            <p class="banner-principal__info__parrafo roboto-medium">Si estas buscando comprar autos directo de la subasta <br> o algun vehiculo para financiar estás en el lugar indicado. </p>
        </div>
    </section>
    <section class="precios" id="precios">
         <h2 class="precios__titulo roboto-bold">FEES BROKER</h2>
         <div class="precios__mostrar">
            <p class="precios__mostrar__parrafo roboto-medium"><span class="precios__mostrar__parrafo-span-1">$700 </span>para compras hasta<strong> $10,000</strong></p>
            <p class="precios__mostrar__parrafo roboto-medium"><span class="precios__mostrar__parrafo-span-1">$750 </span> para compras de<strong> $10,001 a $15,000</strong></p>
            <p class="precios__mostrar__parrafo roboto-medium"><span class="precios__mostrar__parrafo-span-1">$850 </span> para compras de<strong> $15,001 a $20,000</strong></p>
            <p class="precios__mostrar__parrafo roboto-medium"><span class="precios__mostrar__parrafo-span-1">$950 </span>para compras de<strong> $20,001 a $25,000</strong></p>
            <p class="precios__mostrar__importante roboto-medium"> <strong>IMPORTANTE:</strong> Los montos de los honorarios aumentan $50 en cada $5.000 adicionales de inversion. </p> 
        </div>
         <div class="contenedor--btn">
            <button class="contenedor--btn__btn roboto-bold">COMPRAS WHOLESALE</button>
            <button class="contenedor--btn__btn roboto-bold">COMPRAS RETAIL</button>
         </div>
         <h2 class="precios__titulo roboto-bold">INFORMACION <br><span class="precios__titulo__span">IMPORTANTE</span></h2>
        <div class="precios__mostrar">
            <ul class="precios__mostrar__lista">
                <li class="precios__mostrar__lista__item roboto-medium">El pago de la grúa & envío de título es <strong>adicional.</strong></li>
                <li class="precios__mostrar__lista__item roboto-medium">El título puede demorar hasta 30 días después de realizada la compra <strong>(por políticas del sistema de subastas)</strong></li>
                <li class="precios__mostrar__lista__item roboto-medium">Nuestras asesorías para compras son únicamente mediante WhatsApp</li>
            </ul>
        </div>
    </section>
    <section class="nosotros" id="nosotros">
       <div class="nosotros__izq">
        <h2 class="nosotros__izq__titulo roboto-bold">DEALER & BROKER</h2>
        <p class="nosotros__izq__parrafo roboto-light">Localizados en Miami Florida, con orgullo por lo que <br> hacemos y cómo lo hacemos, te asesoramos con tus <br> compras directamente en la subasta y también <br> contamos con un amplio inventario de vehiculos para <br> compras financiadas, proporcionamos la mejor oferta <br> en precios y calidad además de la seguridad de la <br> gestión de forma inigualable.</p>
       </div>
       <div class="nosotros__der">
        <h2 class="nosotros__der__titulo roboto-bold">HORARIOS</h2>
        <ul class="nosotros__der__lista">
            <li class="nosostros__der__lista__item roboto-light"><p>LUNES:  9AM- 6PM    </p></li>
            <li class="nosostros__der__lista__item roboto-light"><p>MARTES: 9AM- 6PM    </p> </li>
            <li class="nosostros__der__lista__item roboto-light"><p>MIERCOLES: 9AM- 6PM </p> </li>
            <li class="nosostros__der__lista__item roboto-light"><p>JUEVES:   9AM- 6PM  </p> </li>
            <li class="nosostros__der__lista__item roboto-light"><p>VIERNES:    9AM- 6PM</p>   </li>
            <li class="nosostros__der__lista__item roboto-light"><p>SABADO:  9AM- 6PM   </p> </li>
            <li class="nosostros__der__lista__item roboto-light"><p>DOMINGO: CERRADO   </p></li>
        </ul>
       </div>
    </section>
    <section class="contacto" id="contacto">
  <h2 class="contacto__titulo roboto-bold">CONTACTANOS EN </h2>
  <div class="contacto__rrss">
    <div class="contacto__rrss__elemento__llamada"><img src="<?php echo get_template_directory_uri(); ?>/img/phone-solid.svg" alt=""><p class="roboto-medium">Call in English <a href="tel:+15137039445">+1 (513) 703-9445</a></p><p class="roboto-medium">Llamadas en Español<a href="tel:+16018171632">+1 (601) 817-1632</a></p></div>
   <div class="contacto__rrss__elemento"><a href="mailto:info@superkoolautos.com"><img src="<?php echo get_template_directory_uri(); ?>/img/envelope-regular.svg" alt=""></a><p class="roboto-medium">info@superkoolautos.com</p></div>
   <div class="contacto__rrss__elemento"><a href="https://www.instagram.com/SuperKoolAutos/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt=""> </a>      <p class="roboto-medium">@SuperKoolAutos</p></div>
   <div class="contacto__rrss__elemento"><a href="https://t.me/SuperKoolAutos" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt=""> </a>              <p class="roboto-medium">@SuperKoolAutos</p></div>
   <div class="contacto__rrss__elemento"><a href="https://api.whatsapp.com/send?phone=16018171632" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt=""></a>               <p class="roboto-medium">+1 (601) 817-1632 </p></div>
  </div>
    </section>
<?php get_footer(); ?>