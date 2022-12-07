<!DOCTYPE html>
<html>
<head>
    <title>Historial</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--CSS-->
	<!--<link rel="StyleSheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="StyleSheet" href="css/Cajas.css" type="text/css">
    <link rel="stylesheet" href="css/Contenido.css" type="text/css">
	<link rel="stylesheet" href="css/VentanaEmergente.css" type="text/css">
	<!---->
</head>
<body>

<!--Cabezera-->
    <header id="Cabeza">
        <div id="DescripcionPagina"> 
		    <img src="images/LogoIMG.png" alt="LOGO" id="DescripcionLogo"> <!--Logo de la pagina-->
			<div id="DescripcionTitulo">Historial de reportes </div> <!--Titulo de la pagina-->
		</div>
        <nav id="CabezaBotonesCaja1">
		    <a href="Menu_Admin.php" id="CabezaBoton1"> <img src="images/InicioIMG.png" alt="Inicio" width="40px"> </a> 
            <a href="" id="CabezaBoton1"> <img src="images/NotificacionIMG.png" alt="Notificacion" width="40px"> </a>
		    <a href="" id="CabezaBoton1"> <img src="images/ConfiguracionIMG.png" alt="Configuracion" width="40px"> </a>
        </nav>
		<nav id="CabezaBotonesCaja2">
		    <a href="" id="CabezaBoton2"> <img src="images/UsuarioIMG.png" alt="Usuario" width="40px"> </a>
		    <a href="" id="CabezaBoton2"> <img src="images/MenuIMG.png" alt="Menu" width="40px"> </a>
        </nav>
    </header>
	
    <center>
        <br><br><table>
            <thead>
                <tr>
                  <th colspan="10">Historial de reportes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
				  <td>ID del reporte</td>
                  <td>Año del reporte</td>
                  <td>ID del equipo</td>
                  <td>Numero de serie</td>
                  <td>Laboratorio</td>
                  <!--<td>Fecha de comienzo</td>
                  <td>Actividad</td>
                  <td>Observaciones</td>-->
                  <td>Nombre del responsable</td>
				  <td>Matricula del responsable</td>
				  <td colspan="3"><center>Operaciones</center></td>
                </tr>
            <?php
                include("conexion.php");
                $query="SELECT * FROM reporteestado";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
              ?>
                <tr>
				  <td><?php echo $row['IDRE']; ?></td>				  
                  <td><?php echo $row['AñoReporte']; ?></td>
                  <td><?php echo $row['IDEquipo']; ?></td>
                  <td><?php echo $row['NumeroSerie']; ?></td>
                  <td><?php echo $row['Laboratorio']; ?></td>
                  <td><?php echo $row['NombreResponsable']; ?></td>
				  <td><?php echo $row['MatriculaAdm']; ?></td>
				  <td> <a href="#VentanaEm?IDRE=<?php echo $row['IDRE']; ?>"> <img src="ConsultarIMG.png" height="10px" width="10px" alt="Consultar" id="Consulta"> </a> </td>
				  <td> <a href="ModificarReporte.php?IDRE=<?php echo $row['IDRE']; ?>"> <img src="EditarIMG.png" height="10px" width="10px" alt="Editar" id="Edicion"> </a> </td>
				  <td> <a href="#VentanaEm2?IDRE=<?php echo $row['IDRE']; ?>"> <img src="BorrarIMG.png" height="10px" width="10px" alt="Borrar" id="Borrado"> </a> </td>
                  
				  <div id="VentanaEm?IDRE=<?php echo $row['IDRE']; ?>" class="modalDialog">
				    <div>
				  	  	<a href="#close" title="Close" class="close">X</a>
						<?php 
				     		//Obtener el idreporte del primer query para crearlo variable y utilizarlo aqui
					 		$idrep=$row['IDRE']; 
					 		$query_intermedio="SELECT * FROM reporteestado INNER JOIN actividad ON IDRE='$idrep' AND IDReporte='$idrep'";
                     		$resultado2= $conexion->query($query_intermedio);
					 		$row2 = mysqli_fetch_row($resultado2);
				        ?>
				  	  	<h2>Consulta detallada</h2>
				  	  	<p>ID del reporte: <?php echo $row2[0]?></p>
				  	  	<p>Año de creacion: <?php echo $row2[1]?></p>
				  	  	<p>Equipo: <?php echo $row2[2]?></p>
				  	  	<p>Numero de serie: <?php echo $row2[3]?></p>
				  	  	<p>Laboratorio: <?php echo $row2[4]?></p>
				  	  	<p>Nombre del responsable: <?php echo $row2[5]?></p>
				  	  	<p>Matricula del responsable: <?php echo $row2[6]?></p>
				  	  	<p>ID de la actividad: <?php echo $row2[7]?></p>
				  	  	<p>Fecha de comienzo: <?php echo $row2[8]?></p>
				  	  	<p>Actividad: <?php echo $row2[9]?></p>
				  	  	<p>Observaciones: <?php echo $row2[10]?></p>
				  	  	<p>ID ligado a la actividad: <?php echo $row2[11]?></p>
				    </div>
                  </div>
				  
				  <div id="VentanaEm2?IDRE=<?php echo $row['IDRE']; ?>" class="modalDialog">
				    <div>
				  	  	<h2>Confirmar accion</h2>
				  	  	<p>Estas seguro que deseas borrar el reporte: #<?php echo $row['IDRE']?></p>
						<p>Esto tambien eliminara las actividades ligadas al reporte</p>
						<a href="EliminarReporte.php?IDRE=<?php echo $row['IDRE']; ?>" style="background-color: #3B7436; color: #FFFFFF; border-radius: 15px; width: 100px; height: 50px; font-size: 25px; font-family: Sans-Serif; font-weight: bold; text-decoration: none;">&nbsp; Si &nbsp;</a>
						<a href="#close" style="background-color: #3B7436; color: #FFFFFF; border-radius: 15px; width: 250%; height: 50px; font-size: 25px; font-family: Sans-Serif; font-weight: bold; text-decoration: none;">&nbsp; No &nbsp;</a>
				    </div>
                  </div> 
				  
				</tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </center>
</body>
</html>