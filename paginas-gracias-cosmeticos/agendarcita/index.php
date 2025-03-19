<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/agendarcita/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=agendarcita&preview_layout=index.php&content_id=0
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
<script>
            const carlos= document.documentElement.querySelector("iframe");
console.log(carlos);
const imagen= document.documentElement.querySelector("iframe").contentDocument.body.childNodes[1].querySelector(".ifanel-seccion--agenda__arriba__derecha__img");
console.log(imagen);
imagen.style.height= "84%";
var media870= carlos.window.matchMedia("(max-width: 870px)");
var media520= carlos.window.matchMedia("(max-width: 520px)");
var media455= carlos.window.matchMedia("(max-width: 455px)");
var media270= carlos.window.matchMedia("(max-width: 270px)");
var media170= carlos.window.matchMedia("(max-width: 170px)");
if(carlos){
    if(media870.matches){
    imagen.style.height= "84%";
}
if(media520.matches){
    imagen.style.height= "89%";
}
if(media455.matches){
    imagen.style.height= "85.6%";
}
if(media270.matches){
    imagen.style.height= "84.6%";
}
if(media170.matches){
    imagen.style.height= "84.6%";
}
} 
        </script>

</head>
<body>
    <div class="ifanel-seccion--agenda">
       <div class="ifanel-seccion--agenda__arriba">
           <div class="ifanel-seccion--agenda__arriba__izquierda ifanel-anthemia-regular">
            <h2 class="ifanel-seccion--agenda__arriba__izquierda__titulo ifanel-azul-claro">¡Felicidades!</h2>
            <p class="ifanel-seccion--agenda__arriba__izquierda__parrafo ifanel-blanco">Acabas de hacerte con
                mis<span class="ifanel-seccion--agenda__arriba__izquierda__parrafo__10trucos ifanel-azul-claro">10 trucos</span>para cuidar tu piel
                como si fueses <pre class="ifanel-seccion--agenda__arriba__izquierda__parrafo ifanel-anthemia-regular ifanel-blanco">una maquilladora profesional.</pre>
            </p>
           </div>
         <div class="ifanel-seccion--agenda__arriba__derecha">
            <img src="<?php print template_url(); ?>imagenes/IMAGEN/imagen agendar cita.png" alt="foto" class="ifanel-seccion--agenda__arriba__derecha__img">
         </div>
       </div>
       <div class="ifanel-seccion--agenda__abajo">
         <p class="ifanel-seccion--agenda__abajo__parrafo--1 ifanel-anthemia-regular ifanel-negro-claro">
          Gracias por registrarte para recibir mis 10 trucos
          <pre class="ifanel-seccion--agenda__abajo__parrafo--1__pre ifanel-anthemia-regular ifanel-negro-claro">para cuidar tu piel como si fueses una maquilladora profesional
Descubre cómo mejorar tu piel para que los resultados
al maquillarte sean profesionales.
          </pre>  
         </p>
         <p class="ifanel-seccion--agenda__abajo__parrafo--2 ifanel-anthemia-regular ifanel-azul-claro">IMPRESCINDIBLE PARA ACCEDER A MIS TRUCOS</p>
        <!--<button class="ifanel-seccion--agenda__abajo__boton ifanel-anthemia-regular ifanel-blanco">COGER CITA PARA ASESORÍA PERSONALIZADA EN MI AGENDA</button>-->
       <module type="btn" text="COGER CITA PARA ASESORÍA PERSONALIZADA EN MI AGENDA" button-style="ifanel-seccion--agenda__abajo__boton ifanel-anthemia-regular ifanel-blanco"/>
    </div>
    </div> 
</body>
</html>
