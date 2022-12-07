<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesion</title>
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
    <header id="CabezaInicio">
	    <center>
        <div id="DescripcionInicio"> 
		    <img src="images/LogoIMG.png" alt="LOGO" id="DescripcionLogoInicio"> <!--Logo de la pagina-->
			<div id="DescripcionTituloInicio">SISTEMA DE REPORTES Y MANTENIMIENTO DEL LABORATORIO </div> <!--Titulo de la pagina-->
		</div>
		</center>
    </header>
	
<!--Contenido central-->
    <center> <br> <br>
	    <form action="comprobar_usuario.php" method="POST">
            <div id="ContenedorInicio">
			    <div id="CajaImagenInicio">
				    <img src="images/ImagenInicioIMG.jpg" alt="Imagen de inicio" width="100%" height="100%" style="border-radius: 20px">
	            </div>
                <div id="CajaFormInicio">
                    <div id="ContenidoFormInicio">
					    <h1 id="TextoTitulo"> Bienvenido</h1>
                        <label> <h2 id="TextoChico"> Correo </h2> </label>
                        <input type="text" required name="Correo" placeholder="TuCorreo@uabc.edu.mx" value="" style="height:30px; width:90%; background-color: #FFFFFF; border-style: solid; border-bottom-width: 10px; border-color: #FFFFFF; border-bottom-color: #E3E3E3; border-radius: 8px;"/><br/><br/>
                        <label> <h2 id="TextoChico"> Contraseña </h2> </label>
                        <input type="password" required name="Contraseña" placeholder="Contraseña" value="" style="height:30px; width:90%; background-color: #FFFFFF; border-style: solid; border-bottom-width: 10px; border-color: #FFFFFF; border-bottom-color: #E3E3E3; border-radius: 8px;"/> <br>
                        <h3> ¿Has olvidado tu contraseña? <h3> <br> 
						<input type="submit" value="Acceder" style="background: linear-gradient(180deg, #DCA24A 0%, #4A2E03 100%); color: #FFFFFF; border-radius: 15px; width: 300px; height: 50px; font-size: 20px; font-family: Sans-Serif; font-weight: bold; "/>
	                </div>
	            </div>
            </div>
        </form>
    </center>
</body>
</html>