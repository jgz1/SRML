<?php
//Hace conexión con conexión.php
include("conexion.php");
//Declara las variables
  $idequipo= $_POST['IDEquipo'];
  $laboratorio= $_POST['Laboratorio'];
  $sistemaop= $_POST['SistemaOperativo'];
  $procesador= $_POST['Procesador'];
  $tiposistema= $_POST['TipoSistema'];
  $ram= $_POST['MemoriaRAM'];
  $tipoequipo= $_POST['TipoEquipo'];
//Insercion en la tabla
  $query="INSERT INTO equipo(IDEquipo, Laboratorio, SistemaOperativo, Procesador, TipoSistema, MemoriaRAM, TipoEquipo, MatriculaAdmin) VALUES('$idequipo','$laboratorio','$sistemaop','$procesador','$tiposistema','$ram','$tipoequipo','727')";
//Abre conexión
  $resultado= $conexion->query($query);
//Si hay conexión los datos se llevarán hacía la tabla
  if($resultado){
    header("Location: Registro_Equipo_Computo.php");
  }
  //Si no hay conexión aparecerá lo siguiente
  else{
    echo "Error de insercion o posible id de equipo repetido";
  }

?>