<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/pagina-viajes/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=pagina-viajes&preview_layout=index.php&content_id=0

*/
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{content_meta_title}</title>
    <meta property="og:title" content="{content_meta_title}" />
    <meta name="keywords" content="{content_meta_keywords}" />
    <meta name="description" content="{content_meta_description}" />
    <meta property="og:type" content="{og_type}" />
    <meta property="og:url" content="{content_url}" />
    <meta property="og:image" content="{content_image}" />
    <meta property="og:description" content="{og_description}" />
    <meta property="og:site_name" content="{og_site_name}" />
    <link rel="stylesheet" href="<?php print template_url(); ?>css/stylo.css">
    <link rel="stylesheet" href="<?php print template_url(); ?>css/swiper.css">

     <!-- ===== Fontawesome CDN Link ===== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

     <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
    </script>
    </head>
<body>

<div class="edit" field="pagina-viajes" rel="content">
  
<div class="ifanel-contenedor-popup oculto">
    <div class="ifanel-popup">
      <img src="<?php print template_url(); ?>recursos/POP-UP/ilustracion_vectores.svg" alt="" class="ifanel-popup-img">
    <h2 class="ifanel-popup__titulo ifanel-blanco">&iexcl;REGISTRATE AHORA!</h2>
      <!--<form action="">
        <input type="text" class="ifanel-popup__input " placeholder="Nombre y Apellido">
        <input type="tel"  class="ifanel-popup__input " placeholder="Telefono">
        <input type="email" class="ifanel-popup__input " placeholder="Email">
        <button class="ifanel-boton-2 ifanel-blanco width-100">Estás a sólo un paso de convertir viajes caros en viajes low cost</button>
    </form> -->
    <module type="contact_form" template="popup-viajes"/>
    <i class="fa-solid fa-xmark ifanel-popup-x" onclick="quitar()"></i>
     </div>
  </div>



    <section class="ifanel-seccion-1">
  <h2 class="ifanel-seccion-1__titulo ifanel-blanco ifanel-poppins-bold">&iquest;Cómo consigo viajar <br>
    a un precio ridículo <br>
    en temporada alta?</h2>
<p class="ifanel-seccion-1__parrafo ifanel-blanco ifanel-poppins-medium">Dar la vuelta al mundo sin arruinarte <br>
es posible</p>
   <!--     <a href="#form" class="ifanel-azul-poco-oscuro font-size-1-2  ifanel-poppins-regular"><button class="ifanel-boton ifanel-poppins-regular">¿Quieres viajar sin dejarte un ojo de la cara?</button></a>
-->
    <a href="#form" class="ifanel-azul-poco-oscuro font-size-1-2  ifanel-poppins-regular"><module type="btn" button-style="ifanel-boton" text="¿Quieres viajar sin dejarte un ojo de la cara?" /></a>
</section>
    <section class="ifanel-seccion-2">
        <h2 class="ifanel-seccion-2__titulo ifanel-verde ifanel-poppins-bold">Si te encanta viajar, pero tu bolsillo <br>
        no acompaña a tus ganas,</h2>
        <p class="ifanel-seccion-2__parrafo ifanel-negro ifanel-poppins-medium">Quiero decirte que no te desanimes. Hace unos años, a mi también me pasaba. <br>
        Queria descubrir hasta el último rincón del planeta, pero casi todo mi presupuesto <br>
    se iba en los billetes del avión.</p>
    </section>
    <section class="ifanel-seccion-3">
         <div class="ifanel-seccion-3__izquierda"> <!--Position relative-->
             <img src="<?php print template_url(); ?>recursos/imagenes/03_ESTRATEGIAS/Background.png"      class="ifanel-seccion-3__izquierda__hombre" alt="">
             <img src="<?php print template_url(); ?>recursos/imagenes/03_ESTRATEGIAS/AVION_MAPA.png" class="ifanel-seccion-3__izquierda__avion" alt="">
         </div>
         <div class="ifanel-seccion-3__derecha">
            <h2 class="ifanel-seccion-3__derecha__titulo ifanel-blanco ifanel-poppins-bold">10 Estrategias que <br>
            funcionan para <br>
        (casi) no gastar <br>
    dinero al viajar</h2>
            <p class="ifanel-seccion-3__derecha__parrafo ifanel-blanco ifanel-poppins-medium">Una de las primeras estrategias que puse <br>
            en practica fue la de trabajar a cambio de <br>
        alojamiento. Y es que, en temporada alta, <br>
    siempre hay alguien buscando una mano <br>
