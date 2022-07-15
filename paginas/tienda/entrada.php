<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/Usuario.inc.php';
include_once 'app/admin/Admin.inc.php';
include_once 'app/tienda/Entrada.inc.php';
include_once 'app/tienda/Comentario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/tienda/RepositorioEntrada.inc.php';
include_once 'app/tienda/RepositorioComentario.inc.php';



$titulo = $entrada -> obtener_titulo();
$url = RUTA_ENTRADA_TIENDA . '/' .$entrada -> obtener_url();
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/portada-inicio.webp";

include_once 'seccion/cabecera-inicio.inc.php';
?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=625b4e8e85d62e001964c39a&product=sop' async='async'></script>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link rel="canonical" href="<?php echo $url; ?>">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
?>
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
<?php
include_once 'seccion/doc-navbar.inc.php';

//entrada.php es el archivo encargado de crear las entradas, es una plantilla
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 row entrada" style="padding: 6em 0 1.5em 0;">  
            <div class="col-md-6 col-12">
                <br class="d-none d-sm-block">
                <p class="textoParrafo1a" style="text-decoration: underline;"><?php echo $entrada -> obtener_etiqueta(); ?></p>
                <br>
                <a class="col modal-trigger d-block d-sm-none" href="#mostrarDetalle">
                    <img style="border-radius: 1.5em;" loading="lazy" itemprop="image" src="<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>" class="imagen" alt="<?php echo $entrada -> obtener_titulo(); ?>" >
                </a>
                <a class="col d-none d-sm-block" href="<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>">
                    <img style="border-radius: 1.5em;" loading="lazy" itemprop="image" src="<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>" class="imagen" alt="<?php echo $entrada -> obtener_titulo(); ?>" >
                </a>
            </div>
            <div class="col-1 d-none d-sm-block"></div>
            <div class="col-md-5 d-none d-sm-block" style="position: fixed;right: 0;padding: 5em 0;">
                <h1 class="textoTitulo"><?php echo $entrada -> obtener_titulo(); ?></h1>
                <br>
                <div class="textoParrafo1a">Opiniones: <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
                <br><br>
                <div class="row valign-wrapper">
                    <div class="col-3">
                        <div class="textoParrafo" title="Pesos colombianos">$<?php echo $entrada -> obtener_precio(); ?> COP</div>  
                    </div>
                    <div class="col-4">
                        <a class="btn btn-secundario-animado" style="font-size: .8em" href="<?php echo $whatsappCompra."%20".RUTA_ENTRADA_TIENDA."/".$entrada -> obtener_url(); ?>"><p>Comprar</p></a>
                    </div>
                </div>  
                <br><br>
                <div align="left" class="sharethis-inline-share-buttons"></div>       
            </div>
            <div class="col-12 d-block d-sm-none">
                <br><br>
                <h1 class="textoTitulo"><?php echo $entrada -> obtener_titulo(); ?></h1>
                <div class="textoParrafo1a">Opiniones: <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
                <br>
                <div class="row valign-wrapper">
                    <div class="col-5">
                        <div class="textoParrafo" title="Pesos colombianos">$<?php echo $entrada -> obtener_precio(); ?> COP</div>  
                    </div>
                    <div class="col-4">
                        <a class="btn btn-secundario-animado" style="font-size: .8em" href="<?php echo $whatsappCompra."%20".RUTA_ENTRADA_TIENDA."/".$entrada -> obtener_url(); ?>"><p>Comprar</p></a>
                    </div>
                </div>  
                <br><br>
                <div align="left" class="sharethis-inline-share-buttons"></div>       
            </div>
            <div class="col-12 col-md-6">
                <hr><br>
                <p class="tienda">
                    <?php echo nl2br($entrada -> obtener_texto()); ?>
                </p>
                <br><br>   
                <div class="valign-wrapper">
                    <ul id="tabs-swipe-demo row" class="tabs">
                        <li class="tab"><a href="#guia-tallas">Guía de tallas</a></li>
                        <li class="tab"><a class="active" href="#comentarios">Comentarios</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div id="guia-tallas" class="row">
                        <p class="col-12">
                            <b>Recomendaciones para encontrar tu talla ideal SYLVI</b>
                            <br><br>
                            Es posible que te llegues a equivocar en tallas cuando no conoces la marca, pero una vez te enamores de ella ya sabrás con seguridad qué comprar.
                            <br><br>
                            Para saber cuál es tu talla ideal, sólo debes seguir los siguientes pasos:
                            <br><br>
                            Mide tu pecho (Aplica para prendas superiores): Con un metro flexible, rodea tus pectorales en la parte de mayor volumen.
                            <br><br>
                            Mide tu cintura: Con un metro flexible, rodea tu cintura en la parte de más estrecha.
                            <br><br>
                            Mide tu cadera: Con un metro flexible, rodea tus caderas en la parte de mayor volumen. Asegúrate que al hacerlo, estés completamente de pie y con los pies juntos.
                            <br><br>
                            Mide tu tiro: Toma un metro flexible, ponlo en la unión de las dos costuras en la entrepierna y mide hacia arriba hasta donde termina la pretina. De igual manera lo haces para el tiro posterior.
                            <br><br>
                            Mide tu bota (Aplica para prendas inferiores): Toma la bota y dóblala a la mitad, toma un metro flexible y mide de una esquina a otra, esta medida la multiplicas por dos y te dará la medida total.
                            <br><br>
                            Mide tu entrepierna (Aplica para prendas inferiores): Con un metro flexible, mide la longitud de la pierna de la ingle al tobillo.
                            <br><br>
                            Te queremos dar adicional unas recomendaciones básicas:
                            <br><br>
                            1. Si estás entre dos tallas, compra la talla más grande si te gusta la ropa un poco más holgada; elige la talla más chica en caso que te guste la ropa más ajustada.
                            <br><br>
                            2. Para las camisas o camisetas, si tienes gran diferencia entre tu pecho y cintura, elige la talla basado en aquella que te dio mayor medida.
                            <br><br>
                            3. Para pantalones, si tienes gran diferencia entre tu talla de cintura, caderas o entrepierna, elige tu talla según la medida de tus caderas.
                            <br><br>
                            4. Si lo compras y no es tu talla, ¡no te preocupes!, puedes devolver tus productos sin problema y cambiarlos por la talla que mejor se te ajuste.
                            <br><br>
                        </p>
                        <div class="col-12 center-align">
                            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/guia-tallas.webp" class="imagen-3">
                        </div>
                    </div>
                    <div id="comentarios" class="col-12">
                        <script async src="https://comments.app/js/widget.js?3" data-comments-app-website="-69nWccB" data-limit="5" data-color="000"></script>
                    </div>
                </div>                
            </div>           
        </div>
        <div class="col-1"></div>
    </div>
</div>
<div class="row col-12" style="background-color: white;">
    <div class="col-1"></div>
    <div class="col-10">
        <?php include_once 'seccion/tienda/entradas_al_azar.inc.php'; ?> 
        <br><br>       
    </div>
    <div class="col-1"></div>
</div>




<!-- Modal para cambio de nombre y apellido -->
<div id="mostrarDetalle" class="modal">
    <div class="modal-content">
        <div class="row col-12">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12">
                <iframe src="<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>" style="width: 100%;height:40vh;border: 0;"></iframe>                          
            </div>
            <div class="col-md-3"></div>
        </div>        
    </div>
</div>


<?php
include_once 'seccion/inicio/suscripcion.inc.php';
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
