<?php

//CREANDO MI CONEXION

include('config.php');

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

include('validacion.php');

$validacion=new validacion($usuario, $contrasena);
$validacion->valida();

?>