<?php
/*
**ifanel.com**
type: layout
content_type: dynamic
name: Leads
position: 3
description: Leadss
image: https://ifanel.com/userfiles/templates/cosmeticos/logo.jpg
url: https://ifanel.com/home?no_editmode=true&preview_template=cosmeticos&preview_layout=index.php&content_id=0
*/
?>
<!DOCTYPE html>
<html>

<head>
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

    <link rel="stylesheet" type="text/css" href="<?php print template_url(); ?>css/estilo.css">
    <link rel="stylesheet" type="text/css" href="<?php print template_url(); ?>bootstrap-5.1.3-dist/css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

</head>

<body>
    <!-- Modal -->
    <div class="edit" field="COSMETICOS" rel="content">
        <div class="ifanel-fondo-header ifanel-estilo-border-bottom">
            <div class="row justify-content-center">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 col-sm-12 ">
                    <!-- <form class="ifanel-estilo-formulario">
                        <h4 class="ifanel-montserrat-bold text-center ifanel-titulo1-formulario">LOREM IPSUM DOLOR SIT
                            IPSUM DOL</h4>
                        <H1 class="ifanel-montserrat-black ifanel-texto-naranja text-center ifanel-titulo2-formulario">
                            UMLORTA CONSECLE UTSO <span class="ifanel-montserrat-regular">AMET<span
                                    class="ifanel-montserrat-medium">NG ELIT</span></span></H1>
                        <input class="ifanel-estilo-input ifanel-margin-top-8" type="name"
                            placeholder="Nombres (Sin Apellidos)*"><br>
                        <input class="ifanel-estilo-input" type="email" placeholder="Email*"><br>
                        <input class="ifanel-margin-top-5" type="checkbox"><span class="ifanel-montserrat-bold"> *Lorem
                            ipsum dolor sit amet, consec Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit*
                        </span><br>
                        <button
                            class="ifanel-estilo-boton-form text-white ifanel-poppins-black ifanel-margin-top-5">QUIERO
                            APLICAR A LA OFERTA</button>
                    </form> -->
                    <module type="contact_form" template="cosmeticos" />
                </div>
            </div>
        </div>
        <section>
            <!-- ARTICULO 1 -->
            <div class="ifanel-fondo-articulo1 ifanel-padding-bottom-3 ifanel-estilo-border-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 ifanel-margin-top-5">
                            <div class="card ifanel-fondo-marron-claro ifanel-estilo-card ">
                                <i class="fa fa-user text-white ifanel-estilo-iconos-card ifanel-margin-auto" aria-hidden="true"></i>
                                <div class="card-body ifanel-card-body ifanel-fondo-blanco">
                                    <p class="card-text ifanel-montserrat-bold text-center">Lorem ipsum dolor sit amet,
                                        ctetuer exerci tation ullam sed diam nonummy nibh
                                        eiusmod tincidunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 ifanel-margin-top-5">
                            <div class="card ifanel-fondo-marron-claro ifanel-estilo-card ">
                                <i class="fa fa-commenting text-white ifanel-estilo-iconos-card ifanel-margin-auto" aria-hidden="true"></i>
                                <div class="card-body ifanel-card-body ifanel-fondo-blanco">
                                    <p class="card-text ifanel-montserrat-bold text-center">Lorem ipsum dolor sit amet,
                                        ctetuer exerci tation ullam sed diam nonummy nibh
                                        eiusmod tincidunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 ifanel-margin-top-5">
                            <div class="card ifanel-fondo-marron-claro ifanel-estilo-card ">
                                <i class="fa fa-calendar text-white ifanel-estilo-iconos-card ifanel-margin-auto" aria-hidden="true"></i>
                                <div class="card-body ifanel-card-body ifanel-fondo-blanco">
                                    <p class="card-text ifanel-montserrat-bold text-center">Lorem ipsum dolor sit amet,
                                        ctetuer exerci tation ullam sed diam nonummy nibh
                                        eiusmod tincidunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ARTICULO 2 -->
            <div class="ifanel-margin-top-5 ifanel-estilo-border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="container ifanel-montserrat-medium">
                                <div class="ifanel-contenedor-articulo2">
                                    <h1 class="ifanel-montserrat-black ifanel-texto-naranja text-center ifanel-titulo2-formulario">LOREM IPSUMLO</h1>
                                    <H2 class="ifanel-montserrat-bold ifanel-texto-marron-claro text-center ifanel-margin-top-3">
                                        LOREM IPSUM DOLOR SIT AM</H2>
                                    <P class="ifanel-margin-top-3">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed diam <span class="ifanel-montserrat-black">nonummy nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat</span> quis nostrud exerci tation ullam sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</P>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        <span class="ifanel-montserrat-black">euismod tincidunt ut laoreet dolore magna
                                            aliquam erat volutpat quis nostrud exerci tation
                                            ullam sed diam nonummy nibh euismod tincidunt</span> ut laoreet dolore magna
                                        aliquam erat volutpat ud exerci tation ullam sed diam nonummy nibh euismod.
                                    </p>
                                    <P><span class="ifanel-montserrat-black">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed diam nonummy nibh euismod</span> tincidunt ut laoreet
                                        dolore magna aliquam erat
                                        volutpat quis nostrud exerci tation ullam sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat.</P>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ifanel-fondo-articulo2">

                        </div>
                    </div>
                    <module type="popup" button-text="QUIERO APLICAR A LA OFERTA" button-style="ifanel-boton-articulo2 text-white ifanel-poppins-black ifanel-margin-top-5 ifanel-margin-bottom-5" />
                    <!-- <button class="ifanel-boton-articulo2 text-white ifanel-poppins-black ifanel-margin-top-5 ifanel-margin-bottom-5">QUIERO
                        APLICAR A LA OFERTA</button> -->
                </div>
            </div>

            <!-- ARTICULO 3 -->
            <div class="ifanel-estilo-border-bottom ifanel-padding-bottom-2 ifanel-padding-top-3 ifanel-fondo-gris">
                <div class="ifanel-margin-bottom-5 card ifanel-estilo-card2 mb-3 ifanel-margin-auto" style="max-width: 900px;">
                    <div class="row g-0">
                        <div class="col-md-6 ifanel-fondo-marron ifanel-border-radius-20">
                            <img src="<?php print template_url(); ?>imagenes/4-modified.png" class="ifanel-imagen-card ifanel-margin-auto" alt="...">
                            <h5 class="text-center text-white ifanel-montserrat-bold">LOREM IP</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h3 class="card-title ifanel-montserrat-bold ifanel-texto-marron ifanel-margin-top-5">
                                    LOREM IPSUM DOLOR</h3>
                                <H5 class="card-text ifanel-montserrat-medium">Lorem ipsum dolor sit amet, consectetuer
                                    adipiscing elit, sed diam nonummy nibh euismod.</H5>
                                <h1 class="card-text ifanel-montserrat-regular ifanel-texto-marron">PROJECT</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ARTICULO 4 -->
            <div class="text-center ifanel-margin-top-5">
                <div class="container">
                    <h1 class="ifanel-montserrat-medium ifanel-texto-marron">LOREM IPSUMLORTA CONSECLEUTSO ADIPISCING
                        <span class="ifanel-montserrat-black ifanel-texto-naranja">AMET, CONSECTFORT </span> ETUER
                        ADIPISCING
                    </h1>
                    <h4 class="ifanel-montserrat-medium">LOREM IPSUM DOLOR SIT AM ONSECLOREM IPSUM</h4>
                    <h4 class="ifanel-montserrat-black ifanel-texto-marron-claro ifanel-margin-top-3">LOREM IPSUMDO</h4>
                    <h4 class="ifanel-montserrat-medium ifanel-margin-top-3">Lorem ips dolor sit amet, sectetuer Lorem
                        ipsum</h4>
                    <!-- <img src="imagenes/video.jpg"
                        class="ifanel-width-70 ifanel-margin-auto ifanel-margin-top-3 ifanel-border-radius-20"> -->
                    <module type="video" url="https://vimeo.com/696038438" template='COSMETICOS' class="ifanel-width-70 ifanel-margin-auto ifanel-margin-top-3 ifanel-border-radius-20" />
                    <h4 class="ifanel-montserrat-medium ifanel-width-70 ifanel-margin-auto ifanel-margin-top-3">"Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit, sed Lorem ipsum dolor sit amet,
                        consectetuer adipiscing Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum
                        dolor sit amet."</h4>
                </div>
            </div>

            <!-- ARTICULO 5 -->
            <div class="ifanel-margin-top-5 ifanel-montserrat-medium">
                <div class="container">
                    <h1 class="text-center ifanel-montserrat-bold ifanel-texto-naranja">¿LOREM IPSUM DOMOR SIT ALOREM
                        IPSUM DOLOR SIT AM, CONSECTETUER ADIPISCING</h1>
                    <p class="ifanel-margin-top-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed Lorem
                        ipsum dolor sit amet,
                        consectetuer adipiscing Lorem ipsum dolor sit amet, <span class="ifanel-montserrat-black">consectetuer adipiscing elit. </span>Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    <p>Nibh euismod <span class="ifanel-montserrat-black">tincidunt ut laoreet dolore magna</span>
                        aliquam erat volutpat. Ut wisi enim
                        ad minim veniam, quis nostrud exerci tation</p>
                    <p>Ullamcorper suscipit lobortis nisl ut aliquip <span class="ifanel-montserrat-black">ex ea
                            commodo</span> consequat. Duis autem
                        vel eum iriure <span class="ifanel-montserrat-black">dolor in hendrerit </span> in vulputate
                        velit esse molestie consequat,
                        <span class="ifanel-montserrat-black">vel illum dolore eu</span> feugiat nulla facilisis at
                        vero. Lorem ipsum dolor sit amet,
                        consectetuer adipiscing elit, sed diam.
                    </p>
                    <p>Monummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation Ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        commodo consequat. <span class="ifanel-montserrat-black">Duis autem. Lorem ipsum dolor sit
                            amet,</span> consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                        wisi enim ad minim.</p>
                    <p><span class="ifanel-montserrat-black">Euis nostrud exerci tation Ullamcorper suscipit lobortis
                            nisl ut aliquip ex ea commodo
                            consequat. Duis autem vel eum iriure dolor in hendrerit in vulpupate velit esse molestie
                            consequat, vel illum dolore eu feugiat</span> nulla facilisis at vero eros et accumsan et
                        iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugiat
                        nulla facilisis</p>
                    <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod
                        <span class="ifanel-montserrat-black">tincidunt ut laoreet dolore magna aliquam erat
                            volutpat.</span> Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    <p>Sed diam nonummy nibh euismod tinciduntut laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis nostrud exerci tation ullamcoper suscipit lobortis nisl ut aliquip ex
                        ea commodo consequat. <span class="ifanel-montserrat-black">Duis autem vel eum iriure dolor in
                            hendrerit in vulputate velit esse
                            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                            iusto odio dignissim qui blamdit praesent luptatum zzril delenit augue duis </span>dolore te
                        feugait nulla facilisi.</p>
                </div>
            </div>

            <!-- ARTICULO 6 -->
            <div class="ifanel-padding-bottom-3 ifanel-margin-top-5">
                <h1 class="text-center ifanel-fondo-naranja text-white ifanel-montserrat-bold ifanel-padding-1">DOMOR
                    CONSECTETUER ADIPISCING</h1>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 ifanel-margin-top-5">
                            <div class="card ifanel-estilo-card">
                                <div class="card-body ifanel-padding-0">
                                    <h4 class="card-tittle ifanel-fondo-marron text-center text-white ifanel-montserrat-bold">
                                        Ullamcorper lorem</h4>
                                    <div class="row">
                                        <div class="col-auto hstack gap-3">
                                            <p class="ifanel-numeros-card ifanel-montserrat-bold ifanel-texto-marron-claro ">
                                                03</p>
                                            <p class="ifanel-montserrat-bold text-center text-black ifanel-margin-top-n5">Lorem ips dolor
                                                sit Lorem ipsum</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="card-text ifanel-montserrat-bold text-center ifanel-margin-top-3">
                                            </p>
                                        </div>
                                    </div>
                                    <!-- <img src="imagenes/video.jpg" class="ifanel-border-radius-20 ifanel-margin-top-n10 ifanel-width-100"> -->
                                    <module type="video" url="https://vimeo.com/696038438" template='techland' class="ifanel-border-radius-20 ifanel-margin-top-n10s ifanel-width-100" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 ifanel-margin-top-5">
                            <div class="card ifanel-estilo-card">
                                <div class="card-body ifanel-padding-0">
                                    <h4 class="card-tittle ifanel-fondo-marron text-center text-white ifanel-montserrat-bold">
                                        Ullamcorper lorem</h4>
                                    <div class="row">
                                        <div class="col-auto hstack gap-3">
                                            <p class="ifanel-numeros-card ifanel-montserrat-bold ifanel-texto-marron-claro ">
                                                04</p>
                                            <p class="ifanel-montserrat-bold text-center text-black ifanel-margin-top-n5">Lorem ips dolor
                                                sit Lorem ipsum</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="card-text ifanel-montserrat-bold text-center ifanel-margin-top-3">
                                            </p>
                                        </div>
                                    </div>
                                    <!-- <img src="imagenes/video.jpg" class="ifanel-border-radius-20 ifanel-margin-top-n10 ifanel-width-100"> -->
                                    <module type="video" url="https://vimeo.com/696038438" template='techland' class="ifanel-border-radius-20 ifanel-margin-top-n10s ifanel-width-100" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 ifanel-margin-top-5">
                            <div class="card ifanel-estilo-card">
                                <div class="card-body ifanel-padding-0">
                                    <h4 class="card-tittle ifanel-fondo-marron text-center text-white ifanel-montserrat-bold">
                                        Ullamcorper lorem</h4>
                                    <div class="row">
                                        <div class="col-auto hstack gap-3">
                                            <p class="ifanel-numeros-card ifanel-montserrat-bold ifanel-texto-marron-claro ">
                                                05</p>
                                            <p class="ifanel-montserrat-bold text-center text-black ifanel-margin-top-n5">Lorem ips dolor
                                                sit Lorem ipsum</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="card-text ifanel-montserrat-bold text-center ifanel-margin-top-3">
                                            </p>
                                        </div>
                                    </div>
                                    <!-- <img src="imagenes/video.jpg" class="ifanel-border-radius-20 ifanel-margin-top-n10 ifanel-width-100"> -->
                                    <module type="video" url="https://vimeo.com/696038438" template='techland' class="ifanel-border-radius-20 ifanel-margin-top-n10s ifanel-width-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ARTICULO 7 -->
            <div class="ifanel-fondo-marron-claro text-white ifanel-padding-3">
                <div class="container text-center">
                    <h1 class="ifanel-montserrat-black">SED DIAM NONUMMY LOREM IPSUM</h1>
                    <h4 class="ifanel-montserrat-medium ifanel-margin-top-3">Lorem ipsum dolor sit amet, <span class="ifanel-montserrat-black">consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat</span> quis nostrud exerci tation
                        ullam sed diam nonummy nibh euismod tincidunt ut laoreet.</h4>
                    <!-- <module type="btn" text="QUIERO APLICAR A LA OFERTA" button_style="ifanel-boton-articulo2 text-white ifanel-poppins-black ifanel-margin-top-5 ifanel-margin-bottom-5" /> -->
                    <module type="popup" button-text="QUIERO APLICAR A LA OFERTA" button-style="ifanel-boton-articulo2 text-white ifanel-poppins-black ifanel-margin-top-5 ifanel-margin-bottom-5" />
                    <!-- <button class="ifanel-boton-articulo2 text-white ifanel-poppins-black ifanel-margin-top-5">QUIERO
                        APLICAR A LA OFERTA</button> -->
                </div>
            </div>

            <!-- ARTICULO 8 -->
            <div class="ifanel-margin-top-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="<?php print template_url(); ?>imagenes/5.jpg" class="ifanel-width-90">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="ifanel-montserrat-black ifanel-texto-naranja ifanel-width-70 ifanel-margin-top-3">
                                LOREM IPSUM <span class="ifanel-texto-marron">DOLOR</span></h1>
                            <h4 class="ifanel-margin-top-3 ifanel-width-50">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, sed ipsum dolor sit amet.</h4>
                            <div class="row ifanel-montserrat-medium ifanel-width-70 ifanel-margin-top-3">
                                <div class="col">
                                    <h1 class="ifanel-montserrat-black ifanel-texto-naranja">47+</h1>
                                    <h5>Lorem ipsum.</h5>
                                </div>
                                <div class="col">
                                    <h1 class="ifanel-montserrat-black ifanel-texto-naranja">70+</h1>
                                    <h5>Lorem ipsum.</h5>
                                </div>
                                <div class="col">
                                    <h1 class="ifanel-montserrat-black ifanel-texto-naranja">36+</h1>
                                    <h5>Lorem ipsum.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ARTICULO 9 -->
            <div class="ifanel-margin-top-5">
                <div class="container ifanel-montserrat-medium">
                    <h1 class="ifanel-montserrat-bold ifanel-texto-naranja text-center ifanel-width-60 ifanel-margin-auto">
                        ¿LOREM DOMOR SIT RLOREM IPSUM DOLOR ONSECTETUER?</h1>
                    <p class="ifanel-margin-top-3">Lorem ipsum dolor sit amet, <span class="ifanel-montserrat-black">consectetuer adipiscing elit, </span>sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                    </p>
                    <p>Quis nostrud exerci tation <span class="ifanel-montserrat-black">ullamcorper suscipit lobortis
                            nisl ut aliquip </span>ex ea
                        commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                        consequat.</p>
                    <p>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto <span class="ifanel-montserrat-black">odio
                            dignissim qui blandit </span>praesent luptatum zzril delenit augue duis dolore te feugiat
                        nulla facilisis.</p>
                    <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam , <span class="ifanel-montserrat-black">quis nostrud exerci tation ullamcorper suscipit
                            lobortis nisl ut aliquip ex ea commodo
                            consequat.</span></p>
                    <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet <span class="ifanel-montserrat-black">dolore magna aliquam erat volutpat.
                        </span>Ut wisi enim ad minim
                        veniam , quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat.</p>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla <span class="ifanel-montserrat-black">facilisis at vero eros et
                            accumsan </span>et iusto odio
                        dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugiat nulla
                        facilisis.</p>
                    <p>Hendrerit in vulputate velit esse molestie consequat, <span class="ifanel-montserrat-black">vel
                            illum dolore eu feugiat nulla
                            facilisis at vero.</span></p>
                    <div class="ifanel-fondo-marron text-center text-white ifanel-padding-2 ifanel-width-95 ifanel-margin-auto 
                        ifanel-border-radius-20 ifanel-margin-top-3">
                        <h5>Cons ectetuer adipiscing elit, sed <span class="ifanel-montserrat-black">diam nonummy nibh
                                euismod tincidunt ut laoreet
                                dolore magna aliquam </span>erat volutpat. Ut wisi enim ad minim veniam <span class="ifanel-montserrat-black">labortis
                                nisl </span>ut aliquip <span>ex ea commodo consequat. </span>Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit.</h5>
                    </div>
                    <div class="ifanel-fondo-1-v2_2 ifanel-margin-auto ifanel-width-88"></div>
                    <div class="ifanel-width-80 ifanel-margin-auto ifanel-margin-top-3">
                        <h5 class="ifanel-montserrat-black">¿Lorem ipsum dolor sit amet?</h5>
                        <p>Nonummy nibh euismod tincidunt ut <span class="ifanel-montserrat-black">laoreet dolore magna
                                aliquam erat volutpat. Ut wisi
                                enim </span>ad minim veniam.</p>
                        <p class="ifanel-margin-top-3">Quis nostrud <span class="ifanel-montserrat-black">exerci tatut aliquip.</span></p>
                        <p class="ifanel-margin-top-3"><span class="ifanel-montserrat-black">Ex ea commodo. Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit, </span> sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                            enim.</p>
                        <p class="ifanel-margin-top-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                    </div>
                </div>
            </div>

            <!-- ARTICULO 10 -->
            <div class="ifanel-margin-top-5 ifanel-estilo-border-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="container ifanel-montserrat-medium">
                                <div class="ifanel-contenedor-articulo2">
                                    <h1 class="ifanel-montserrat-black ifanel-texto-naranja text-center ifanel-titulo2-formulario">LOREM IPSUMLO</h1>
                                    <H2 class="ifanel-montserrat-bold ifanel-texto-marron-claro text-center ifanel-margin-top-3">
                                        LOREM IPSUM DOLOR SIT AM</H2>
                                    <P class="ifanel-margin-top-3">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed diam <span class="ifanel-montserrat-black">nonummy nibh euismod
                                            tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat</span> quis nostrud exerci tation ullam sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</P>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        <span class="ifanel-montserrat-black">euismod tincidunt ut laoreet dolore magna
                                            aliquam erat volutpat quis nostrud exerci tation
                                            ullam sed diam nonummy nibh euismod tincidunt</span> ut laoreet dolore magna
                                        aliquam erat volutpat ud exerci tation ullam sed diam nonummy nibh euismod.
                                    </p>
                                    <P><span class="ifanel-montserrat-black">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed diam nonummy nibh euismod</span> tincidunt ut laoreet
                                        dolore magna aliquam erat
                                        volutpat quis nostrud exerci tation ullam sed diam nonummy nibh euismod
                                        tincidunt ut laoreet dolore magna aliquam erat volutpat.</P>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ifanel-fondo-articulo10">

                        </div>
                    </div>
                    <module type="btn" text="QUIERO APLICAR A LA OFERTA" button_style="ifanel-boton-articulo2 text-white ifanel-poppins-black ifanel-margin-top-5 ifanel-margin-bottom-5" />
                    <!-- <button class="ifanel-boton-articulo2 text-white ifanel-poppins-black ifanel-margin-top-5 ifanel-margin-bottom-5">QUIERO
                        APLICAR A LA OFERTA</button> -->
                </div>
            </div>
        </section>
        <div class="ifanel-fondo-marron ifanel-estilo-footer text-white ifanel-montserrat-regular">
            <div class="container-fluid ifanel-borde-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <P>© 2022 Lorem ipsum dolor sit amet, consectetuer</P>
                    </div>
                    <div class="col-lg-6">
                        <a class="ifanel-estilo-hipervinculos text-white" href="#" data-bs-toggle="modal" id="condiciones" data-bs-target="#info-modal" onclick="prueba('condiciones')">Aviso
                            Legal</a>
                        <a class="ifanel-estilo-hipervinculos text-white" href="#" data-bs-toggle="modal" id="condiciones2" data-bs-target="#info-modal" onclick="prueba('condiciones2')">Política de
                            Privacidad</a>
                        <a class="ifanel-estilo-hipervinculos text-white" href="#" data-bs-toggle="modal" id="condiciones3" data-bs-target="#info-modal" onclick="prueba('condiciones3')">Política de
                            Cookies</a>
                    </div>
                </div>
            </div>
            <div class="ifanel-texto-footer text-center">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?php print template_url(); ?>js/modal.js"></script>
</body>

</html>