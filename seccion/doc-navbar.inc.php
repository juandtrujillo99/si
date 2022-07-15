<?php

if(ControlSesion :: sesion_iniciada() && ControlSesionAdmin :: sesion_iniciada()) {//con inicio de sesion de usuario y admin

	//moviles 
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-m row d-block d-sm-none" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-8">
				<img loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
			</div>
			<div class="col-1"></div>
			<div class="col-2 barras">
				<div class="contenedor-menu">
					<div class="menu-burger"></div>
				</div>
			</div>
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu row">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<img loading="lazy" itemprop="image" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp" class="imagen">
			</div>
		</div>
		<div class="row">
			<br><br>
		</div>
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL_ADMIN;?>">
			<div>
				Administración
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_INICIO_USUARIO;?>">
			<div>
				Feed de usuario
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_LOGOUT;?>">
			<div>
				Cerrar sesión
			</div>
		</a>
		<div class="social-m" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>
	<?php //moviles ?>



	<?php
	//pc
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-pc row d-none d-sm-block" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-4 barras">
				<div class="contenedor-menu-pc">
					<div class="menu-burger-pc"></div>
				</div>
			</div>
			<div class="col-4" align="center">
				<img  loading="lazy" itemprop="image" class="logo" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/icon.webp">
			</div>
			<div class="col-4" align="right">
				<a href="<?php echo RUTA_LOGOUT;?>">
					<i style="padding: .4em 1em; font-size: 2em;" class="black-text fa-solid fa-arrow-right-to-bracket tooltipped" data-position="bottom" data-tooltip="Salir"></i>
				</a>
			</div>		
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu-pc row">
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL_ADMIN;?>">
			<div>
				Administración
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_INICIO_USUARIO;?>">
			<div>
				Feed de usuario
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_PERFIL;?>">
			<div>
				Perfil de usuario
			</div>
		</a>
		<div class="row">
			<br>
		</div>
		<div class="social-pc" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>

	

<?php

}elseif(ControlSesionAdmin :: sesion_iniciada()&&!ControlSesion :: sesion_iniciada()) {//con inicio de sesion de admin

	//barra de navegación superior e icono menu ?>

		
	<div class="barra-navegacion-pc"> <!-- navbar content here  --> 
		<nav class="d-block d-sm-none">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-5">
					<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
				</div>
				<div class="col-4"></div>
				<div class="col-2 valign-wrapper">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>			
			</div>
		</nav>
		<div class="d-none d-sm-block menu-pc">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-2">
					<a href="<?php echo SERVIDOR; ?>">
						<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
					</a>
				</div>
				<div class="col-4"></div>
				<div class="col-4 row center-align valign-wrapper enlaces">
					<a href="<?php echo RUTA_PERFIL_ADMIN; ?>" class="col">Panel de control</a>
					<a href="<?php echo RUTA_GESTOR_ENTRADAS_TIENDA; ?>" class="col">Gestor de tienda</a>
					<a href="<?php echo RUTA_GESTOR_ENTRADAS_BLOG; ?>" class="col">Gestor de blog</a>
					<a href="<?php echo RUTA_LOGOUT; ?>" class="col"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a>
				</div>				
				<div class="col-1"></div>
			</div>	
		</div>	
	</div>

	<?php//barra de navegación lateral?>
	<ul id="slide-out" class="sidenav valign-wrapper row">
		<li class="col-12"><br><br><br></li>
		<li class="col-12">
			<div class="user-view">
				<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
			</div>
		</li>
		<li class="col-12"><a class="waves-effect" href="<?php echo SERVIDOR; ?>">Inicio</a></li>
		<li class="col-12"><a class="waves-effect" href="<?php echo RUTA_PERFIL_ADMIN; ?>">Panel de control</a></li>
		<li class="col-12"><a class="waves-effect" href="<?php echo RUTA_GESTOR_ENTRADAS_TIENDA; ?>">Gestor de tienda</a></li>
		<li class="col-12"><a class="waves-effect" href="<?php echo RUTA_GESTOR_ENTRADAS_BLOG; ?>">Gestor de blog</a></li>
		<li class="col-12"><br><br><br><br><br><br></li>
		<li class="col-12"><a class="waves-effect" href="<?php echo RUTA_LOGOUT; ?>">Cerrar sesión</a></li>
		
	</ul> 
	

<?php

}elseif(ControlSesion :: sesion_iniciada()&&!ControlSesionAdmin :: sesion_iniciada()) {//con inicio de sesion de usuario

	//moviles 
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-m row d-block d-sm-none" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-8">
				<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
			</div>
			<div class="col-1"></div>
			<div class="col-2 barras">
				<div class="contenedor-menu">
					<div class="menu-burger"></div>
				</div>
			</div>
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu row">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<img loading="lazy" itemprop="image" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp" class="imagen">
			</div>
		</div>
		<div class="row">
			<br><br>
		</div>
		<a class="waves-effect waves-light" href="<?php echo RUTA_INICIO_USUARIO;?>">
			<div>
				Inicio
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_BLOG;?>">
			<div>
				Newsletter
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_ENTRENAR;?>">
			<div>
				Guías de ejercicio
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_TIENDA;?>">
			<div>
				Tienda
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_LOGOUT;?>">
			<div>
				Cerrar sesión
			</div>
		</a>
		<div class="social-m" align="center">
		<p class="mayusculas">Contacto</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>
	<?php //moviles ?>



	<?php
	//pc
	//barra de navegación superior e icono menu ?>
	<div class="barra-navegacion-pc row d-none d-sm-block" style="background-color: white;<?php echo $navbar;?>">
		<div class="row">
			<div class="col-4 barras">
				<div class="contenedor-menu-pc">
					<div class="menu-burger-pc"></div>
				</div>
			</div>
			<div class="col-4" align="center">
				<img  loading="lazy" itemprop="image" class="logo" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/icon.webp">
			</div>
			<div class="col-4" align="right">
				<a href="<?php echo RUTA_LOGOUT;?>">
					<i style="padding: .4em 1em; font-size: 2em;" class="black-text fa-solid fa-arrow-right-to-bracket tooltipped" data-position="bottom" data-tooltip="Salir"></i>
				</a>
			</div>		
		</div>
	</div>

	<?php
	//barra de navegación lateral izquierda ?>
	<div class="transparente"></div>
	<div class="menu-pc row">
		<a class="waves-effect waves-light" href="<?php echo RUTA_INICIO_USUARIO;?>">
			<div>
				Inicio
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_BLOG;?>">
			<div>
				Newsletter
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_ENTRENAR;?>">
			<div>
				Guías de ejercicios
			</div>
		</a>
		<a class="waves-effect waves-light" href="<?php echo RUTA_TIENDA;?>">
			<div>
				Tienda
			</div>
		</a>
		<div class="row">
			<br>
		</div>
		<div class="social-pc" align="center">
		<p>SOCIAL</p>
			<?php include 'seccion/social.inc.php'; ?>
		</div>
	</div>

	

<?php

}else{//sin inicio de sesion
 
	//barra de navegación superior e icono menu ?>

		
	<div class="barra-navegacion-pc"> <!-- navbar content here  --> 
		<nav class="d-block d-sm-none">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-5">
					<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
				</div>
				<div class="col-4"></div>
				<div class="col-2 valign-wrapper">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>			
			</div>
		</nav>
		<div class="d-none d-sm-block menu-pc">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-2">
					<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/horizontal.webp">
				</div>
				<div class="col-4 row center-align valign-wrapper enlaces">
					<a href="<?php echo SERVIDOR; ?>" class="col">Inicio</a>
					<a href="<?php echo RUTA_TIENDA; ?>" class="col">Catálogo</a>
					<a href="<?php echo RUTA_BLOG; ?>" class="col">Newsletter</a>
					<a href="<?php echo RUTA_NOSOTROS; ?>" class="col">Nosotros</a>
				</div>				
				<div class="col-3 valign-wrapper">
					<form class="col-12" role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
						<div class="input-field">
							<i class="material-icons prefix">search</i>
							<input type="text" id="autocomplete-input" placeholder="¿Qué estás buscando?" name="termino-buscar-tienda" required class="autocomplete">				
							<input type="hidden" name="buscar-tienda">
						</div>
		            </form>	
				</div>				
				<div class="col-1"></div>
			</div>	
		</div>	
	</div>

	<?php//barra de navegación lateral?>
	<ul id="slide-out" class="sidenav valign-wrapper row">
		<li class="col-12"><br><br><br></li>
		<li class="col-12">
			<div class="user-view">
				<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
			</div>
		</li>
		<li class="col-12">
			<div class="col-12 row">
				<div class="col-1"></div>
				<div class="col-10">
					<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
						<div class="input-field">
							<i class="material-icons prefix">search</i>
							<input type="text" id="autocomplete-input" placeholder="¿Qué estás buscando?" name="termino-buscar-tienda" required class="autocomplete">				
							<input type="hidden" name="buscar-tienda">
						</div>
				    </form>
			    </div>
		    </div>
		</li>
		<li class="col-12"><a class="waves-effect" href="<?php echo SERVIDOR; ?>">Inicio</a></li>
		<li class="col-12"><a class="waves-effect" href="<?php echo RUTA_TIENDA; ?>">Catálogo</a></li>
		<li class="col-12"><a class="waves-effect" href="<?php echo RUTA_BLOG; ?>">Newsletter</a></li>
		<li class="col-12"><a class="waves-effect" href="<?php echo RUTA_NOSOTROS; ?>">Nosotros</a></li>
		<li class="col-12"><br><br><br><br><br><br></li>
	</ul>	
  
  
<?php
}

  






  