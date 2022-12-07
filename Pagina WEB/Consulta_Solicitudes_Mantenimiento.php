<!DOCTYPE html>
<html>
<head>
    <title>Solicitudes de mantenimiento</title>
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
			<div id="DescripcionTitulo">Solicitudes de Mantenimiento</div> <!--Titulo de la pagina-->
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
                    <th colspan="10">Equipos Registrados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
				  <td>IDSM</td>
                  <td>Laboratorio</td>
                  <td>Tipo de equipo</td>
                  <td>Equipo</td>
                  <td>Tipo de error</td>
                  <td>Fecha</td>
                  <td>Hora</td>
                  <td>Descripcion del fallo</td>
				  <td>Matricula del Usuario</td>
				  <td colspan="1"><center>Operaciones</center></td>
                </tr>
            <?php
                include("conexion.php");
                $query="SELECT * FROM solicitudmantenimiento";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
              ?>
                <tr>
				  <td><?php echo $row['IDSM']; ?></td>
                  <td><?php echo $row['Laboratorio']; ?></td>
                  <td><?php echo $row['TipoEquipo']; ?></td>
                  <td><?php echo $row['IDEquipo']; ?></td>
                  <td><?php echo $row['TipoError']; ?></td>
                  <td><?php echo $row['Fecha']; ?></td>
                  <td><?php echo $row['Hora']; ?></td>
                  <td><?php echo $row['DescripcionFallo']; ?></td>
				  <td><?php echo $row['MatriculaUsuario']; ?></td>
				  
				  <td> <a href="#VentanaEm2?IDSM=<?php echo $row['IDSM']; ?>"> <img src="BorrarIMG.png" height="10px" width="10px" alt="Descartar" id="Borrado"> </a> </td>
                
				  <div id="VentanaEm2?IDSM=<?php echo $row['IDSM']; ?>" class="modalDialog">
				    <div>
				  	  	<h2>Confirmar accion</h2>
				  	  	<p>Estas seguro que deseas descartar la solicitud: #<?php echo $row['IDSM']?></p>
						<a href="eliminarSM.php?IDSM=<?php echo $row['IDSM']; ?>" style="background-color: #3B7436; color: #FFFFFF; border-radius: 15px; width: 100px; height: 50px; font-size: 25px; font-family: Sans-Serif; font-weight: bold; text-decoration: none;">&nbsp; Si &nbsp;</a>
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