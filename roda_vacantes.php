<?php
include("conexion_db.php");

if(isset($_POST['send'])){

	if(strlen($_POST['nombre']) >= 1 &&
   
	   strlen($_POST['telefono']) >= 1 && 

	   strlen($_POST['correo']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$telefono = trim($_POST['telefono']);
		$correo = trim($_POST['correo']);
		$consulta = "INSERT INTO trabajos(nombre, telefono, correo ) VALUES ('$nombre','$telefono','$correo')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<div class="container">
	<div class="alert alert-succes alert-dismissible fade show" role="alert">
  <strong>Yess!</strong> Su mensaje ha sido enviado.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
<?php
		} else {
			?>
			<div class="container">
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Rayos!</strong> Hemos Fallado.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
			
			<?php
			}
		} else {
		
              ?>
<div class="container">
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Oyeee!</strong> Por Favor rellena los campos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
			<?php
			
		}
		
}



?>


