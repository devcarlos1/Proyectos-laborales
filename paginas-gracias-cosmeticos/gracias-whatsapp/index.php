<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image:https://ifanel.com/userfiles/templates/gracias-whatsapp/logo.jpg
url:https://ifanel.com/home?no_editmode=true&preview_template=gracias-whatsapp
&preview_layout=index.php&content_id=0
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>{content_meta_title}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta property="og:title" content="{content_meta_title}"/>
<meta name="keywords" content="{content_meta_keywords}"/>
<meta name="description" content="{content_meta_description}"/>
<meta property="og:type" content="{og_type}"/>
<meta property="og:url" content="{content_url}"/>
<meta property="og:image" content="{content_image}"/>
<meta property="og:description" content="{og_description}"/>
<meta property="og:site_name" content="{og_site_name}"/>

    <link rel="stylesheet" href="<?php print template_url(); ?>css/stylo.css">
    <script>
mw.require('icon_selector.js');
mw.lib.require('bootstrap4');
mw.lib.require('bootstrap_select');
</script>
</head>
<body>
    <section class="ifanel-section--1">
        <div class="ifanel-section--1__izquierda">
            <h2 class="ifanel-section--1__izquierda__titulo ifanel-anthemia-regular ifanel-marron-masclaro">&iexcl;Felicidades&excl;</h2>
            <p class="ifanel-section--1__izquierda__parrafo ifanel-anthemia-regular ifanel-marron-masclaro">
                Acabas de hacerte con <br>
                 mis<span class="ifanel-section--1__izquierda__parrafo__10trucos">10 trucos</span>para cuidar <br> tu piel
                como si fueses <br> una maquilladora profesional.
            </p>
        </div>
        <div class="ifanel-section--1__derecha">
            <img src="<?php print template_url(); ?>imagenes/imagen/Imagen Whatsapp-min (2).png" alt="" class="ifanel-section--1__derecha__img">
        </div>
    </section>
    <section class="ifanel-section--2">
        <p class="ifanel-section--2__parrafo--1 ifanel-anthemia-regular ifanel-negro-claro">Gracias por registrarte para recibir mis 10 trucos <br>
        para cuidar tu piel como si fueses un maquilladora profesional <br></p>
        <p class="ifanel-section--2__parrafo--1 ifanel-anthemia-regular ifanel-negro-claro">  Descubre cómo mejorar tu piel para que los resultados <br> al maquillarte sean profesionales.</p>
        <p class="ifanel-section--2__parrafo--2 ifanel-anthemia-regular ifanel-marron-masclaro">IMPRESCINDIBLE PARA ACCEDER A MIS TRUCOS</p>
        
        <!--<button class="ifanel-boton--whatsapp"></button> -->
        <module type="btn" button-style="ifanel-boton--whatsapp" />
        
        <!--<div class="ifanel-section--2__contador ifanel-anthemia-regular ifanel-negro-claro">
            <p class="ifanel-section--2__contador--1"></p>
            <span class="ifanel-section--2__contador__guion">&ndash;</span>
            <p class="ifanel-section--2__contador--2"></p>
            <span class="ifanel-section--2__contador__guion">&ndash;</span>
            <p class="ifanel-section--2__contador--3"></p>
        </div> -->
        <module type="countdown" template="gracias_1"/>

    </section>
    <section class="ifanel-section--3">
        <p class="ifanel-section--3__parrafo ifanel-anthemia-regular ifanel-negro-claro">Todavía te falta un último paso para recibir <br> mis 10 trucos para cuidar
            tu piel como si fueses <br> una maquilladora profesional
        </p>
        <div class="ifanel-section--3__contenedor ifanel-monserrat-regular ifanel-negro-claro">
             <p class="ifanel-section--3__contenedor__parrafo">Dale al botón verde de abajo para unirte totalmente gratis <br>
            al grupo exclusivo de WhatsApp para mejorar tu piel, <br>
        qué cremas utilizar, cómo utilizarlas, cómo maquillarte mejor, <br>
    tipos de maquillajes...</p>
             <!--<button class="ifanel-boton--whatsapp ifanel-boton--whatsapp--2"></button>-->
             <module type="btn" button-style="ifanel-boton--whatsapp ifanel-boton--whatsapp--2"/>
        </div>
    </section>
</body>
</html>
<script src="js/counter.js"></script>