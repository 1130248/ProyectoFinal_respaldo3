<?php

/**
* 
*/
class validacion {

	public $usuario;
	public $contrasena;

	public function __construct($usuario, $contrasena){

		$this->user = $usuario;
		$this->contra = $contrasena;
	}

	public function valida() {


	include ('config.php');


	$consulta =  "SELECT * FROM usuarios WHERE usuario='$this->user' and contrasena='$this->contra'";
	$resultado = $mysqli->query($consulta);

	$fila = $resultado->fetch_row();

	$rowcount=mysqli_num_rows($resultado);


	$variable=$fila[2];

	if($rowcount==0){
		$valido=0;



		header("Location:../plantilla/plantilla-principal.php?valido=$valido");
	}elseif ($rowcount>=1) {
		$valido=1;


		session_start();
		$_SESSION["id"]=$fila[0];
		header("Location:../plantilla/plantilla-botones-menu.php?valido=$valido");
//echo "Bienvenido eres ". $usuario." y tu contraseña es ".$contrasena."!!!";

	}
}
}

?>