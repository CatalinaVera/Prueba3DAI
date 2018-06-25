<?php
include_once('pasajeroModelo.php');
include_once('pasajero.php');

$modelo = new pasajeroModelo();

if (isset($_POST['Registrar']))
{
  $lista = $modelo -> ListarPasajeros();
  $pasajeros = new Pasajero($_POST['txtRun'], $_POST['txtDv'], $_POST['txtNombre'].$_POST['txtApellido'], $_POST['txtPass'], $_POST['txtEmail'],1);

  echo $pasajeros->getRun_pasajero();
}
?>