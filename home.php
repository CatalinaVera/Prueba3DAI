<?php

include_once('Modelo/sitioModelo.php');
include_once('Modelo/reserva_sitioModelo.php');

include_once('Modelo/sitio.php');
include_once('Modelo/reserva_sitio.php');

$modeloSitio = new sitioModelo();
$modeloRsit = new reserva_sitioModelo();



if (isset($_POST['listar']))
{
	$resultadoSitio = $modeloSitio->ListarSitio();
	$resultadoResit = $modeloRsit->ListarResit();
	$resultado = array();

    
	foreach($resultadoSitio as $a)
	{
		    
			
	}
}

?>