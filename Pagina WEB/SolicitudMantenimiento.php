<!DOCTYPE html>
<html>
<head>
  <title>Solicitud de Mantenimiento</title>
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
			<div id="DescripcionTitulo">Solicitud de mantenimiento </div> <!--Titulo de la pagina-->
		</div>
        <nav id="CabezaBotonesCaja1">

        </nav>
		<nav id="CabezaBotonesCaja2">
		    <a href="" id="CabezaBoton2"> <img src="images/UsuarioIMG.png" alt="Usuario" width="40px"> </a>
		    <a href="" id="CabezaBoton2"> <img src="images/MenuIMG.png" alt="Menu" width="40px"> </a>
        </nav>
    </header>
	
<!--Contenido central-->
    <center>
        <form action="operacion_guardarSolicitud.php" method="POST">
            <div id="Contenedor">
			    <div id="Caja_Arriba">
					<div id="PuntoIzq"> </div>
                    <div id="PuntoCen"> Registrar Solicitud de mantenimiento</div>
					<div id="PuntoDer"> </div>
	            </div>
                <div id="Caja_Abajo">
                    <div id="Lado_izquierdo">
                        <label>Ubicacion:</label>
                        <select required name="Laboratorio" placeholder="ubicacion" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;">
                            <option value="A">Laboratorio A</option>
                            <option value="B">Laboratorio B</option>
                            <option value="C">Laboratorio C</option>
                            <option value="D">Laboratorio D</option>
                            <option value="E">Laboratorio E</option>
                            <option value="Almacen">Almacen</option>
                        </select> <br> <br>
                        <label>Tipo De Equipo:</label>
                        <select required name="TipoEquipo" placeholder="Tipo Equipo" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;">
                            <option value="Computadora">Computadora</option>
                            <option value="Laptop">Laptop</option>
                        </select> <br> <br>
                        <label>Equipo:</label>
                        <input type="text" required name="IDEquipo" placeholder="equipo" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;"/> <br> <br>
                        <label>Tipo De Error:</label>
                        <select required name="TipoError" placeholder="Tipo de Error" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;"> <br> <br>
                            <option value="Software">Software</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Antigüedad">Antigüedad</option>
                            <option value="Daño Fisico">Daño Fisico</option>
                        </select> <br> <br>
                        <label>Fecha:</label>
                        <input type="date" required name="Fecha" placeholder="fecha" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;"/> <br> <br>
						<label>Hora:</label>
                        <input type="text" required name="Hora" placeholder="hora" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px;"/> <br> <br>
                        <label>Descripcion del fallo:<br></label>
                        <textarea cols="20" rows="8" type="textArea" required name="DescripcionFallo" placeholder="Breve descricion del problema" value="" style="background-color: #E3E3E3; border-style: solid; border-width: 5px; border-color: #D2D2D2; border-radius: 8px; max-height: 205px; min-height: 100px; max-width: 450px; min-width: 100px;"></textarea> <br> <br>
                        <input type="submit" value="Enviar" style="background-color: #3B7436; color: #FFFFFF; border-radius: 15px; width: 100px; height: 50px; font-size: 20px; font-family: Sans-Serif; font-weight: bold;"/>
	                </div>
	            </div>
            </div>
        </form>
	</center>
</body>
</html>