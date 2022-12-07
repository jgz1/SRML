<?php
//Hace conexión con la base de datos
include("conexion.php");
//Declara las variables
  $idre= $_REQUEST['IDRE'];
  $añoreporte= $_POST['AñoReporte'];
  $idequipo= $_POST['IDEquipo'];
  $numeroserie= $_POST['NumeroSerie'];
  $laboratorio= $_POST['Laboratorio'];
  $nombreresponsable= $_POST['NombreResponsable'];
//Remplazar los valores anteriores con las variables del form modificarReporte.php
  $query="UPDATE reporteestado SET AñoReporte='$añoreporte', IDEquipo='$idequipo', NumeroSerie='$numeroserie', Laboratorio='$laboratorio', NombreResponsable='$nombreresponsable' WHERE IDRE='$idre'";
  $resultado= $conexion->query($query);
//Si tiene exito nos llevara a tablaReportes.php donde estaran los datos modificados
  if($resultado){
    header("Location: TablaReportes.php");
  }
  else{
    echo "Error en la modificacion del dato";
  }

?>