extra en su negocio.</p>
           <!-- <button class="ifanel-boton ifanel-verde font-size-1 ifanel-poppins-regular">Haz click justo aquí para conseguir todos los trucos.      </button>-->
            <module type="btn" button-style="ifanel-boton ifanel-verde font-size-1 ifanel-poppins-regular" text="Haz click justo aquí para conseguir todos los trucos." />
        </div>
    </section>
    <section  class="ifanel-seccion-4">
           <h2 class="ifanel-seccion-4__titulo ifanel-verde ifanel-poppins-bold">Viajar sin dejarte el sueldo  en el intento <br> es posible, si sabes cómo</h2>
           <p  class="ifanel-seccion-4__parrafo ifanel-negro ifanel-poppins-medium">Una de las primeras estrategias que puse en práctica es tan sencilla como eficaz, y sólo te va a llevar 10 <br> segundos y 2 clicks.
    se redujo enormemente.</p>
           <img src="<?php print template_url(); ?>recursos/imagenes/04_POR_EJEMPLO/LINEAS_SEGMENTADAS_AVION_DE_PAPEL.svg" alt="" class="ifanel-seccion-4__img">
        </section>
'
        <section class="ifanel-seccion-5">
          <div class="ifanel-seccion-5__izquierda">
            <p class="ifanel-seccion-5__izquierda__parrafo ifanel-blanco ifanel-poppins-medium">Lo que la mayoría de la gente no sabe <br>
                es que podrían ahorrar bastante dinero <br>
                adoptando un nuevo hábito a la hora <br>
                de reservar un vuelo o un hotel.</p>
                <h2 class="ifanel-seccion-5__izquierda__titulo ifanel-blanco ifanel-poppins-bold">Te hablo de poner <br>
                    el navegador en <br>
                    modo de incógnito.</h2>
          </div>
          <div class="ifanel-seccion-5__derecha">
          </div>
          <img src="<?php print template_url(); ?>recursos/imagenes/05_MODO_INCOGNITO/MODO_INCOGNITO.svg" alt="" class="ifanel-seccion-5__incognito">
        </section>
        
        <section class="ifanel-seccion-6">
             <div class="ifanel-seccion-6__img">
            </div>
            <img src="<?php print template_url(); ?>recursos/imagenes/06/LINEAS_SEGMENTADAS_AZULES.svg" alt="" class="ifanel-seccion-6__img__lineas">
             <div class="ifanel-seccion-6__texto">
                <p class="ifanel-seccion-6__texto__parrafo ifanel-negro ifanel-poppins-medium">La diferencia con el modo incógnito es que no se <br> instala ninguna cookie, por lo que siempre <br> apareces como un usuario nuevo y eres capaz <br> de ver todas esas ofertas que te estarías <br> perdiendo en el modo normal.</p>
                <p class="ifanel-seccion-6__texto__parrafo ifanel-negro ifanel-poppins-medium">Esta cookie viene a decirle a la pagina "oye, <br>
                que este ya ha venido antes por aqui y esta <br>
            interesado en comprar, asi que no hace <br>
        falta que le pongas una oferta en pantalla".</p>
      <!--  <button class="ifanel-boton-2 ifanel-blanco ifanel-poppins-regular">&iquest;QUIERES SABER COMO&quest;</button> -->
        <module type="btn" button-style="ifanel-boton-2 ifanel-blanco ifanel-poppins-regular" text="¿QUIERES SABER COMO?" />
             </div>
        </section>

       <section class="ifanel-seccion-7">
        <div class="ifanel-seccion-7__izquierda">
            <h2 class="ifanel-seccion-7__izquierda__titulo ifanel-blanco ifanel-poppins-bold">Éste es sólo un <br>
            ejemplo basico de <br>
        como ahorrar dinero <br>
    viajando.</h2>
            <p class="ifanel-seccion-7__izquierda__parrafo ifanel-blanco ifanel-poppins-medium">Si quieres descargar la guía completa <br>
            (con trucos más avanzados), sólo tienes <br>
        que rellenar este formulario para que <br>
    sepa a qué email tengo que enviarla.</p>
        </div>
        <div class="ifanel-seccion-7__derecha">
           <!-- <form action="" id="form">
                <input type="text" class="ifanel-seccion-7__derecha__input ifanel-negro" placeholder="Nombre y Apellido">
                <input type="tel"  class="ifanel-seccion-7__derecha__input ifanel-negro" placeholder="Telefono">
                <input type="email"class="ifanel-seccion-7__derecha__input ifanel-negro" placeholder="Email">
                <button class="ifanel-boton ifanel-naranja ifanel-poppins-regular font-size-1-2">Estás a sólo un paso de convertir viajes caros en viajes low cost</button>
            </form> -->
            <module type="contact_form" template="formulario-viajes"/>
        </div>
       </section>

      
