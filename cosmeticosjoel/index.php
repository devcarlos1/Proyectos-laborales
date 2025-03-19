<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/cosmeticosjoel/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=cosmeticosjoel&preview_layout=index.php&content_id=0
*/
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{content_meta_title}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="{content_meta_title}" />
    <meta name="keywords" content="{content_meta_keywords}" />
    <meta name="description" content="{content_meta_description}" />
    <meta property="og:type" content="{og_type}" />
    <meta property="og:url" content="{content_url}" />
    <meta property="og:image" content="{content_image}" />
    <meta property="og:description" content="{og_description}" />
    <meta property="og:site_name" content="{og_site_name}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php print template_url(); ?>css/style.css">

    <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
    </script>

</head>

<body>
    <div class="edit" field="cosmeticos-joel" rel="content">
        <section class="ifanel-section--1 ifanel-fondo-azul-claro">
            <div class="ifanel-section--1__izquierda">
                <h1 class="ifanel-section--1__izquierda__titulo-1 ifanel-blanco ifanel-anthemia-regular">Cuida tu piel</h1>
                <h2 class="ifanel-section--1__izquierda__titulo-2 ifanel-blanco ifanel-monserrat-regular">COMO UNA</h2>
                <h2 class="ifanel-section--1__izquierda__titulo-3 ifanel-blanco ifanel-monserrat-bold">PROFESIONAL</h2>
                <!--<button class="ifanel-section--1__izquierda__boton ifanel-monserrat-regular  ifanel-blanco">
                ¿QUIERO SABER CÓMO? 
            </button>-->
                <module type="btn" text="¿QUIERO SABER CÓMO? " button-style="ifanel-section--1__izquierda__boton ifanel-monserrat-regular  ifanel-blanco" />
            </div>
            <div class="ifanel-section--1__derecha">
                <img src="<?php print template_url(); ?>imagenes/svg/seccion-1/L1.png" alt="" class="ifanel-section--1__derecha__img">
            </div>
        </section>


        <section class="ifanel-section--2">
            <div class="ifanel-section--2__informacion">
                <p class="ifanel-section--2__informacion__p ifanel-negro-claro ifanel-anthemia-regular">¿Conoces estos 10 trucos que utilizan las maquilladoras
                    profesionales para cuidar la piel de sus clientas?
                </p>
                <!--
             <button class="ifanel-section--2__informacion__boton ifanel-blanco ifanel-monserrat-regular">
                QUIERO SABER CUÁLES SON</button>
           -->
                <module type="btn" text="QUIERO SABER CUÁLES SON" button-style="ifanel-section--2__informacion__boton ifanel-blanco ifanel-monserrat-regular" />
            </div>
        </section>

        <section class="ifanel-section--3">
            <img src="<?php print template_url(); ?>imagenes/svg/seccion-3/imagen formulario.png" alt="" class="ifanel-section--3__img">
            <div class="ifanel-section--3__izquierda">
                <h2 class="ifanel-section--3__izquierda__h2 ifanel-marron-claro ifanel-anthemia-regular">Maquillarse</h2>
                <p class="ifanel-section--3__izquierda__p ifanel-negro-claro ifanel-monserrat-regular">forma parte de la rutina diaria de muchas
                    de nosotras, pero utilizar productos que
                    no son adecuados para nuestro tipo de piel
                    o seguir una rutina de skincare equivocada
                    puede llegar a ser contraproducente
                </p>
                <p class="ifanel-section--3__izquierda__p ifanel-monserrat-regular">
                    He contactado con más de veinte maquilladores
                    profesionales para abordar este tema y en
                    la mayoría de las entrevistas había 10 consejos
                    que se repetían
                </p>
            </div>
            <div class="ifanel-section--3__derecha">
                <pre class="ifanel-section--3__derecha__pre ifanel-anthemia-regular">
