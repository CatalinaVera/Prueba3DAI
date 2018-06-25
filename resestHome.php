<?php
include_once('estacionamientoModelo.php');
include_once('reserva_estacionamientoModelo.php');

include_once('estacionamiento.php');
include_once('reserva_estacionamiento.php');

$modeloEstacionamiento = new estacionamientoModelo();
$modeloRsest = new reserva_estacionamientoModelo();

if (isset($_POST['ReservarEstacionamiento']))
{
	$lista = $modeloRsest -> ListarResest();
    $estacionamiento = new Reserva_estacionamiento($_POST['txtIdEst'], $_POST['txtRun'], $_POST['txtLlegada'],$_POST['txtSalida'],1);
    $hoy = date("Y-m-d"); 

    if($hoy > $estacionamiento->getFecha_llegada_resest())
    {
    	echo '<!DOCTYPE html>
					<html>
					<title>Camping Rio Maule</title>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
					<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<style>
					body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
					</style>
					<body class="w3-light-grey">
					<!-- Header -->
					<header class="w3-display-container w3-content" style="max-width:1500px;">
					  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
					  <div class="w3-display-left w3-padding w3-col l7 m8">
					    <div class="w3-container w3-green">
					      <h2><i class="fa fa-tree w3-margin-right"></i>Ingrese una Fecha válida</h2>
					    </div>
					  </div>
					</header>
					<div style="text-align: right">
					<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
					</div>
					</html>';
    }
    else
    {
    	foreach($lista as $r)
            {
            
            	if($r->getId_estacionamiento_resest()==$estacionamiento->getId_estacionamiento_resest())
            	{
		            if($r->getFecha_salida_resest() >= $estacionamiento->getFecha_llegada_resest())
		            { 

	                    echo '<!DOCTYPE html>
					<html>
					<title>Camping Rio Maule</title>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
					<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<style>
					body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
					</style>
					<body class="w3-light-grey">
					<!-- Header -->
					<header class="w3-display-container w3-content" style="max-width:1500px;">
					  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
					  <div class="w3-display-left w3-padding w3-col l7 m8">
					    <div class="w3-container w3-green">
					      <h2><i class="fa fa-tree w3-margin-right"></i>Fecha no Disponible</h2>
					    </div>
					  </div>
					</header>
					<div style="text-align: right">
					<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
					</div>
					</html>';
					break;
	               }
	            }
	            break;
            }
    }
    
    $modeloRest -> RegistrarResest($estacionamiento);
            echo '<!DOCTYPE html>
					<html>
					<title>Camping Rio Maule</title>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
					<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					<style>
					body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
					</style>
					<body class="w3-light-grey">
					<!-- Header -->
					<header class="w3-display-container w3-content" style="max-width:1500px;">
					  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
					  <div class="w3-display-left w3-padding w3-col l7 m8">
					    <div class="w3-container w3-green">
					      <h2><i class="fa fa-tree w3-margin-right"></i>Reservado Exitosamente</h2>
					    </div>
					  </div>
					</header>
					<div style="text-align: right">
					<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
					</div>
					</html>';
	}
?>