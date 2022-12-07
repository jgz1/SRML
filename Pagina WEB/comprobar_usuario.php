<?php
//Hace conexión con conexión.php
include("conexion.php");
//Declara las variables nombre, apellido, correo
$Correo= $_POST['Correo'];
$Contraseña= $_POST['Contraseña'];

session_start();
$_SESSION['Correo']-$Correo;

$consulta = "SELECT * FROM usuario WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";

$resultado-mysqli_query($conexion,$consulta);

$fila-mysqli_num_rows($resultado);

if($fila){
  header("location:SolicitudMantenimiento.php");
}else{
  $consulta = "SELECT * FROM administrador WHERE Correo = '$Correo' and Contraseña = '$Contraseña'";

  $resultado-mysqli_query($conexion,$consulta);

  $fila-mysqli_num_rows($resultado);
  
  if($fila){
    header("location:SolicitudMantenimiento.php");
  }else{
    ?>
    <?php
    include("InicioSesion.php");
    ?>
    <h1 class="bad"> Usuario o Contraseña Incorrecta</h1>
    <?php
  }
}
myaqli_free_result($resultado);
mysqli_clase($conexion);
?>