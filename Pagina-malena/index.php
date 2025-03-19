<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/pagina-malena/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=pagina-malena&preview_layout=index.php&content_id=0
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

     <!-- ===== Link Swiper's CSS ===== -->
     <link rel="stylesheet" href="<?php print template_url(); ?>css/swiper.css"/>

     <!-- ===== Fontawesome CDN Link ===== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

     <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
    </script>

    </head>
<body>

<div class="edit" field="pagina-malena" rel="content">

</div>

    <div class="ifanel-Linea-verde"></div>
    <section class="ifanel-seccion-1">
        <div class="ifanel-seccion-1__izquierda">
            <h2 class="ifanel-seccion-1__izquierda__titulo ifanel_verde-oscuro ifanel-general-sans-bold">Come bien hoy para <br>
            vivir mejor mañana</h2>
            <p class="ifanel-seccion-1__izquierda__parrafo ifanel-general-sans-medium ifanel-gris">Mejorar tu alimentación en 20 dias <br>
            es posible y nosotros te vamos a <br>
        enseñar cómo</p>

       <!-- <button class="ifanel-boton ifanel-blanco ifanel-inter-medium">Aprende a comer bien para sentirme mejor</button>-->
        <module type="btn" button-style="ifanel-boton ifanel-blanco ifanel-inter-medium" text="Aprende a comer bien para sentirme mejor" />   
    </div>
        <div class="ifanel-seccion-1__derecha">
            <img src="<?php print template_url(); ?>recursos/IMAGENES/Capa 1.png" alt="" class="ifanel-seccion-1__derecha__img">
        </div>
    </section>
   
   
   <section class="ifanel-seccion-2">
        <p class="ifanel-seccion-2__parrafo ifanel-inter-medium  ifanel-gris">La mala alimentación es un asesino que no hace distinciones. La mayoría de nosotros no 
        somos conscientes de lo que comemos. No nos paramos a pensar en qué macronutrientes 
    lleva tal o cual alimento, ni si tomamos sufientes vitaminas.</p>

    <div class="ifanel-seccion-2__imagen-dos">
        <img src=" <?php print template_url(); ?>recursos/IMAGENES/Capa-2.png" alt="" class="ifanel-seccion-2__imagen-dos__imagen">
        <div class="ifanel-seccion-2__imagen-dos__texto">
           <p class="ifanel-seccion-2__imagen-dos__texto__parrafo ifanel-inter-medium  ifanel-gris" >Nos pasa a todos y va a influir en <br>
        que suframos enfermedades graves <br>
    en el futuro.</p>
           <p class="ifanel-seccion-2__imagen-dos__texto__parrafo ifanel-inter-medium  ifanel-gris">No queremos asustarte, sólo que <br>
        seas consciente del papel que juega <br>
    la alimentación en tu salud.</p>
   <!-- <button class="ifanel-boton ifanel-blanco ifanel-inter-medium">¿Cómo puedo mejorar mi dieta?</button>-->
    <module type="btn" button-style="ifanel-boton ifanel-blanco ifanel-inter-medium" text="¿Cómo puedo mejorar mi dieta?" />
        </div>
    </div>
    <p class="ifanel-seccion-2__parrafo-2 ifanel-general-sans-bold ifanel_verde-oscuro">&iquest;Es posible cambiar tus hábitos alimenticios en 20 días&quest;</p>
    <p class="ifanel-seccion-2__parrafo-3 ifanel-inter-medium  ifanel-gris">Mi experiencia nos dice que sí, aunque sólo si sabes como. Y eso justamente es lo que te va 
    a explicar el plan de 20 días que he diseñado. En él&colon;
</p>
<div class="ifanel-seccion-2__cartas">
    <div class="ifanel-seccion-2__cartas__card">
        <img src="<?php print template_url(); ?>recursos/ICONOS/ICONOS/manzana 1.png" alt="" class="ifanel-seccion-2__cartas__card__img">
        <p class="ifanel-seccion-2__cartas__card__parrafo ifanel-inter-medium  ifanel-gris">Te explicaremos qué <br>
        alimentos son <br>
    nutritivamente adecuados <br>
