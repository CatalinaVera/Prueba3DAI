<?php

if (isset($_POST['Sitio1']))
{
	echo '  <!DOCTYPE html>
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

			<!-- Navigation Bar -->
			<div class="w3-bar w3-white w3-large">
			  <a href="#" class="w3-bar-item w3-button w3-green w3-mobile"><i class="fa fa-tree w3-margin-right"></i>Camping Rio Maule</a>
			</div>
			<!-- Header -->
			<header class="w3-display-container w3-content" style="max-width:1500px;">
			  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
			  <div class="w3-display-left w3-padding w3-col l7 m8">
			    <div class="w3-container w3-green">
			      <h2><i class="fa fa-tree w3-margin-right"></i>Reserva Sitio 1</h2>
			    </div>
			    <div class="w3-container w3-white w3-padding-16">
			      <form action="resitHome.php" method="post">
			        <div class="w3-row-padding" style="margin:0 -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-calendar-o"></i> Llegada</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtLlegada" required>
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-calendar-o"></i> Salida</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtSalida" required>
			          </div>
			        </div>
			        <div class="w3-row-padding" style="margin:8px -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-address-card-o"></i> Run </label>
			            <input class="w3-input w3-border"  name="txtRun" min="1">
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-address-card-o"></i> DV</label>
			          <input class="w3-input w3-border" name="Kids" >
			          </div>
			        </div>
			         <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" name="ReservaSitio1" value="Reservar">
			      </form>
			    </div>
			  </div>
			</header>
			<div style="text-align: right">
			<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
			</div>
			</html>';
}
if (isset($_POST['Sitio2']))
{
	echo '  <!DOCTYPE html>
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

			<!-- Navigation Bar -->
			<div class="w3-bar w3-white w3-large">
			  <a href="#" class="w3-bar-item w3-button w3-green w3-mobile"><i class="fa fa-tree w3-margin-right"></i>Camping Rio Maule</a>
			</div>
			<!-- Header -->
			<header class="w3-display-container w3-content" style="max-width:1500px;">
			  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
			  <div class="w3-display-left w3-padding w3-col l7 m8">
			    <div class="w3-container w3-green">
			      <h2><i class="fa fa-tree w3-margin-right"></i>Reserva Sitio 2</h2>
			    </div>
			    <div class="w3-container w3-white w3-padding-16">
			      <form action="resitHome.php" method="post">
			        <div class="w3-row-padding" style="margin:0 -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-calendar-o"></i> Llegada</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtLlegada" required>
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-calendar-o"></i> Salida</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtSalida" required>
			          </div>
			        </div>
			        <div class="w3-row-padding" style="margin:8px -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-address-card-o"></i> Run </label>
			            <input class="w3-input w3-border"  name="txtRun" min="1">
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-address-card-o"></i> DV</label>
			          <input class="w3-input w3-border" name="Kids" >
			          </div>
			        </div>
			        <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" name="ReservaSitio2" value="Reservar">
			      </form>
			    </div>
			  </div>
			</header>
			<div style="text-align: right">
			<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
			</div>
			</html>';
}
if (isset($_POST['Sitio3']))
{
	echo '  <!DOCTYPE html>
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

			<!-- Navigation Bar -->
			<div class="w3-bar w3-white w3-large">
			  <a href="#" class="w3-bar-item w3-button w3-green w3-mobile"><i class="fa fa-tree w3-margin-right"></i>Camping Rio Maule</a>
			</div>
			<!-- Header -->
			<header class="w3-display-container w3-content" style="max-width:1500px;">
			  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
			  <div class="w3-display-left w3-padding w3-col l7 m8">
			    <div class="w3-container w3-green">
			      <h2><i class="fa fa-tree w3-margin-right"></i>Reserva Sitio 3</h2>
			    </div>
			    <div class="w3-container w3-white w3-padding-16">
			      <form action="resitHome.php" method="post">
			        <div class="w3-row-padding" style="margin:0 -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-calendar-o"></i> Llegada</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtLlegada" required>
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-calendar-o"></i> Salida</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtSalida" required>
			          </div>
			        </div>
			        <div class="w3-row-padding" style="margin:8px -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-address-card-o"></i> Run </label>
			            <input class="w3-input w3-border"  name="txtRun" min="1">
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-address-card-o"></i> DV</label>
			          <input class="w3-input w3-border" name="Kids" >
			          </div>
			        </div>
			        <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" name="ReservaSitio3" value="Reservar">
			      </form>
			    </div>
			  </div>
			</header>
			<div style="text-align: right">
			<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
			</div>
			</html>';
}
if (isset($_POST['Sitio4']))
{
	echo '  <!DOCTYPE html>
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

			<!-- Navigation Bar -->
			<div class="w3-bar w3-white w3-large">
			  <a href="#" class="w3-bar-item w3-button w3-green w3-mobile"><i class="fa fa-tree w3-margin-right"></i>Camping Rio Maule</a>
			</div>
			<!-- Header -->
			<header class="w3-display-container w3-content" style="max-width:1500px;">
			  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
			  <div class="w3-display-left w3-padding w3-col l7 m8">
			    <div class="w3-container w3-green">
			      <h2><i class="fa fa-tree w3-margin-right"></i>Reserva Sitio 4</h2>
			    </div>
			    <div class="w3-container w3-white w3-padding-16">
			      <form action="resitHome.php" method="post">
			        <div class="w3-row-padding" style="margin:0 -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-calendar-o"></i> Llegada</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtLlegada" required>
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-calendar-o"></i> Salida</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtSalida" required>
			          </div>
			        </div>
			        <div class="w3-row-padding" style="margin:8px -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-address-card-o"></i> Run </label>
			            <input class="w3-input w3-border"  name="txtRun" min="1">
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-address-card-o"></i> DV</label>
			          <input class="w3-input w3-border" name="Kids" >
			          </div>
			        </div>
			        <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" name="ReservaSitio4" value="Reservar">
			      </form>
			    </div>
			  </div>
			</header>
			<div style="text-align: right">
			<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
			</div>
			</html>';
}
if (isset($_POST['Sitio5']))
{
	echo '  <!DOCTYPE html>
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

			<!-- Navigation Bar -->
			<div class="w3-bar w3-white w3-large">
			  <a href="#" class="w3-bar-item w3-button w3-green w3-mobile"><i class="fa fa-tree w3-margin-right"></i>Camping Rio Maule</a>
			</div>
			<!-- Header -->
			<header class="w3-display-container w3-content" style="max-width:1500px;">
			  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
			  <div class="w3-display-left w3-padding w3-col l7 m8">
			    <div class="w3-container w3-green">
			      <h2><i class="fa fa-tree w3-margin-right"></i>Reserva Sitio 5</h2>
			    </div>
			    <div class="w3-container w3-white w3-padding-16">
			      <form action="resitHome.php" method="post">
			        <div class="w3-row-padding" style="margin:0 -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-calendar-o"></i> Llegada</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtLlegada" required>
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-calendar-o"></i> Salida</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtSalida" required>
			          </div>
			        </div>
			        <div class="w3-row-padding" style="margin:8px -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-address-card-o"></i> Run </label>
			            <input class="w3-input w3-border"  name="txtRun" min="1">
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-address-card-o"></i> DV</label>
			          <input class="w3-input w3-border" name="Kids" >
			          </div>
			        </div>
			        <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" name="ReservaSitio5" value="Reservar">
			      </form>
			    </div>
			  </div>
			</header>
			<div style="text-align: right">
			<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
			</div>
			</html>';
}
if (isset($_POST['Sitio6']))
{
	echo '  <!DOCTYPE html>
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

			<!-- Navigation Bar -->
			<div class="w3-bar w3-white w3-large">
			  <a href="#" class="w3-bar-item w3-button w3-green w3-mobile"><i class="fa fa-tree w3-margin-right"></i>Camping Rio Maule</a>
			</div>
			<!-- Header -->
			<header class="w3-display-container w3-content" style="max-width:1500px;">
			  <img class="w3-image" src="http://home.bt.com/images/5-best-places-to-go-camping-in-the-uk-136425069414302601-180215150057.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="900">
			  <div class="w3-display-left w3-padding w3-col l7 m8">
			    <div class="w3-container w3-green">
			      <h2><i class="fa fa-tree w3-margin-right"></i>Reserva Sitio 6</h2>
			    </div>
			    <div class="w3-container w3-white w3-padding-16">
			      <form action="resitHome.php" method="post">
			        <div class="w3-row-padding" style="margin:0 -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-calendar-o"></i> Llegada</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtLlegada" required>
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-calendar-o"></i> Salida</label>
			            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="txtSalida" required>
			          </div>
			        </div>
			        <div class="w3-row-padding" style="margin:8px -16px;">
			          <div class="w3-half w3-margin-bottom">
			            <label><i class="fa fa-address-card-o"></i> Run </label>
			            <input class="w3-input w3-border"  name="txtRun" min="1">
			          </div>
			          <div class="w3-half">
			            <label><i class="fa fa-address-card-o"></i> DV</label>
			          <input class="w3-input w3-border" name="Kids" >
			          </div>
			        </div>
			        <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" name="ReservaSitio6" value="Reservar">
			      </form>
			    </div>
			  </div>
			</header>
			<div style="text-align: right">
			<a href="reserva.html" class="w3-bar-item w3-button w3-mobile">Volver</a>
			</div>
			</html>';
}
?>