<!DOCTYPE html>
<html>
<head>
    <title>Consulta Equipos</title>
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
			<div id="DescripcionTitulo">Consulta Equipos</div> <!--Titulo de la pagina-->
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
				  <td>ID del equipo</td>
                  <td>Laboratorio</td>
                  <td>Sistema operativo</td>
                  <td>Procesador</td>
                  <td>Tipo de sistema</td>
                  <td>Memoria RAM</td>
                  <td>Tipo de equipo</td>
				  <td colspan="2"><center>Operaciones</center></td>
                </tr>
            <?php
                include("conexion.php");
                $query="SELECT IDEquipo, Laboratorio, SistemaOperativo, Procesador, TipoSistema, MemoriaRAM, TipoEquipo FROM equipo";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
              ?>
                <tr>
				  <td><?php echo $row['IDEquipo']; ?></td>
                  <td><?php echo $row['Laboratorio']; ?></td>
                  <td><?php echo $row['SistemaOperativo']; ?></td>
                  <td><?php echo $row['Procesador']; ?></td>
                  <td><?php echo $row['TipoSistema']; ?></td>
                  <td><?php echo $row['MemoriaRAM']; ?></td>
                  <td><?php echo $row['TipoEquipo']; ?></td>

				  <td> <a href="ModificarEquipo.php?IDEquipo=<?php echo $row['IDEquipo']; ?>"> <img src="EditarIMG.png" height="10px" width="10px" alt="Editar" id="Edicion"> </a> </td>
				  <td> <a href="#VentanaEm2?IDEquipo=<?php echo $row['IDEquipo']; ?>"> <img src="BorrarIMG.png" height="10px" width="10px" alt="Borrar" id="Borrado"> </a> </td>
				  
				  <div id="VentanaEm2?IDEquipo=<?php echo $row['IDEquipo']; ?>" class="modalDialog">
				    <div>
				  	  	<h2>Confirmar accion</h2>
				  	  	<p>Estas seguro que deseas borrar el Equipo: #<?php echo $row['IDEquipo']?></p>
						<a href="eliminarEquipo.php?IDEquipo=<?php echo $row['IDEquipo']; ?>" style="background-color: #3B7436; color: #FFFFFF; border-radius: 15px; width: 100px; height: 50px; font-size: 25px; font-family: Sans-Serif; font-weight: bold; text-decoration: none;">&nbsp; Si &nbsp;</a>
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