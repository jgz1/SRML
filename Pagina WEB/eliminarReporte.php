<?php
//Hace conexión con la base de datos
  include("conexion.php");
  $idre= $_REQUEST['IDRE'];
  $query="DELETE reporteestado, Actividad FROM reporteestado 
          INNER JOIN Actividad  
          WHERE reporteestado.IDRE = Actividad.IDReporte 
		  AND reporteestado.IDRE = '$idre'";
  $resultado= $conexion->query($query);
  
  if($resultado){
    header("Location: TablaReportes.php");
  }
  else{
    echo "Error en la eliminacion del dato";
  }

?>