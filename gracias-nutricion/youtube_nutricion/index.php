<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/youtube_nutricion/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=youtube_nutricion&preview_layout=index.php&content_id=0
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
    <link rel="stylesheet" href="https://ifanel.com/userfiles/templates/youtube_nutricion/css/stylo.css">
    <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
    </script>
</head>
<body>
<div class="edit" field="youtube_nutricion" rel="content">
    <section class="ifanel-seccion-1">
        <div class="ifanel-seccion-1__izq">
            <h2 class="ifanel-seccion-1__izq__titulo ifanel_verde-oscuro ifanel-inter-bold">
                ¡Felicidades,
            </h2>
            <p class="ifanel-seccion-1__izq__parrafo ifanel-inter-medium ifanel-gris">
                Acabas de hacerte con mi plan <br>
                para cambiar tus hábitos <br>
                alimenticios en 20 días
            </p>
        </div>
        <div class="ifanel-seccion-1__der">
            <img src="https://ifanel.com/userfiles/templates/youtube_nutricion/recursos/imagenes/Imagen_mujer.png" class="ifanel-seccion-1__der__img" alt="">
        </div>
    </section>
    <section class="ifanel-seccion-2">
      <p class="ifanel-seccion-2__parrafo ifanel-gris">A continuación te voy a mostrar un vídeo <br>
        con el testimonio de un cliente que habla de su <br> 
        experiencia tras probar el plan de 20 días para <br>
        mejorar sus hábitos alimenticios</p>
      <!--<div class="ifanel-section-2__video">
        <video src="https://ifanel.com/userfiles/templates/youtube_nutricion/intro_ifanel.mp4" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen class="ifanel-section-2__video__iframe" title="intro ifanel" controls="true"></video>
    </div>-->
    <div class="ifanel-section-2__video">
    <module type="video" url="https://ifanel.com/userfiles/templates/youtube_nutricion/intro_ifanel.mp4" file_url="1"  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen class="ifanel-section-2__video__iframe" clase="clases para el embed" title="intro ifanel"/>
    </div>
    </section>
    <section class="ifanel-seccion-3">
     <p class="ifanel-seccion-3__parrafo ifanel-gris">En breve recibirás en tu bandeja de correos tu <br>
        <span class="ifanel-seccion-3__parrafo__verde ifanel_verde-oscuro">PLAN DE 20 DIAS PARA MEJORAR <br>
            TUS HÁBITOS ALIMENTICIOS.</span>
     </p>
    </section>
    </div>
</body>
</html>
