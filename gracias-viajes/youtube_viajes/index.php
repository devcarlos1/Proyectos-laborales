<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/youtube_viajes/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=youtube_viajes&preview_layout=index.php&content_id=0

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
    <link rel="stylesheet" href="https://ifanel.com/userfiles/templates/youtube_viajes/css/stylo.css">
    <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
    </script>
</head>
<body>
  <div class="edit" field="youtube_viajes" rel="content">
  <section class="ifanel-seccion-1">
        <div class="ifanel-seccion-1__izq">
            <h2 class="ifanel-seccion-1__izq__titulo ifanel-blanco ifanel-poppins-bold">¡Felicidades! <br>
                Acabas de hacerte <br>
                con mi guía para <br>
                gastar menos dinero <br>
                viajando.</h2>
            <!--<button class="ifanel-seccion-1__izq__btn ifanel-verde ifanel-poppins-medium">GASTAR MENOS DINERO VIAJANDO</button>-->
            <module type="btn" button-style="ifanel-seccion-1__izq__btn ifanel-verde ifanel-poppins-medium" text="GASTAR MENOS DINERO VIAJANDO" />
        </div>
        <div class="ifanel-seccion-1__der">
            <img src="https://ifanel.com/userfiles/templates/youtube_viajes/recursos/imagenes/imagen_mujer.png" alt="" class="ifanel-seccion-1__der__img">
        </div>
    </section>
    <section class="ifanel-seccion-2">
     <p class="ifanel-seccion-2__parrafo ifanel-poppins-bold ifanel-verde">A continuación te voy a mostrar un vídeo de <br>
        cómo viajar y gastar el menos dinero posible.</p>
     <!--<div class="ifanel-section-2__video">
        <video src="https://ifanel.com/userfiles/templates/youtube_viajes/intro_ifanel.mp4" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen class="ifanel-section-2__video__iframe" title="intro ifanel" controls="true"></video>
    </div>-->
    <div class="ifanel-section-2__video">
    <module type="video" url="https://ifanel.com/userfiles/templates/youtube_viajes/intro_ifanel.mp4" file_url="1"  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen class="ifanel-section-2__video__iframe" clase="clases para el embed" title="intro ifanel"/>
    </div>
    <p class="ifanel-seccion-2__parrafo ifanel-poppins-bold ifanel-verde">En breve recibirás en tu bandeja de correos <br>
        mi GUÍA DE COMO VIAJAR Y DISFRUTAR <br>
        GASTANDO POCO DINERO.</p>
        <img src="https://ifanel.com/userfiles/templates/youtube_viajes/recursos/imagenes/nube_verde.png" alt="" class="ifanel-seccion-2__nube">
    </section>
  </div>
</body>
</html>