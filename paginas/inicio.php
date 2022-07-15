<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';
include_once 'app/tienda/EscritorEntradas.inc.php';

if(!ControlSesion::sesion_iniciada() && !ControlSesionAdmin::sesion_iniciada()) {
    Conexion :: abrir_conexion();
} else {

    if (ControlSesionAdmin::sesion_iniciada()) {
        Conexion :: abrir_conexion();
        $id = $_SESSION['id_admin'];
        $admin = RepositorioAdmin :: obtener_admin_por_id(Conexion::obtener_conexion(), $id);
    }
    elseif (ControlSesion::sesion_iniciada()) {
        Conexion :: abrir_conexion();
        $id = $_SESSION['id_usuario'];
        $usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
    }
}


if (isset($_POST['enviar'])) {
	Conexion :: abrir_conexion();

	$validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], Conexion :: obtener_conexion());


	if($validador -> registro_valido()){
		$usuario = new Usuario('', 
			$validador-> obtener_nombre(), 
			$validador-> obtener_email(), 
			'',
			'');


		$usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);
		if ($usuario_insertado) {
			//redirigir a REGISTRO CORRECTO
			Redireccion::redirigir(RUTA_REGISTRO_CORRECTO . '/' . $usuario -> obtener_nombre());
			
		}
		else{
			echo "no sirve";
		}
	}
}



$titulo = "Inicio | ".$nombreEmpresa;
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/portada-inicio.webp";


include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>

<div class="container-fluid">
		<?php
		include_once 'seccion/inicio/portada.inc.php';	
		?>	
		<div class="row">
			<div class="col-12 center-align" style="font-size: 1.5em;padding: 2em;">
				<p class="textoBookBold">Prendas y accesorios exclusivamente para ti</p>
				<p class="textoBook">Últimos productos</p>
			</div>
			<div class="col-12 row">
				<div class="col-1"></div>				
				<div class="col-10 row">
					<?php EscritorEntradasTienda::escribir_cuatro_entradas(); ?>
				</div>
				<div class="col-1"></div>	
				<div class="col-12 center-align">					
				    <a class="btn btn-secundario-animado" href="<?php echo RUTA_TIENDA; ?>"><p class="textoBold">Ver más</p></a>
				    <br><br><br>
				</div>
			</div>
		</div>
		<?php
		include_once 'seccion/inicio/suscripcion.inc.php';	
		?>	
</div>

<?php //body ?>



<?php
include_once 'seccion/footer.inc.php';
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>