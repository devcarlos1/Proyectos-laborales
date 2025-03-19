<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/whatsapp_nutricion/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=whatsapp_nutricion&preview_layout=index.php&content_id=0
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" />
    <link rel="stylesheet" href=" https://ifanel.com/userfiles/templates/whatsapp_nutricion/css/stylo.css">
    <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
    </script>
</head>
<body>
<div class="edit" field="whatsapp_nutricion" rel="content">
    <section class="ifanel-seccion-1">
   <div class="ifanel-seccion-1__izq">
    <h2 class="ifanel-seccion-1__izq__titulo ifanel_verde-oscuro ifanel-inter-bold">¡Felicidades,</h2>
    <p class="ifanel-seccion-1__izq__parrafo ifanel-inter-medium ifanel-gris">vas a iniciar el PLAN DE 20 DÍAS <br>
        para mejorar tus hábitos alimenticios!</p>
   </div>
   <div class="ifanel-seccion-1__der">
    <img src=" https://ifanel.com/userfiles/templates/whatsapp_nutricion/recursos/imagenes/comida.png" alt="" class="ifanel-seccion-1__der__img">
   </div>
    </section>
    <section class="ifanel-seccion-2">
        <p class="ifanel-seccion-2__parrafo ifanel-blanco ifanel-inter-medium">Gracias por registrarte para iniciar el Plan de 20 <br> 
            días para cambiar tus hábitos alimenticios. <br>
             Descubre cómo encontrarte mejor mejorando <br>
            tu alimentación</p>
</section>
<section class="ifanel-seccion-3">
    <p class="ifanel-seccion-3__parrafo-1 ifanel_verde-oscuro ifanel-inter-bold">IMPRESCINDIBLE PARA ACCEDER <br>
        AL PLAN <span class="material-icons-round ifanel-dedo-modificado">
            pan_tool_alt
            </span>
            </p>
         <div class="ifanel-seccion-3__boton">
          <!-- <a href="#"> <button class="ifanel-boton-whatsapp"></button></a> -->
           <a href="#"><module type="btn" button-style="ifanel-boton-whatsapp" text=" " /></a>
         </div>
         <!--<div class="ifanel-section--3__contador ifanel-inter-bold ifanel-gris">
            <p class="ifanel-section--2__contador--1"></p>
            <span class="ifanel-section--2__contador__guion">&ndash;</span>
            <p class="ifanel-section--2__contador--2"></p>
            <span class="ifanel-section--2__contador__guion">&ndash;</span>
            <p class="ifanel-section--2__contador--3"></p>
        </div>-->
        <div class="ifanel-section--3__contador ifanel-inter-bold ifanel-gris">
        <module type="countdown_clock" template="simple-2" />
        </div>
</section>
<section class="ifanel-seccion-4">
    <p class="ifanel-seccion-4__parrafo-1 ifanel-gris ifanel-inter-bold">Todavía te falta un último paso para mejorar <br>
        estos 20 días tus hábitos alimenticios</p>
    <div class="ifanel-seccion-4__contenedor">
        <p class="ifanel-seccion-4__contenedor__parrafo ifanel-inter-medium ifanel_verde-oscuro">Dale al botón verde de abajo para unirte totalmente gratis <br>
            al grupo exclusivo de WhatsApp para mejorar, encontrar trucos, <br>
            recetas, y animarte a mejorar tus hábitos alimenticios</p>
           <!--<a href="#"><button class="ifanel-boton-whatsapp"></button></a>-->
            <a href="#"><module type="btn" button-style="ifanel-boton-whatsapp" text=" " /></a>
    </div>
</section>
</div>
</body>
</html>
<script src="https://ifanel.com/userfiles/templates/whatsapp_nutricion/js/counter.js"></script>
