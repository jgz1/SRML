<?php
//Hace conexión con conexión.php
include("conexion.php");
//Declara las variables
  //------------------------------------------------------------------------
  //$idreporte= $_POST['IDReporte'];
  $añoreporte= $_POST['AñoReporte'];
  $idequipo= $_POST['IDEquipo'];
  $numeroserie= $_POST['NumeroSerie'];
  $laboratorio= $_POST['Laboratorio'];
  $nombreresponsable= $_POST['NombreResponsable'];
  //MatriculaAdm === index
  //------------------------------------------------------------------------
  $fechacomienzo= $_POST['FechaComienzo'];
  $actividad= $_POST['Actividad'];
  $observaciones= $_POST['Observaciones'];
  //------------------------------------------------------------------------
  
//Realiza la insercion
//Obtener matricula desde el html dentro del form extraera desde el header su matricula y la pasaremos aca - La MatriculAdm es foreign key de la matricula del administrador
  $sql="INSERT INTO reporteestado
  (AñoReporte, IDEquipo, NumeroSerie, Laboratorio, NombreResponsable, MatriculaAdm) 
  VALUES
  ('$añoreporte','$idequipo','$numeroserie','$laboratorio','$nombreresponsable','727')";
  $query=mysqli_query($conexion,$sql);
  
  if($query){
	//Comparacion para insertar la foreign key de IDReporte del reporte generado anteriormente
    $query_intermedio="SELECT IDRE FROM reporteestado WHERE IDRE=(SELECT max(IDRE) FROM reporteestado)";
    $resultado= $conexion->query($query_intermedio);
	if (!$resultado) {
        echo 'Error al momento de extraer la llave foranea' . mysqli_error();
    } else {
	    $row = mysqli_fetch_row($resultado);
	    //echo $row[0]; //Comprobacion...
		$sql2="INSERT INTO actividad
		(FechaComienzo, Actividad, Observaciones, IDReporte) 
    	VALUES
		('$fechacomienzo','$actividad','$observaciones','$row[0]')";
		$query2=mysqli_query($conexion,$sql2);
		
		echo 'Insercion exitosa';
		
		header("Location: FormularioReporte.php");
	}
  } else {
	//Comprobacion...
	/*echo $sql;
	echo '<br>';
	echo $query;
	echo '<br>';*/
	
    echo 'ERROR DE INSERCION';
	
  }
?>