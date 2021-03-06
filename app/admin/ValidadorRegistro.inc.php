<?php



include_once 'RepositorioAdmin.inc.php';



class ValidadorRegistroAdmin{


	private $aviso_inicio;
	private $aviso_cierre;



	private $nombre;
	private $email;
	private $clave;


	private $error_nombre;
	private $error_email;
	private $error_clave1;
	private $error_clave2;



	public function __construct($nombre, $email, $clave1, /*$clave2, */$conexion){

		$this -> aviso_inicio = "<span class='alert alert-danger'>";
		$this -> aviso_cierre = "</span>";

		$this -> nombre = "";
		$this -> email = "";
		$this -> clave = "";

		$this -> error_nombre = $this -> validar_nombre($conexion, $nombre);
		$this -> error_email = $this -> validar_email($conexion, $email);
		$this -> error_clave1 = $this -> validar_clave1($clave1);
		/*
		$this -> error_clave2 = $this -> validar_clave2($clave1, $clave2);
		
		
		//Esta seccion se encarga de verificar que clave 1 y clave 2 sean iguales para mayor seguridad
		if ($this -> error_clave1 === "" && $this -> error_clave2 === "") {
			$this -> clave = $clave1;
		}
		*/

		$this -> clave = $clave1;
	}


	private function variable_iniciada($variable){
		if (isset($variable) && !empty($variable)) {
			return true;
		}
		else{
			return false;
		}
	}


	private function validar_nombre($conexion, $nombre){
		if(!$this -> variable_iniciada($nombre)){
			return "";
		}
		else {
			$this -> nombre = $nombre;
		}
		if (!empty($nombre) && strlen($nombre) < 1) {
			return "Escribe tu nombre completo.";
		}

		if (strlen($nombre) > 40) {
			return "El nombre no puede ser tan largo.";
		}
		return "";
	}





	private function validar_email($conexion, $email){
		if(!$this -> variable_iniciada($email)){
			return "Agrega un email.";
		}
		else {
			$this -> email = $email;
		}
		if (RepositorioAdmin :: email_existe($conexion, $email)) {
			return "El email ya está en uso, prueba con otro.";
		}
		return "";
	}


	private function validar_clave1($clave1){
		if(!$this -> variable_iniciada($clave1)){
			return "Agrega una contraseña valida.";
		}
		return "";
	}


/*
	private function validar_clave2($clave1, $clave2){
		if (!$this -> variable_iniciada($clave1)) {
			return "Primero debes rellenar la contraseña.";
		}

		if(!$this -> variable_iniciada($clave2)){
			return "Las contraseñas no coinciden.";
		}

		if($clave1 !== $clave2){
			return "Las contraseñas deben coincidir.";
		}
		return "";
	}
*/
	
	public function obtener_nombre(){
		return $this -> nombre;
	}
	public function obtener_email(){
		return $this -> email;
	}
	public function obtener_clave(){
		return $this -> clave;
	}








	public function obtener_error_nombre(){
		return $this -> error_nombre;
	}
	public function obtener_error_email(){
		return $this -> error_email;
	}
	public function obtener_error_clave1(){
		return $this -> error_clave1;
	}
	/*
	public function obtener_error_clave2(){

		return $this -> error_clave2;

	}*/

	

	public function mostrar_nombre(){
		if ($this -> nombre !== "") {
			echo 'value="'. $this -> nombre . '"';
		}
	}
	public function mostrar_error_nombre(){
		if ($this -> error_nombre !== "") {
			echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre;
		}
	}

	public function mostrar_email(){
		if ($this -> email !== "") {
			echo 'value="'. $this -> email . '"';
		}
	}

	public function mostrar_error_email(){
		if ($this -> error_email !== "") {
			echo $this -> aviso_inicio . $this -> error_email . $this -> aviso_cierre;
		}
	}

	public function mostrar_error_clave1(){
		if ($this -> error_clave1 !== "") {
			echo $this -> aviso_inicio . $this -> error_clave1 . $this -> aviso_cierre;
		}
	}
	/*
	public function mostrar_error_clave2(){
		if ($this -> error_clave2 !== "") {
			echo $this -> aviso_inicio . $this -> error_clave2 . $this -> aviso_cierre;
		}
	}*/

	public function registro_valido(){

		if ($this -> error_nombre === "" &&
			$this -> error_email === "" &&
			$this -> error_clave1 === "" /*&&
			$this -> error_clave2 === ""*/) {
			return true;
	}
		else{
			return false;
		}
	}
}