</div>

       <section class="ifanel-seccion-8">
           <h2 class="ifanel-seccion-8__titulo ifanel-verde ifanel-poppins-bold">&iquest;Qué opinan quienes <br>
            ya han leído la guía?</h2>
           <div class="ifanel-seccion-8__carrusel">
            <div class="ifanel-swiper ifanel-mySwiper container">
                <div class="ifanel-swiper-wrapper content">
          
                  <div class="ifanel-swiper-slide card">
                    <div class="card-content">
                     
                        <article class="ifanel-seccion-8__articulo">
                            <img src="<?php print template_url(); ?>recursos/imagenes/08_OPINIONES/FORMULARIO_1-100.jpg" alt="" class="ifanel-seccion-8__articulo__img">
                            <h3 class="ifanel-seccion-8__articulo__nombre ifanel-azul-poco-oscuro ifanel-poppins-semibold">Juan Pérez</h3>
                            <p class="ifanel-seccion-8__articulo__testimonio ifanel-negro ifanel-poppins-regular">Excelentes consejos, la verdad <br>
                                es que no había pensado <br>
                                que fuera tan facil.
                            </p>
                        </article>
                    </div>
                  </div>
                   
                  <div class="ifanel-swiper-slide card">
                    <div class="card-content">
                     
                        <article class="ifanel-seccion-8__articulo">
                            <img src="<?php print template_url(); ?>recursos/imagenes/08_OPINIONES/FORMULARIO_2-100.jpg" alt="" class="ifanel-seccion-8__articulo__img">
                            <h3 class="ifanel-seccion-8__articulo__nombre ifanel-azul-poco-oscuro ifanel-poppins-semibold">Marta Garcia</h3>
                            <p class="ifanel-seccion-8__articulo__testimonio ifanel-negro ifanel-poppins-regular">Reconozco que era algo <br> escéptica
                               al principio, pero <br> en cuanto lo  
                            pones en práctica <br>, funciona.</p>
                        </article>
                    </div>
                  </div>
                  <div class="ifanel-swiper-slide card">
                    <div class="card-content">
                     
                        <article class="ifanel-seccion-8__articulo">
                            <img src="<?php print template_url(); ?>recursos/imagenes/08_OPINIONES/FORMULARIO_3-100.jpg" alt="" class="ifanel-seccion-8__articulo__img">
                            <h3 class="ifanel-seccion-8__articulo__nombre ifanel-azul-poco-oscuro ifanel-poppins-semibold">Marcos y Maria</h3>
                            <p class="ifanel-seccion-8__articulo__testimonio ifanel-negro ifanel-poppins-regular">Muy recomendable, sobre todo el <br> alto nivel de información. <br> Además, resolvieron todas <br> nuestras dudas muy deprisa
                            </p>
                        </article>
                    </div>
                  </div>
                 
                </div>
              </div>
                <div class="ifanel-swiper-button-next">
                    <img src="<?php print template_url(); ?>recursos/imagenes/08_OPINIONES/BOTON_SIGUIENTE.svg" alt="" class="ifanel-swiper-button-next_img">
                </div>
              <div class="ifanel-swiper-button-prev">
                <img src="<?php print template_url(); ?>recursos/imagenes/08_OPINIONES/BOTON_SIGUIENTE.svg" alt="" class="ifanel-swiper-button-prev_img">
              </div>
           </div>
       <img src="<?php print template_url(); ?>recursos/imagenes/08_OPINIONES/NUBES_AZULES.svg" alt="" class="ifanel-seccion-8__nubes">
        </section>

     <footer class="ifanel-seccion-9">
   <div class="ifanel-seccion-9__arriba">
    <a href="#" class="ifanel-seccion-9__arriba__a ifanel-blanco">Términos y condiciones</a>
    <a href="#" class="ifanel-seccion-9__arriba__a ifanel-blanco">Política de privacidad</a>
    <a href="#" class="ifanel-seccion-9__arriba__a ifanel-blanco">Política de cookies</a>
   </div>
   <div class="ifanel-seccion-9__abajo">
   <p class="ifanel-blanco">Todos los derechos reservados
   </p>
   </div>
     </footer>
        <!-- Swiper JS -->
<script src="<?php print template_url(); ?>js2.js"></script>
<script src="<?php print template_url(); ?>pop-up.js"></script>
<!-- Initialize Swiper -->
<script >
  var swiper = new Swiper(".ifanel-mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".ifanel-swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".ifanel-swiper-button-next",
      prevEl: ".ifanel-swiper-button-prev",
    },
  });
</script>
</div>
</body>
</html>