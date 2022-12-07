<?php
//Hace conexión con conexión.php
include("conexion.php");
//Declara las variables
  $laboratorio= $_POST['Laboratorio'];
  $tipoequipo= $_POST['TipoEquipo'];
  $idequipo= $_POST['IDEquipo'];
  $tipoerror= $_POST['TipoError'];
  $fecha= $_POST['Fecha'];
  $hora= $_POST['Hora'];
  $descripcionfallo= $_POST['DescripcionFallo'];
//Insercion en la tabla
  $query="INSERT INTO solicitudmantenimiento(Laboratorio,TipoEquipo,IDEquipo,TipoError,Fecha,Hora, DescripcionFallo, MatriculaUsuario) VALUES('$laboratorio','$tipoequipo','$idequipo','$tipoerror','$fecha','$hora','$descripcionfallo','1337')";
//Abre conexión
  $resultado= $conexion->query($query);
//Si hay conexión los datos se llevarán hacía la tabla
  if($resultado){
    header("Location: SolicitudMantenimiento.php");
  }
  //Si no hay conexión aparecerá lo siguiente
  else{
    echo "ERROR DE INSERCION";
  }

?>