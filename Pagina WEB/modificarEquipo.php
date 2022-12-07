<!DOCTYPE html>
<html>
<head>
    <title>Modificar reporte</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--CSS-->
	<!--<link rel="StyleSheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="StyleSheet" href="css/Cajas.css" type="text/css">
    <link rel="stylesheet" href="css/Contenido.css" type="text/css">
	<!---->
</head>
<body>

<!--Cabezera-->
    <header id="Cabeza">
        <div id="DescripcionPagina"> 
		    <img src="images/LogoIMG.png" alt="LOGO" id="DescripcionLogo"> <!--Logo de la pagina-->
			<div id="DescripcionTitulo">Modificacion de reporte </div> <!--Titulo de la pagina-->
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
	
<!--Contenido central-->
  <center>
      <?php
        $ide=$_REQUEST['IDEquipo']; 
		//Hace conexión con la base de datos
        include("conexion.php");
        $query="SELECT * FROM equipo WHERE IDEquipo='$ide'";
        $resultado= $conexion->query($query);
        $row=$resultado->fetch_assoc();
      ?>
      <!--Form que se comunica con el query de modificado-->
	    <form action="modificar_procesoEquipo.php?IDEquipo=<?php echo $row['IDEquipo']; ?>" method="POST">
            <div id="Contenedor">
			    <div id="Caja_Arriba">
					<div id="PuntoIzq"> </div>
                    <div id="PuntoCen"> Modificar informacion del equipo #<?php echo $_GET['IDEquipo'];?> </div>
					<div id="PuntoDer"> </div>
	            </div>
                <div id="Caja_Abajo">
                    <div id="Lado_izquierdo">
						<label for="Laboratorio"> Laboratorio: </label>
						<select name="Laboratorio" id="Laboratorio" value="<?php echo $row['Laboratorio']; ?>" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;" required>
						    <option value="A"> Laboratorio A </option>
							<option value="B"> Laboratorio B </option>
							<option value="C"> Laboratorio C </option>
							<option value="D"> Laboratorio D </option>
							<option value="E"> Laboratorio E </option>
							<option value="Almacen"> Almacen </option>
						</select> <br> <br>
						
                        <label for="SistemaOperativo "> Sistema Operativo: </label>
						<select name="SistemaOperativo" id="SistemaOperativo" value="<?php echo $row['SistemaOperativo']; ?>" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;" required>
						    <option value="Windows"> Windows </option>
							<option value="Linux"> Linux </option>
							<option value="MacOS"> MacOS </option>
						</select> <br> <br>

                        <label for="Procesador">Procesador</label>
                        <input type="text" name="Procesador" value="<?php echo $row['Procesador']; ?>" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;"> <br> <br>
						
                        <label for="TipoSistema"> Tipo de sistema :</label>
						<select name="TipoSistema" id="TipoSistema" value="<?php echo $row['TipoSistema']; ?>" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;">
						    <option value="X32"> X32 </option>
							<option value="X64"> X64 </option>
						</select> <br> <br>

						<label for="MemoriaRAM"> Memoria RAM: </label>
                        <input type="text" name="MemoriaRAM" value="<?php echo $row['MemoriaRAM']; ?>" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;"> <br> <br>
						
                        <label for="TipoEquipo"> Tipo de equipo: </label>
                        <select name="TipoEquipo" id="TipoEquipo" value="<?php echo $row['TipoEquipo']; ?>" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;" required>
						    <option value="Computadora"> Computadora </option>
							<option value="Laptop"> Laptop </option>
						</select> <br> <br>
                        <input type="submit" value="Modificar" style="background-color: #3B7436; color: #FFFFFF; border-radius: 15px; width: 100px; height: 50px; font-size: 20px; font-family: Sans-Serif; font-weight: bold; ">
	                </div>
	            </div>
            </div>
        </form>
  </center>
</body>
</html>