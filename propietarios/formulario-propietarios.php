<?php
// CREANDO MI CONEXION
include('../conexion/config.php');



if (isset($_GET['id_prop'])){
	$id_propietario=$_GET['id_prop'];

	$mysqli->set_charset("utf8");

$consulta = "SELECT * FROM propietarios where id_propietario=$id_propietario";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();
$s="";
$id_propietario=$fila[0];
$nombre_propietario=$fila[1];
$apellido_propietario=$fila[2];
$direccion=$fila[3];
$telefono=$fila[4];
$correo=$fila[5];
$nunidades=$fila[6];

}else{
$s="s";
$id_propietario="";
$nombre_propietario="";
$apellido_propietario="";
$direccion="";
$telefono="";
$correo="";
$nunidades="";

}

?>
<div class="form-registro">
		<br>
		<h1>Modificar datos</h1>
		<br>
		<form method="post" action="actualizar-propietarios.php">
			
			<div class="formulario">
		        <label>Nombre:  <input type="text" name="nombre" value="<?php echo $nombre_propietario?>" require=""></label>
		        <label>Apellido:  <input type="text" name="apellido" value="<?php echo  $apellido_propietario?>" require=""></label>
		        <label>Dirección: <input type="text" name="direccion" value="<?php echo $direccion?>" required=""></label>
		        <label>Telefono:  <input type="text" name="telefono" value="<?php echo $telefono?>" required=""></label>
		        <label>Correo:   <input type="text" name="correo" value="<?php echo $correo?>" required=""></label>
		        <label>Unidades: <input type="number" name="nunidades" value="<?php echo $nunidades?>" required=""></label>
		        <input type="hidden" name="id_propietario<?php echo $s;?>" value="<?php echo  $id_propietario;?>">
		       
		    </div>
		    <br>
		    <br>

		   
	<center><button value="1"  name="env" class="boton"><span>Aceptar</span></button></center>
			
		</form>
					</div>
					<br>
					<br>