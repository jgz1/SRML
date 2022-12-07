<?php
//Hace conexión con la base de datos
include("conexion.php");
//Declara las variables
  $ide= $_REQUEST['IDEquipo'];
  $laboratorio= $_POST['Laboratorio'];
  $sistemaop= $_POST['SistemaOperativo'];
  $procesador= $_POST['Procesador'];
  $tiposistema= $_POST['TipoSistema'];
  $ram= $_POST['MemoriaRAM'];
  $tipoequipo= $_POST['TipoEquipo'];
//Remplazar los valores anteriores con las variables del form modificarReporte.php
  $query="UPDATE equipo SET Laboratorio='$laboratorio', SistemaOperativo='$sistemaop', Procesador='$procesador', TipoSistema='$tiposistema', MemoriaRAM='$ram', TipoEquipo='$tipoequipo' WHERE IDEquipo='$ide'";
  $resultado= $conexion->query($query);
//Si tiene exito nos llevara a tablaReportes.php donde estaran los datos modificados
  if($resultado){
    header("Location: consultaEquipo.php");
  }
  else{
    echo "Error en la modificacion del dato";
  }

?>