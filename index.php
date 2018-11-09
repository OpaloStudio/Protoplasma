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
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="vistas/css/app.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="vistas/js/plugins/mtr-datepicker.min.css">
	<link rel="stylesheet" href="vistas/js/plugins/mtr-datepicker.default-theme.min.css">
	<link rel="stylesheet" href="vistas/js/plugins/jqueryui/jquery-ui.css">
	<link rel="stylesheet" href="vistas/js/plugins/dropzone/dropzone.css">
	<link href="vistas/js/plugins/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
	<link href="vistas/js/plugins/fileinput/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
	

	
    <script src="vistas/js/plugins/jquery-3.3.1.min.js"></script>
	<script src="vistas/js/plugins/fileinput/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="vistas/js/plugins/fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="vistas/js/plugins/fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>
	

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<!--<script src="vistas/js/plugins/bootstrap-slider.min.js"></script>-->
	<script src="vistas/js/plugins/jquery.nicescroll.min.js"></script>
	<script src="vistas/js/plugins/pinterestgrid.js"></script>
	<script src="vistas/js/plugins/jssor.slider.min.js"></script>
	<script src="vistas/js/plugins/mtr-datepicker.min.js"></script>
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAr9oMOuhvH1-2OTIB3tFzOLCW_cyZVgsY&libraries=places" type="text/javascript"></script>-->
	<script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
	<script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script> 
	<script src="vistas/js/plugins/jqueryui/jquery-ui.js"></script>
	<script src="vistas/js/plugins/dropzone/dropzone.js"></script>
	<script src="vistas/js/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>



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