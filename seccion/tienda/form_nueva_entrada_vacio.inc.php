<div class="col-12">
	<div class="input-field">
		<input type="text" name="titulo" id="titulo" class="validate">
		<label for="titulo">Nombre del producto</label>
	</div>
	<br>
	<div class="input-field">
		<input type="text" name="url" id="url" class="validate">
		<label for="url">Código de referencia del producto</label>
	</div>
	<br>
	<div class="col-12">
		<ul class="collapsible">
		    <li>
				<div class="collapsible-header" title="Con esta fotografía las personas podrán identificar fácilmente el producto">Selecciona una imagen</div>
				<div class="collapsible-body">
					<span>
						<div class="form-group" id="upload_form">
							<h6><font color="grey">* Selecciona una imagen y luego presiona el boton subir.</font>
							</h6>
							<br>
							<label for="file1" id="label-archivo" class="btn btn-principal">Seleccionar</label>
							<input type="file" name="file1" id="file1" class="d-none">		
							<input name="imagen" class="d-none">					
							<input type="button" value="Subir" name="guardar_imagen" id="guardar_imagen" onclick="subirImagen()"  class="btn btn-principal">
							<progress id="progressBar" class="barra-progreso" value="0" max="100" style="width:100%;height: 0.5em;"></progress>
							<h4 id="status"></h4>				
						</div>
					</span>
				</div>
		    </li>
		</ul>
	</div>
	<br><br>
	<div class="input-field">
		<input type="text" name="url_externa" id="url_externa" class="validate">
		<label for="url_externa">Enlace a redes sociales</label>
	</div>
	<br>
	<div class="input-field">
		<input type="text" name="precio" id="precio">
		<label for="precio">Precio del producto</label>
	</div>
	<br>
	<div class="input-field">
		<textarea id="texto" name="texto" class="materialize-textarea">
<b>Descripción General</b>
Breve descripción del producto, aquí puedes hablar sobre la inspiración al crearlo o recomendar de manera creativa su uso.

Tallas:
XS, S, M

Colores:
<div class="color" style="background-color:# "></div>

Características:
Aquí se escribe el tipo de prenda.
Ej: Camisa con manga larga.
Si la silueta es holgada o se ajusta.
Demás características que se deseen añadir.
			
Composición:
80% Lino, 20% Algodón, etc.

Instrucciones de cuidados:
¿Cómo se debe lavar la prenda? 
¿Se puede usar blanqueador?
¿Se puede retorcer o poner al sol?</textarea>
		<label for="texto">Descripción del producto</label>
    </div> 
	<br>   
	<div class="input-field">
		<input type="text" name="etiqueta" id="etiqueta" class="validate">
		<label for="etiqueta">Categoría del producto</label>
	</div>
</div>