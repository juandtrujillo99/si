<?php /*?>
<div id="contacto" class="row  social-m" align="center">
	<div class="col-1 col-md-2"></div>
	<div class="col-12 col-md-4">
		<p class="textoBlack textoSubtitulo">Contacto</p>
		<br>
		<p class="textoRegular">
			Email: <?php echo $emailEmpresa;?>
			<br>
			Teléfono: +57<?php echo $telefonoEmpresa;?>
		</p>
	</div>
	<div class="col-12 col-md-4">
		<div class="d-block d-sm-none"><br><br></div>		
		<p class="textoBlack textoSubtitulo">SOCIAL</p>
		<?php include 'seccion/social.inc.php'; ?>
	</div>
</div>
<?php */?>

<div class="d-none d-sm-block footer">
	<div class="row">		
		<div class="col-1"></div>
		<div class="col-3">
			<div style="padding: 2em 0;">
				<p class="textoBold textoSubtitulo">Sobre nosotros</p>
				<p>Somos la marca ideal para mujeres que buscan un estilo sobrio y atractivo en sus outfits del trabajo, las tardes de café o cenar en una noche bohemia.</p>
			</div>
		</div>
		<div class="col-1"></div>
		<div class="col-3 center-align">
			<div style="padding: 2em 0;">
				<p class="textoBold textoSubtitulo">Síguenos</p>
				<p style="padding: .5em 0;">
					<?php include "seccion/social.inc.php";?><br>
					<?php echo $nickEmpresa;?>
				</p>
			</div>			
		</div>
		<div class="col-3">
			<div style="padding: 2em 0;" align="right">
				<p class="textoBold textoSubtitulo"><?php echo $direccionEmpresa1?></p>
				<p>
					<?php echo $ubicacionEmpresa?><br>
					<?php echo "+57 ".$telefonoEmpresa?><br>
					<?php echo $emailEmpresa?>
						
				</p>
			</div>
		</div>
	</div>
	<div class="row sec2">		
		<div class="col-1"></div>
		<div class="col-2 valign-wrapper">
			<div>
				<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal2.webp"> 
			</div>			
		</div>
		<div class="col-1"></div>
		<div class="col-4 center-align">
			<div style="padding: 2em 0;">
				<p class="textoBold textoSubtitulo">Ayuda</p>
				<p>
					<a href="#">Preguntas frecuentes</a><br>
					<a href="#">¿Cómo comprar?</a><br>
					<a href="#">Guía de tallas</a><br>
					<a href="#">Cuidados</a><br>
				</p>
			</div>
		</div>
		<div class="col-3 right-align">
			<div style="padding: 2em 0;">
				<p class="textoBold textoSubtitulo">Términos y condiciones</p>
				<p>
					<a href="<?php echo RUTA_LEGAL;?>">Política de privacidad</a><br>
					<a href="<?php echo RUTA_LEGAL;?>#cookies">Política de cookies</a><br>
					<a href="<?php echo RUTA_LEGAL;?>#politica-envio">Políticas de envío</a><br>
					<a href="<?php echo RUTA_LEGAL;?>#politica-devolucion">Políticas de devolución</a>
				</p>
			</div>						
		</div>
	</div>
</div>


<div class="d-block d-sm-none footer">
	<div class="row">
		<div class="col-12 row">		
			<div class="col-1"></div>
			<div class="col-10">
				<div style="padding: 1em 0;" align="center">
					<p class="textoBold textoSubtitulo">Síguenos</p><br>
					<p>
						<?php include "seccion/social.inc.php";?><br>
						<?php echo $nickEmpresa;?>
					</p>
				</div>	
				<div style="padding: 1em 0;">
					<p class="textoBold textoSubtitulo">Sobre nosotros</p>
					<p>Somos la marca ideal para mujeres que buscan un estilo sobrio y atractivo en sus outfits del trabajo, las tardes de café o cenar en una noche bohemia.</p>
				</div>		
				<div style="padding: 1em 0 2em 0;">
					<p class="textoBold textoSubtitulo"><?php echo $direccionEmpresa1?></p>
					<p>
						<?php echo $ubicacionEmpresa?><br>
						<?php echo "+57 ".$telefonoEmpresa?><br>
						<?php echo $emailEmpresa?>						
					</p>
				</div>						
			</div>
		</div>
		<div class="col-12 row sec2">	
			<div class="col-1"></div>
			<div class="col-10">
				<div style="padding: 2em 0 1em 0;">
					<p class="textoBold textoSubtitulo">Ayuda</p>
					<p>
						<a href="#">Preguntas frecuentes</a><br>
						<a href="#">¿Cómo comprar?</a><br>
						<a href="#">Guía de tallas</a><br>
						<a href="#">Cuidados</a><br>
					</p>
				</div>
				<div style="padding: 1em 0 2em 0;">
					<p class="textoBold textoSubtitulo">Términos y condiciones</p>
					<p>
						<a href="<?php echo RUTA_LEGAL;?>">Política de privacidad</a><br>
						<a href="<?php echo RUTA_LEGAL;?>#cookies">Política de cookies</a><br>
						<a href="<?php echo RUTA_LEGAL;?>#politica-envio">Políticas de envío</a><br>
						<a href="<?php echo RUTA_LEGAL;?>#politica-devolucion">Políticas de devolución</a>
					</p>
				</div>						
			</div>
		</div>
	</div>
</div>