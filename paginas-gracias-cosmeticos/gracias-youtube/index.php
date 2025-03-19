<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image:https://ifanel.com/userfiles/templates/gracias-youtube/logo.jpg
url:https://ifanel.com/home?no_editmode=true&preview_template=gracias-youtube
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
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
mw.require('icon_selector.js');
mw.lib.require('bootstrap4');
mw.lib.require('bootstrap_select');
</script>
</head>
<body>
   <section class="ifanel-section--1">
    <div class="ifanel-section--1__izquierda ifanel-anthemia-regular ifanel-marron-masclaro">
        <h2 class="ifanel-section--1__izquierda__titulo">&iexcl;Felicidades&excl;</h2>
        <p class="ifanel-section--1__izquierda__parrafo">
            Acabas de hacerte con <br>
             mis<span class="ifanel-section--1__izquierda__parrafo__10trucos">10 trucos</span>para cuidar <br> tu piel
            como si fueses <br> una maquilladora profesional.
        </p>
    </div>
    <div class="ifanel-section--1__derecha">
        <img src="<?php print template_url(); ?>imagenes/Imagen/Imagen.png" alt="Foto" class="ifanel-section--1__derecha__img">
    </div>
   </section>
   <section class="ifanel-section--2">
    <p class="ifanel-section--2__parrafo ifanel-anthemia-regular ifanel-negro-claro">A continuacion te voy
    a mostrar un video con el <br> testimonio de una clienta que habla de su experencia <br>
    tras probar mis 10 trucos para cuidar su piel como <br> si fueses una maquilladora profesional.
    </p>
  <!-- <div class="ifanel-section--2__video">
        <video src="intro ifanel.mp4" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen class="ifanel-section--2__video__iframe" title="intro ifanel" controls="true"></video>
    </div>
-->
<div class="ifanel-section--2__video">
<module type="video" url="<?php print template_url(); ?>intro ifanel.mp4" file_url="1"  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen class="ifanel-section--2__video__iframe" clase="clases para el embed" title="intro ifanel"/>
</div>   
</section>
   <section class="ifanel-section--3">
    <p class="ifanel-section--3__parrafo ifanel-anthemia-regular ifanel-marron-masclaro">En breve recibiras en tu bandeja de correos <br>
         los 10 trucos para cuidar tu piel como tratan la piel <br>
        de sus clientas las maquilladoras profesionales</p>
   </section>
</body>
</html>