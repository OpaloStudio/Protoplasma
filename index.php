<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="title" content="">

    <meta name="description" content="">

    <meta name="keyword" content="">

    <title>Proto-plasma</title>
    <link rel="icon" type="image/png" id="dinamico" href="vistas/img/elfavicon/favnar.png" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="vistas/css/app.css" media="all" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs@1.3.4/dist/interact.min.js"></script>
    <script src="vistas/js/jquery.nicescroll.min.js"></script>



    <?php
	include('controladores/controlador.navbar.php');
	include('controladores/controlador.favoritos.php');
	include('modelos/modelo.conexion.php');
	//Los controladores que se utilizan en todas las páginas, se incluyen fuera del if de abajo.
	
	if(isset($_GET['id'])){
		include('controladores/controlador.finalizacionPago.php');
	}
	elseif(isset($_GET['page'])){//Esta variable verifica que exista un id para la página visitada,
						   //si no existe, es porque está en el index, entonces lo del index se incluye
						   //en el else en el orden que deben aparecer las closas

		switch($_GET['page']){

			case '1':
			//Registro
			include('controladores/controlador.registro.php');
			break;

			case '2':
			//Perfil
			include('controladores/controlador.perfil.php');
			break;

			case '3':
			//Nueva publicación
			include('controladores/controlador.nueva.php');
			break;

			case '4':
			//Publicación
			include('controladores/controlador.publicacion.php');
			include('controladores/controlador.modalContacta.php');
			include('controladores/controlador.modalAgenda.php');
			break;

			case '5':
			//Buscador
			include('controladores/controlador.buscador.php');
			break;

			case '6':
			//Panel de publicaciones
			include('controladores/controlador.panelPublicaciones.php');
			include('controladores/controlador.modalElimina.php');
			break;

			case '7':
			//Configuración de cuenta
			include('controladores/controlador.configuracionCuenta.php');
			break;

			case '8':
			//Cambio de contraseña dentro del perfil
			include('controladores/controlador.contraseniaNueva.php');
			break;

			case '9':
			//Recuperación de contraseña
			include('controladores/controlador.recuperarContrasena.php');
			break;

			case '10':
			//Recuperación de contraseña
			include('controladores/controlador.cambiarContrasena.php');
			break;

			case '11':
			//Planes inmobiliarios
			include('controladores/controlador.planes.php');
			break;

			case '12':
			//Eliminación de cuenta
			include('controladores/controlador.eliminarCuenta.php');
			break;

			case '13':
			//Formulario de pago
			include('controladores/controlador.formularioPago.php');
			break;

			case '14':
			//Activación de cuenta
			include('controladores/controlador.activacionCuenta.php');
			break;

			case '15':
			//Activación de cuenta
			include('controladores/controlador.mensajeria.php');
			break;

			case 'default':
			
			break;

		}
	}
	else{
		//Aquí se incluyen todos los controladores del index.
		include('controladores/controlador.masonryIndex.php');
	}

	?>
</head>

<body>
    <?php
include('vistas/modulos/login.php');
include('vistas/modulos/navbar.php');

if(isset($_GET['id'])){
	include('vistas/modulos/finalizacionPago.php');
}

elseif(isset($_GET['page'])){

	switch($_GET['page']){

		case '1':
		//Registro
		include('vistas/modulos/registro.php');
		break;

		case '2':
		//Perfil
		include('vistas/modulos/perfil.php');
		break;

		case '3':
		//Nueva publicación
		include('vistas/modulos/nueva.php');
		//7plugin de subida de imagenes
		break;

		case '4':
		//Publicación
		include('vistas/modulos/publicacion.php');
		include('vistas/modulos/modalContacta.php');
		include('vistas/modulos/modalAgenda.php');
		break;

		case '5':
		//Buscador
		include('vistas/modulos/buscador.php');
		//Dentro de esta vista el panel lateral del buscador es un módulo
		//y el mapa con los resultados es otro.
		break;

		case '6':
		//Panel de publicaciones
		include('vistas/modulos/panelPublicaciones.php');
		include('vistas/modulos/modalElimina.php');
		break;

		case '7':
		//Configuración de la cuenta
		include('vistas/modulos/configuracionCuenta.php');
		break;

		case '8':
		//Cambio de contraseña dentro del perfil
		include('vistas/modulos/contraseniaNueva.php');
		break;

		case '9':
		//Recuperación de contraseña
		include('vistas/modulos/recuperarContrasena.php');
		break;

		case '10':
		//Recuperación de contraseña
		include('vistas/modulos/cambiarContrasena.php');
		break;

		case '11':
		//Planes inmobiliarios
		include('vistas/modulos/planes.php');
		break;

		case '12':
		//Eliminación de cuenta
		include('vistas/modulos/eliminarCuenta.php');
		break;

		case '13':
		//Formulario de pago
		include('vistas/modulos/formularioPago.php');
		break;

		case '14':
		//Activación de cuenta
		include('vistas/modulos/activacionCuenta.php');
		break;

		case '15':
		//Activación de cuenta
		include('vistas/modulos/mensajeria.php');
		break;

		case '16':
		//Politicas uso
		include('vistas/modulos/politicas.php');
		break;

		case '17':
		//cookies
		include('vistas/modulos/cookies.php');
		break;

		case '18':
		//Condiciones
		include('vistas/modulos/condiciones.php');
		break;

		


	}
}
else{
	include('vistas/modulos/indexCarousel.php');
	include('vistas/modulos/masonryIndex.php');//indexCarousel es el original
}

?>

</body>

</html>