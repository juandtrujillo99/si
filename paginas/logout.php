<?php



include_once 'app/ValidadorLogin.inc.php';

include_once 'app/ControlSesion.inc.php';

include_once 'app/Redireccion.inc.php';







ControlSesion :: cerrar_sesion();

Redireccion :: redirigir(SERVIDOR);