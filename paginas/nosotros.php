<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';



$titulo = "Acerca de ".$nombreEmpresa;
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/suscribete-a-newsletter-m.webp";



include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>

<div class="container-fluid" style="font-size: 1.4em; color: white;">

	<div class="sobreponer1 ">
        <div class="imagen-background1">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/12.webp" class="imagen d-none d-sm-block">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/12.webp" class="d-block d-sm-none section">
        </div>
        <div class="row texto-contenido center-align valign-wrapper">
            <div class="col-12 row">
                <div class="col-md-3 col-1"></div>
                <div class="col-md-6 col-10" align="center">
                    <img  loading="lazy" itemprop="image" class="imagen-2 d-none d-sm-block" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal2.webp">
                    <img  loading="lazy" itemprop="image" class="imagen-2 d-block d-sm-none" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado2.webp">
                    <p itemprop="description" class="textoBook">Desde los comienzos de la humanidad, la mujer ha desempeñado un papel fundamental que nos permitió evolucionar y alcanzar hitos inimaginables a lo largo de la historia.</p>          
                </div>
            </div>           
        </div>
	</div>

	<div class="sobreponer1 section">
        <div class="imagen-background1">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/14.webp" class="imagen d-none d-sm-block">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/14.webp" class="d-block d-sm-none section">
        </div>
        <div class="row texto-contenido center-align valign-wrapper">
            <div class="col-12 row">
                <div class="col-md-3 col-1"></div>
                <div class="col-md-6 col-10" align="center">
                    <p itemprop="description" class="textoBook">Todas las mujeres tuvieron y tienen algo en común, enfrentarse a una sociedad que las infravalora y no las tiene en cuenta en la toma de decisiones, por supuesto, gracias a su lucha constante y grandes sacrificios que revolucionaron el pensamiento humano hemos visto los cambios y avances que nos han permitido conocer el mundo en el que vivimos hoy.</p>          
                </div>
            </div>           
        </div>
	</div>

	<div class="sobreponer1 section">
        <div class="imagen-background1">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/16.webp" class="imagen d-none d-sm-block">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/16.webp" class="d-block d-sm-none section">
        </div>
        <div class="row texto-contenido center-align valign-wrapper">
            <div class="col-12 row">
                <div class="col-md-3 col-1"></div>
                <div class="col-md-6 col-10" align="center">
                    <p itemprop="description" class="textoBook">Científicas, inventoras, matemáticas, artistas, deportistas, defensoras de la libertad y hasta piratas, nos dejaron su legado para que juntos hagamos del planeta un lugar de equidad y armonía.</p>          
                </div>
            </div>           
        </div>
	</div>

	<div class="sobreponer1 section">
        <div class="imagen-background1">
        	<img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/18.webp" class="imagen d-none d-sm-block">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/18.webp" class="d-block d-sm-none section">
        </div>
        <div class="row texto-contenido center-align valign-wrapper">
            <div class="col-12 row">
                <div class="col-md-3 col-1"></div>
                <div class="col-md-6 col-10" align="center">
                    <p itemprop="description" class="textoBook">Inspirados por mujeres como la bióloga marina Sylvia Earle (pionera en la exploración submarina quien desde hace más de cuatro décadas ha tenido como misión descubrir, estudiar y proteger los océanos), nos interesamos por el rol elemental que todas las mujeres desempeñamos para hacer de este un mejor mundo.</p>          
                </div>
            </div>           
        </div>
	</div>

	<div class="sobreponer1 section">
        <div class="imagen-background1">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/20.webp" class="imagen d-none d-sm-block">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/20.webp" class="d-block d-sm-none section">
        </div>
        <div class="row texto-contenido center-align valign-wrapper">
            <div class="col-12 row">
                <div class="col-md-3 col-1"></div>
                <div class="col-md-6 col-10" align="center">
                    <p itemprop="description" class="textoBook">Y mientras cada mujer se ocupa de enfrentar sus propios miedos y limitaciones para llevar a cabo todo lo que se propone, en SYLVI nuestras diseñadoras encontraron la mejor forma de brindar en las prendas un gran balance en el diseño, la horma, la atención al detalle en la confección y desde luego la calidad de los materiales.</p>          
                </div>
            </div>           
        </div>
	</div>

	<div class="sobreponer1 section">
        <div class="imagen-background1">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/22.webp" class="imagen d-none d-sm-block">
            <img loading="lazy" itemprop="image" alt="imagen de portada de SYLVI" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/22.webp" class="d-block d-sm-none section">
        </div>
        <div class="row texto-contenido center-align valign-wrapper">
            <div class="col-12 row">
                <div class="col-md-3 col-1"></div>
                <div class="col-md-6 col-10" align="center">
                    <p itemprop="description" class="textoBook">Queremos que las mujeres puedan contar con prendas básicas, cómodas, con un toque de exclusividad y muchísima versatilidad. Haciendo uso del concepto "fondo de armario" para mujeres que quieren conservar un estilo sobrio y atractivo en sus outfits del trabajo, las tardes de café o cenar en una noche bohemia.</p>          
                </div>
            </div>           
        </div>
	</div>

	<div class="row d-block d-sm-none footer">	
		<div class="col-12">
			<div style="padding-top: 2em;" align="center">
				<p class="textoBold textoSubtitulo" style="color: black;">Síguenos</p><br>
				<p>
					<?php include "seccion/social.inc.php";?><br>
					<?php echo $nickEmpresa;?>
				</p>
			</div>						
		</div>
	</div>
	


</div>

<?php //body ?>



<?php
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';

?>