y cuáles te van a alejar de <br>
tus resultados.</p>
    </div>
    <div class="ifanel-seccion-2__cartas__card">
        <img src="<?php print template_url(); ?>recursos/ICONOS/ICONOS/cooking 1.png" alt="" class="ifanel-seccion-2__cartas__card__img">
        <p class="ifanel-seccion-2__cartas__card__parrafo ifanel-inter-medium  ifanel-gris">Aprenderás recetas <br>
        saludables para que la <br>
    dieta no se te haga cuesta <br>
arriba.</p>
    </div>
    <div class="ifanel-seccion-2__cartas__card">
        <img src="<?php print template_url(); ?>recursos/ICONOS/ICONOS/bascula 1.png" alt="" class="ifanel-seccion-2__cartas__card__img">
        <p class="ifanel-seccion-2__cartas__card__parrafo ifanel-inter-medium  ifanel-gris">Tendrás acceso a nuestra <br>
        plataforma, donde podrás <br>
    registrar tu peso, tus <br>
medidas y las calorías <br>
ingeridas.</p>
    </div>
</div>
<div class="ifanel-seccion-2__cartas">
    <div class="ifanel-seccion-2__cartas__card">
        <img src="<?php print template_url(); ?>recursos/ICONOS/ICONOS/community 1.png" alt="" class="ifanel-seccion-2__cartas__card__img">
        <p class="ifanel-seccion-2__cartas__card__parrafo ifanel-inter-medium  ifanel-gris">Podrás formar parte de una <br>
        comunidad con tus <br>
    mismos objetivos.</p>
    </div>
    <div class="ifanel-seccion-2__cartas__card">
        <img src="<?php print template_url(); ?>recursos/ICONOS/ICONOS/estetoscopio 1.png" alt="" class="ifanel-seccion-2__cartas__card__img">
        <p class="ifanel-seccion-2__cartas__card__parrafo ifanel-inter-medium  ifanel-gris">Llevaré un seguimiento de <br>
        tus progresos para poder <br>
    hacer modificaciones en tu <br>
 dieta para aprovecha al <br>
máximo los 20 días </p>
    </div>
    <div class="ifanel-seccion-2__cartas__card-verde">
        <p class="ifanel-seccion-2__cartas__card-verde__parrafo ifanel-inter-medium ifanel-blanco">Quiero cambiar mis <br>
             hábitos alimenticios <br>
            en 20 días. </p>
        <img src="<?php print template_url(); ?>recursos/SVGS/Derecha.svg" alt="" class="ifanel-seccion-2__cartas__card-verde__img">
        </div>
</div>
</section>

<section class="ifanel-seccion-3">
    <p class="ifanel-seccion-3__parrafo ifanel_verde-oscuro ifanel-general-sans-bold">Empieza a mejorar tu salud hoy mismo</p>
    <div class="ifanel-seccion-3__contenedor ifanel-inter-medium">
        <div class="ifanel-seccion-3__contenedor__izquierda  ifanel-gris">
            <p class="ifanel-seccion-3__contenedor__izquierda__parrafo  ifanel-inter-medium">Para ello, sólo tienes que rellenar este formulario <br>
                y, en cuanto te hayas dado a &quot;enviar&quot; recibirás <br>
                en la bandeja de entrada de tu correo <br>
                electrónico el plan de 20 días que cambiará tu <br>
                vida.</p>
             <!--<form action="" class="ifanel-seccion-3__contenedor__izquierda__form">
                <input type="text" name="" id="" class="ifanel-seccion-3__contenedor__izquierda__form__nombre" placeholder="Nombre">
                <input type="email" name="" id="" class="ifanel-seccion-3__contenedor__izquierda__form__email" placeholder="Correo electronico">
                <textarea name="" id="" cols="30" rows="5" class="ifanel-seccion-3__contenedor__izquierda__form__mensaje" placeholder="Mensaje (opcional)"></textarea>
                <div class="ifanel-seccion-3__contenedor__izquierda__form__boton">
                    <button type="submit" class="ifanel-boton ifanel-blanco ifanel-inter-medium">¡Voy a mejorar mi dieta! </button>
                    
                </div>
              </form> -->
              <module type="contact_form" template="nutricion-1"/>
        </div>
        <div class="ifanel-seccion-3__contenedor__derecha">
            <img src="<?php print template_url(); ?>recursos/IMAGENES/Capa-3.png" alt="" class="ifanel-seccion-3__contenedor__derecha__img">
        </div> 
    </div>
