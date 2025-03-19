<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/agendar_cita_viajes/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=agendar_cita_viajes&preview_layout=index.php&content_id=0

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
    <link rel="stylesheet" href="https://ifanel.com/userfiles/templates/agendar_cita_viajes/css/stylo.css">
    
    <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
    </script>
</head>
<body>
   <div class="edit" field="agendar_cita_viajes" rel="content">
   <section class="ifanel-seccion-1">
        <div class="ifanel-seccion-1__izq">
         <h2 class="ifanel-seccion-1__izq__titulo ifanel-poppins-bold ifanel-blanco">¡Felicidades, <br>
            vas a recibir mi GUÍA <br>
            DE CÓMO VIAJAR <br>
            Y GASTAR EL MENOS <br>
            DINERO POSIBLE!</h2>
            <img src="https://ifanel.com/userfiles/templates/agendar_cita_viajes/recursos/imagenes/nube-verde-1.png" alt="" class="ifanel-seccion-1__izq__img">
            <img src="https://ifanel.com/userfiles/templates/agendar_cita_viajes/recursos/imagenes/nuble-blanca.png" alt="" class="ifanel-seccion-1__izq__blanca">
        </div>
        <div class="ifanel-seccion-1__der">
            <img src="https://ifanel.com/userfiles/templates/agendar_cita_viajes/recursos/imagenes/mujer.png" alt="" class="ifanel-seccion-1__der__img">
            <img src="https://ifanel.com/userfiles/templates/agendar_cita_viajes/recursos/imagenes/linea.png" alt="" class="ifanel-seccion-1__der__linea">
        </div>
    </section>
    <section class="ifanel-seccion-2">
        <p class="ifanel-seccion-2__parrafo ifanel-poppins-bold ifanel-verde">
            Gracias por registrarte para recibir mi <br>
guía para viajar y no quedarte con los <br> 
bolsillos vacíos.
        </p>
        <p class="ifanel-seccion-2__parrafo ifanel-poppins-medium ifanel-negro">
            Descubre dónde y cómo viajar a sitios de <br>
ensueño y además poder hacerlo gastándote <br>
el mínimo dinero posible.
        </p>
        <img src="https://ifanel.com/userfiles/templates/agendar_cita_viajes/recursos/imagenes/nube_azul.png" alt="" srcset="" class="ifanel-seccion-2__img">
    </section>
    <section class="ifanel-seccion-3">
        <p class="ifanel-seccion-3__parrafo ifanel-blanco ifanel-poppins-bold">IMPRESCINDIBLE PARA ACCEDER A LA GUÍA</p>
   <!--     <a href="#"><button class="ifanel-seccion-3__btn">COGER CITA PARA ASESORÍA PERSONALIZADA EN MI AGENDA</button></a>-->
   <a href="#"> <module type="btn" button-style="ifanel-seccion-3__btn" text="COGER CITA PARA ASESORÍA PERSONALIZADA EN MI AGENDA" /></a>
    </section>
    <section class="ifanel-seccion-4">
        <p class="ifanel-seccion-4__parrafo ifanel-verde ifanel-poppins-bold">
            Todavía te falta un último paso para conocer <br>
de primera mano los trucos, los lugares <br>
donde viajar y poder hacerlo sin que ello <br>
suponga un desfalco en tu economía.
        </p>
        <img src="https://ifanel.com/userfiles/templates/agendar_cita_viajes/recursos/imagenes/nube-verde.png" alt="" class="ifanel-seccion-4__img">
    </section>
   </div>
</body>
</html>