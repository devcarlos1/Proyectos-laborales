<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/agendar_cita_nutricion/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=agendar_cita_nutricion&preview_layout=index.php&content_id=0
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
   <link rel="stylesheet" href="https://ifanel.com/userfiles/templates/agendar_cita_nutricion/css/stylo.css">
   <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
    </script>
</head>
<body>
<div class="edit" field="agendar_cita_nutricion" rel="content">
    <section class="ifanel-seccion-1">
        <div class="ifanel-seccion-1__izq">
            <h2 class="ifanel-seccion-1__izq__titulo ifanel_verde-oscuro ifanel-inter-bold">
                ¡Felicidades,
            </h2>
            <p class="ifanel-seccion-1__izq__parrafo ifanel-inter-medium ifanel-gris">
                vas a iniciar el PLAN DE 20 DÍAS <br>
para mejorar tus hábitos alimenticios!
            </p>
        </div>
        <div class="ifanel-seccion-1__der">
            <img src="https://ifanel.com/userfiles/templates/agendar_cita_nutricion/recursos/imagenes/cereal_imagen.png" class="ifanel-seccion-1__der__img" alt="">
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
    <!-- <a href="#" class="ifanel-anchor"><button class="ifanel-seccion-3__btn ifanel-blanco ifanel-inter-medium">COGER CITA PARA ASESORÍA PERSONALIZADA EN MI AGENDA</button></a>-->
    <a href="#" class="ifanel-anchor"> <module type="btn" button-style="ifanel-seccion-3__btn ifanel-blanco ifanel-inter-medium" text="COGER CITA PARA ASESORÍA PERSONALIZADA EN MI AGENDA" /></a>
     <p class="ifanel-seccion-3__parrafo-2 ifanel-gris ifanel-inter-medium">Todavía te falta un último paso para mejorar <br>
        estos 20 días tus hábitos alimenticios</p>
    </section>
</div>
</body>
</html>