Si quieres 
saber cuáles son,
escríbeme tu email 
aquí debajo y te 
los envío hoy mismo.</pre>
                <!--<form action="" method="get" class="ifanel-section--3__derecha__form">
               <input type="email" name="email" id="" placeholder="EMAIL" class="ifanel-section--3__derecha__form__input ifanel-monserrat-regular">
                <button type="submit" class="ifanel-section--3__derecha__form__button ifanel-monserrat-regular ifanel-negro-claro">ENVIAR</button>
            </form>-->
                <module type="contact_form" template="cosmeticos_1" />
            </div>

        </section>

        <section class="ifanel-section--4">
            <div class="ifanel-section--4__titulos">
                <h2 class="ifanel-section--4__titulos__h2 ifanel-negro-claro ifanel-anthemia-regular">Una rutina nocturna que funciona</h2>
                <p class="ifanel-section--4__titulos__parrafo-1 ifanel-negro-claro ifanel-monserrat-regular">Por ejemplo, uno de esos tips que podrás leer de forma gratuita
                    en cuanto te llegue el email a tu bandeja de entrada, tiene que ver
                    con una rutina de skincare nocturna.</p>
                <p class="ifanel-section--4__titulos__parrafo-2 ifanel-marron-claro ifanel-anthemia-regular">Ésta tendrás que realizarla antes de acostarte para relajar tu piel:</p>
            </div>


            <div class="ifanel-section--4__pasos">
                <div class="ifanel-section--4__pasos__img--izq">
                    <div class="ifanel-section--4__pasos__img--izq__izquierda">
                        <img src="<?php print template_url(); ?>imagenes/svg/seccion-4/Imagen Paso 1.png" alt="" class="ifanel-section--4__pasos__img--izq__izquierda__img">
                    </div>
                    <div class="ifanel-section--4__pasos__img--izq__derecha ifanel-negro-claro">
                        <h2 class="ifanel-section--4__pasos__img--izq__derecha__h2 ifanel-anthemia-regular">01</h2>
                        <p class="ifanel-section--4__pasos__img--izq__derecha__p ifanel-anthemia-regular">Primero lava tu cara sólo
                        <pre class="ifanel-section--4__pasos__img--izq__derecha__p ifanel-anthemia-regular">con agua, sin jábon</pre>
                        </p>
                    </div>
                </div>
                <div class="ifanel-section--4__pasos__img--der">
                    <div class="ifanel-section--4__pasos__img--der__izquierda ifanel-negro-claro">
                        <h2 class="ifanel-section--4__pasos__img--der__izquierda__h2 ifanel-anthemia-regular">02</h2>
                        <p class="ifanel-section--4__pasos__img--der__izquierda__p ifanel-anthemia-regular">Después hazte
                        <pre class="ifanel-section--4__pasos__img--der__izquierda__p ifanel-anthemia-regular">un pequeño masaje para</pre>
                        <p class="ifanel-section--4__pasos__img--der__izquierda__p ifanel-anthemia-regular"> estimular la circulación.</p>
                        </p>
                    </div>
                    <div class="ifanel-section--4__pasos__img--der__derecha">
                        <img src="<?php print template_url(); ?>imagenes/svg/seccion-4/Imagen Paso 2.png" alt="" class="ifanel-section--4__pasos__img--der__derecha__img">
                    </div>
                </div>
                <div class="ifanel-section--4__pasos__img--izq">
                    <div class="ifanel-section--4__pasos__img--izq__izquierda">
                        <img src="<?php print template_url(); ?>imagenes/svg/seccion-4/Imagen Paso 3.png" alt="" class="ifanel-section--4__pasos__img--izq__izquierda__img">
                    </div>
                    <div class="ifanel-section--4__pasos__img--izq__derecha ifanel-negro-claro">
                        <h2 class="ifanel-section--4__pasos__img--izq__derecha__h2 ifanel-anthemia-regular">03</h2>
                        <p class="ifanel-section--4__pasos__img--izq__derecha__p ifanel-anthemia-regular">Tras eso,
                        <pre class="ifanel-section--4__pasos__img--izq__derecha__p ifanel-anthemia-regular">aplica un moisturizer</pre>
                        </p>
                    </div>
                </div>
                <div class="ifanel-section--4__pasos__img--der ifanel-negro-claro">
                    <div class="ifanel-section--4__pasos__img--der__izquierda">
                        <h2 class="ifanel-section--4__pasos__img--der__izquierda__h2 ifanel-anthemia-regular">04</h2>
                        <p class="ifanel-section--4__pasos__img--der__izquierda__p ifanel-anthemia-regular">Y finalmente,
                        <pre class="ifanel-section--4__pasos__img--der__izquierda__p ifanel-anthemia-regular">utiliza un aceite esencial.</pre>
                        </p>
                    </div>
                    <div class="ifanel-section--4__pasos__img--der__derecha">
                        <img src="<?php print template_url(); ?>imagenes/svg/seccion-4/Imagen Paso 4.png" alt="" class="ifanel-section--4__pasos__img--der__derecha__img">
                    </div>
                </div>
            </div>
        </section>

        <section class="ifanel-section--5">
            <div class="ifanel-section--5__izquierda">
                <p class="ifanel-section--5__izquierda__p ifanel-negro-claro ifanel-anthemia-regular">Éste es sólo un ejemplo de todo lo que vas a aprender
                    gracias a esos 10 trucos que utilizan los profesionales
                    para cuidar la piel de sus clientes.
                </p>
            </div>
            <div class="ifanel-section--5__derecha">
                <!--<form action="" class="ifanel-section--5__derecha__form">
                <input type="text" placeholder="NOMBRE" class="ifanel-section--5__derecha__form__input ifanel-negro-claro ifanel-monserrat-regular">
                <input type="email" placeholder="EMAIL" class="ifanel-section--5__derecha__form__input ifanel-negro-claro ifanel-monserrat-regular">
                <textarea name="" id="" cols="25" rows="5"  placeholder="MENSAJE" class="ifanel-section--5__derecha__form__textarea ifanel-negro-claro ifanel-monserrat-regular"></textarea>
                <button type="submit" class="ifanel-section--5__derecha__form__button ifanel-monserrat-regular ifanel-blanco">ENVIAR</button>
            </form>-->
                <module type="contact_form" template="cosmeticos_2" />
            </div>
        </section>

        <section class="ifanel-section--6">
            <h2 class="ifanel-section--6__titulo ifanel-negro-claro ifanel-anthemia-regular">
                ¿Qué opinan
                <pre class="ifanel-section--6__titulo__pre ifanel-anthemia-regular">quienes han recibido la lista </pre>
                con los<span> 10</span> trucos?
            </h2>
            <div class="ifanel-section--6__opiniones">
                <article class="ifanel-section--6__opiniones__articulo">
                    <img src="<?php print template_url(); ?>imagenes/svg/seccion-6/imagen 1.png" alt="" class="ifanel-section--6__opiniones__articulo__img">

                    <h3 class="ifanel-section--6__opiniones__articulo__h3 ifanel-marron-masclaro ifanel-anthemia-regular">Luisa Martínez</h3>
                    <p class="ifanel-section--6__opiniones__articulo__p ifanel-negro-claro ifanel-monserrat-regular">
                        El corrector que me indicaron se fusiona
                        perfectamente con la base de maquillaje,
                        tiene una gran cobertura y no es agresivo.
                    </p>
                </article>
                <article class="ifanel-section--6__opiniones__articulo">
                    <img src="<?php print template_url(); ?>imagenes/svg/seccion-6/imagen 2.png" alt="" class="ifanel-section--6__opiniones__articulo__img">
                    <h3 class="ifanel-section--6__opiniones__articulo__h3 ifanel-marron-masclaro ifanel-anthemia-regular">Andrea López</h3>
                    <p class="ifanel-section--6__opiniones__articulo__p ifanel-negro-claro ifanel-monserrat-regular">Los productos que me dijeron empezaron
                        a mostrar resultados en un tiempo record.
                    </p>
                </article>
                <article class="ifanel-section--6__opiniones__articulo">
                    <img src="<?php print template_url(); ?>imagenes/svg/seccion-6/imagen 3.png" alt="" class="ifanel-section--6__opiniones__articulo__img">
                    <h3 class="ifanel-section--6__opiniones__articulo__h3 ifanel-marron-masclaro ifanel-anthemia-regular">Laura Gil</h3>
                    <p class="ifanel-section--6__opiniones__articulo__p ifanel-section--6__opiniones__articulo__p__ultimo ifanel-negro-claro ifanel-monserrat-regular">El rimmel que me recomendaron hace que mis pestañas
                        se vean mucho más levantadas. Además no deja ningún
                        tipo de residuo en las pestañas
                    </p>
                </article>
            </div>
        </section>
        <section class="ifanel-section--7">
            <div class="ifanel-section--7__contenido ifanel-monserrat-regular">
                <a href="#" class="ifanel-section--7__contenido__elementos ifanel-negro-claro">Política cookies</a>
                <a href="#" class="ifanel-section--7__contenido__elementos ifanel-negro-claro">Términos legales</a>
                <a href="#" class="ifanel-section--7__contenido__elementos ifanel-negro-claro">Política de privacidad</a>
            </div>
            <p class="ifanel-section--7__derechos ifanel-monserrat-regular ifanel-negro-claro">Todos los derechos reservados</p>
        </section>
    </div>
</body>

</html>