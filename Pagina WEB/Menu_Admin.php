<!DOCTYPE html>
<html lang="en">
<head>
<title>Administrador</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--CSS-->
	<!--<link rel="StyleSheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="StyleSheet" href="css/Cajas.css" type="text/css">
    <link rel="stylesheet" href="css/Contenido.css" type="text/css">
    <link rel="stylesheet" href="css/ContenidoAdmin.css" type="text/css">
	<!---->
</head>
<body>
<header id="Cabeza">
        <div id="DescripcionPagina"> 
		    <img src="images/LogoIMG.png" alt="LOGO" id="DescripcionLogo"> <!--Logo de la pagina-->
			<div id="DescripcionTitulo">Administrador </div> <!--Titulo de la pagina-->
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

        <section id = "contenidoCajas">
        <div id= "cajaMantenimiento">
            <nav><a href="Consulta_Solicitudes_Mantenimiento.php"><img id = "mantenimiento" src="images/Mantenimiento.png" alt=""></a></nav>
            <h1 id = "titulo">Mantenimiento</h1>
        </div>
        
        <div id= "cajaMantenimiento">
        <nav><a href="Submenu_Equipo.php"><img id = "mantenimiento" src="images/Equipo.png" alt=""></a></nav> 
        <h1 id = "titulo">Equipo</h1>
        </div>
        
        <div id= "cajaMantenimiento">
        <nav><a href="Submenu_reportes.php"><img id = "mantenimiento" src="images/Reportes.png" alt=""></a></nav>
        <h1 id = "titulo">Reporte</h1> 
    </div>
        </section>
</body>
</html>