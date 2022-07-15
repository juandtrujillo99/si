<?php


include_once 'app/usuario/RepositorioRecuperacionClave.inc.php';
include_once 'app/Redireccion.inc.php';


Conexion::abrir_conexion();
if (RepositorioRecuperacionClave::url_secreta_existe(Conexion::obtener_conexion(), $url_personal)) {
	$id_usuario = RepositorioRecuperacionClave::obtener_id_usuario_mediante_url_secreta(Conexion::obtener_conexion(), $url_personal);
}
else{
	Redireccion:: redirigir(RUTA_LOGIN);
}


if (isset($_POST['guardar-clave'])) {
	//validar clave 1
	//validar clave 2 a ver si coincide
	$clave_cifrada = password_hash($_POST['clave'], PASSWORD_DEFAULT);
	$clave_actualizada = RepositorioUsuario::actualizar_password(Conexion::obtener_conexion(), $id_usuario, $clave_cifrada);


	//redirigir a notificacion de actualizacion correcta y ofrecer link a login
	if ($clave_actualizada) {
		Redireccion:: redirigir(RUTA_CLAVE_ACTUALIZADA);
	}
	else{
		//informar error
		echo 'ERROR';
	}
}



Conexion::cerrar_conexion();


$titulo = "Recuperacion de contraseña";



include_once 'seccion/cabecera-inicio.inc.php';
include_once 'scripts/mostrarPass.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>
<div class="container-fluid">
	<?php //inicio ?>
	<div class="row section">
	    <?php //registro de usuario?>
	    <div class="col-12 col-md-5 center-align valign-wrapper" style="background-color: #A60303; color: white;">
	        <div class="row">
	        	<h1 class="textoBlack">Restablece tu <br> contraseña</h1>
	            <div class="d-block d-sm-none" style="height: 10vh;"></div>
	        </div>
	    </div>
	    <div class="row col-md-7 center-align valign-wrapper">
	    	<div class="col-1 col-md-3"></div>
	    	<div class="col-10 col-md-6">
	    		<div class="col-12" align="left">
	    			<p class="textoBlack textoSubtitulo">Actualizar contraseña</p>
	    			<br>
	    			<p>La próxima vez harás 20 sentadillas y 10 flexiones para poder cambiarla.</p>
	    			<br>
	    		</div>
	    		<form role="form" method="post" class="col-12" action="<?php echo RUTA_RECUPERACION_CLAVE."/".$url_personal; ?>">
					<div class="input-field row">
						<input class="col-9" type="password" name="clave" id="txtPassword">
						<label for="clave">Nueva contraseña</label>						
						<div class="col-1"></div>
						<button class="col-2 btn" id="show_password" type="button" onclick="mostrarPassword()"><span class="fa fa-eye-slash icon"></span></button>
						<br><br>
					</div>
					<button type="submit" id="boton" class="btn btn-secundario-animado" name="guardar-clave">Actualizar</button>
				</form> 
				<div class="col-12"><br></div>
	    	</div>
	    	<div class="col-1 col-md-3"></div>	    	
	    </div>
	</div>
	<?php //fin del formulario 
	include_once 'seccion/copyright.inc.php';
	?>
</div>
<?php //body ?>



<?php
include_once 'seccion/doc-terminacion.inc.php';
?>