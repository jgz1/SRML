<?php
//Hace conexión con la base de datos
  include("conexion.php");
  $ide= $_REQUEST['IDEquipo'];
  $query="DELETE FROM equipo WHERE IDEquipo='$ide'";
  $resultado= $conexion->query($query);
  
  if($resultado){
    header("Location: consultaEquipo.php");
  }
  else{
    echo "Error en la eliminacion del dato";
  }

?>