<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/agradecimiento/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=agradecimiento&preview_layout=index.php&content_id=0
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{content_meta_title}</title>
<meta property="og:title" content="{content_meta_title}"/>
<meta name="keywords" content="{content_meta_keywords}"/>
<meta name="description" content="{content_meta_description}"/>
<meta property="og:type" content="{og_type}"/>
<meta property="og:url" content="{content_url}"/>
<meta property="og:image" content="{content_image}"/>
<meta property="og:description" content="{og_description}"/>
<meta property="og:site_name" content="{og_site_name}"/>
   
    <link rel="stylesheet" href="<?php print template_url(); ?>css/style.css">

    <script>
mw.require('icon_selector.js');
mw.lib.require('bootstrap4');
mw.lib.require('bootstrap_select');
</script>
</head>
<body>
    <div class="ifanel-contenedor">
        <div class="ifanel-contenedor__izquierda ifanel-anthemia-regular">
            <span class="ifanel-contenedor__izquierda__gracias">&iexcl;Gracias</span>
           <p class="ifanel-contenedor__izquierda__parrafo-1">por descargarte mi Plan de 20 días <br>
            para mejorar tus hábitos alimenticios&excl;
           </p>
           <p class="ifanel-contenedor__izquierda__parrafo-2">Tu guía para mejorar tus hábitos alimenticios <br>
            acaba de ser enviado como una flecha <br>
            a tu bandeja de entrada.
           </p>
           <div class="ifanel-contenedor__izquierda__parrafo-3-contenedor">
            <p class="ifanel-contenedor__izquierda__parrafo-3">
                Recuerda, mejorar <br>
                tus hábitos alimenticios, <br>
               </p>
               <span class="ifanel-contenedor__izquierda__mejorar">&iexcl;&iexcl;&iexcl;mejorará tu vida&excl;&excl;&excl;</span>
           </div>
        </div>
       <img src="<?php print template_url(); ?>imagenes/imagen/Imagen agradecimiento.png" alt="" class="ifanel-contenedor__derecha">
    </div>
</body>
</html>