<?php
//Hace conexión con la base de datos
  include("conexion.php");
  $idsm= $_REQUEST['IDSM'];
  $query="DELETE FROM solicitudmantenimiento WHERE IDSM='$idsm'";
  $resultado= $conexion->query($query);
  
  if($resultado){
    header("Location: Consulta_Solicitudes_Mantenimiento.php");
  }
  else{
    echo "Error en la eliminacion del dato";
  }

?>