</section>

<p class="ifanel-parrafo__carrusel ifanel_verde-oscuro ifanel-general-sans-bold">
  &iquest;Qué opinan quienes han recibido la lista con los 10 trucos&quest;
</p>
<section>
    <div class="ifanel-seccion-3__carrusel">

        <div class="ifanel-swiper ifanel-mySwiper container">
            <div class="ifanel-swiper-wrapper content">
      
              <div class="ifanel-swiper-slide card">
                <div class="card-content">
                  <div class="ifanel-carrusel-nombre-image">
                    <img src="<?php print template_url(); ?>recursos/IMAGENES/Ellipse 1@2x.png" alt="" class="ifanel-carrusel-nombre-image__img">
                    <p class="ifanel-seccion-3__carrusel__nombre ifanel_verde-oscuro ifanel-general-sans-bold">Jose Álvarez</p>
                  </div>
                  <p class="ifanel-seccion-3__carrusel__parrafo ifanel-gris ifanel-inter-medium">Sin duda, muy recomendable, las tablas <br>
                    nutrición se adaptan muy bien a cada <br>
                persona además los resultados son <br>
            visibles en seguida respecto al modo de vida.</p>
                  <div class="ifanel-seccion-3__carrusel__estrellas">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido"> 
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                  </div>
                  
                </div>
              </div>
              
              <div class="ifanel-swiper-slide card">
                <div class="card-content">
                  <div class="ifanel-carrusel-nombre-image">
                    <img src="<?php print template_url(); ?>recursos/IMAGENES/Ellipse 2@2x.png" alt="" class="ifanel-carrusel-nombre-image__img">
                    <p class="ifanel-seccion-3__carrusel__nombre ifanel_verde-oscuro ifanel-general-sans-bold">Pedro Alonso</p>
                  </div>
                  <p class="ifanel-seccion-3__carrusel__parrafo ifanel-gris ifanel-inter-medium">Sin duda, muy recomendable, las tablas <br>
                    nutrición se adaptan muy bien a cada <br>
                persona además los resultados son <br>
            visibles en seguida respecto al modo de vida.</p>
                  <div class="ifanel-seccion-3__carrusel__estrellas">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                  </div>
                  
                </div>
              </div>

              <div class="ifanel-swiper-slide card">
                <div class="card-content">
                  <div class="ifanel-carrusel-nombre-image">
                    <img src="<?php print template_url(); ?>recursos/IMAGENES/Ellipse 3@2x.png" alt="" class="ifanel-carrusel-nombre-image__img">
                    <p class="ifanel-seccion-3__carrusel__nombre ifanel_verde-oscuro ifanel-general-sans-bold">Mónica Sánchez</p>
                  </div>
                  <p class="ifanel-seccion-3__carrusel__parrafo ifanel-gris ifanel-inter-medium">Sin duda, muy recomendable, las tablas <br>
                    nutrición se adaptan muy bien a cada <br>
                persona además los resultados son <br>
            visibles en seguida respecto al modo de vida.</p>
                  <div class="ifanel-seccion-3__carrusel__estrellas">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                  </div>
                  
                </div>
              </div>
              <div class="ifanel-swiper-slide card">
                <div class="card-content">
                  <div class="ifanel-carrusel-nombre-image">
                    <img src="<?php print template_url(); ?>recursos/IMAGENES/Ellipse 1@2x.png" alt="" class="ifanel-carrusel-nombre-image__img">
                    <p class="ifanel-seccion-3__carrusel__nombre ifanel_verde-oscuro ifanel-general-sans-bold">Jose Álvarez</p>
                  </div>
                  <p class="ifanel-seccion-3__carrusel__parrafo ifanel-gris ifanel-inter-medium">Sin duda, muy recomendable, las tablas <br>
                    nutrición se adaptan muy bien a cada <br>
                persona además los resultados son <br>
            visibles en seguida respecto al modo de vida.</p>
                  <div class="ifanel-seccion-3__carrusel__estrellas">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido"> 
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                  </div>
                  
                </div>
              </div>
              
              <div class="ifanel-swiper-slide card">
                <div class="card-content">
                  <div class="ifanel-carrusel-nombre-image">
                    <img src="<?php print template_url(); ?>recursos/IMAGENES/Ellipse 2@2x.png" alt="" class="ifanel-carrusel-nombre-image__img">
                    <p class="ifanel-seccion-3__carrusel__nombre ifanel_verde-oscuro ifanel-general-sans-bold">Pedro Alonso</p>
                  </div>
                  <p class="ifanel-seccion-3__carrusel__parrafo ifanel-gris ifanel-inter-medium">Sin duda, muy recomendable, las tablas <br>
                    nutrición se adaptan muy bien a cada <br>
                persona además los resultados son <br>
            visibles en seguida respecto al modo de vida.</p>
                  <div class="ifanel-seccion-3__carrusel__estrellas">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                  </div>
                  
                </div>
              </div>

              <div class="ifanel-swiper-slide card">
                <div class="card-content">
                  <div class="ifanel-carrusel-nombre-image">
                    <img src="<?php print template_url(); ?>recursos/IMAGENES/Ellipse 3@2x.png" alt="" class="ifanel-carrusel-nombre-image__img">
                    <p class="ifanel-seccion-3__carrusel__nombre ifanel_verde-oscuro ifanel-general-sans-bold">Mónica Sánchez</p>
                  </div>
                  <p class="ifanel-seccion-3__carrusel__parrafo ifanel-gris ifanel-inter-medium">Sin duda, muy recomendable, las tablas <br>
                    nutrición se adaptan muy bien a cada <br>
                persona además los resultados son <br>
            visibles en seguida respecto al modo de vida.</p>
                  <div class="ifanel-seccion-3__carrusel__estrellas">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                    <img src="<?php print template_url(); ?>recursos/SVGS/Estrella.svg" alt="" class="ifanel-seccion-3__carrusel__estrellas__contenido">
                  </div>
                  
                </div>
              </div>
             
            </div>
          </div>
            <div class="ifanel-gradiente-izq"></div>
            <div class="ifanel-gradiente-der"></div>
            <div class="ifanel-swiper-button-next"></div>
          <div class="ifanel-swiper-button-prev"></div>
    </div>
   <div class="ifanel-seccion-3__boton-2"> 
    <!--<button class="ifanel-boton ifanel-blanco ifanel-inter-medium">Quiero acceder al plan </button>-->
    <module type="btn" button-style="ifanel-boton ifanel-blanco ifanel-inter-medium" text="Quiero acceder al plan" />    
</div>
</section>

<footer class="ifanel__footer">
  <div class="ifanel__footer__arriba">
    <a href="" class="ifanel-blanco ifanel-inter-medium">Politica de Cookies</a>
    <a href="" class="ifanel-blanco ifanel-inter-medium">Politica de Privacidad</a>
    <a href="" class="ifanel-blanco ifanel-inter-medium">Terminos Legales</a>
  </div>
    <p class="ifanel__footer__derechos ifanel-blanco ifanel-inter-medium">@ Todos los derechos reservados</p>
</footer>





<!-- Swiper JS -->
<script src="<?php print template_url(); ?>js2.js"></script>

<!-- Initialize Swiper -->
<script>
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
  });</script>

</body>
</html>