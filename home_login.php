<?php
include_once('pasajeroModelo.php');

$pasajero = new pasajeroModelo();

if (isset($_POST['Iniciar'])) 
{
    $lista = $pasajero -> ListarPasajeros();
    foreach ($lista as $r) 
    {
        if ($r->getCorreo_pasajero==$_POST['txtEmail'] && $r->getPassword_pasajero==$_POST['txtPass']) 
        {
          echo '<html lang="ES-CL">
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <meta name="description" content="">
              <meta name="author" content="">
              <title>Camping Rio Maule</title>
          
              <!-- Bootstrap core CSS -->
              <link href="css/bootstrap.min.css" rel="stylesheet">
          
              <!-- Custom styles for this template -->
              <link href="css/floating-labels.css" rel="stylesheet">
            </head>
            <body>
              <div class="text-center mb-4">
                <label class="h3 mb-3 font-weight-normal">sesión iniciado exitosamente</label>
              </div>
            </body>
            </html>';
        }
        else
        {
            echo '<html lang="ES-CL">
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <meta name="description" content="">
              <meta name="author" content="">

              <title>Camping Rio Maule</title>
          
              <!-- Bootstrap core CSS -->
              <link href="css/bootstrap.min.css" rel="stylesheet">
          
              <!-- Custom styles for this template -->
              <link href="css/floating-labels.css" rel="stylesheet">
            </head>
          
            <body>
              <div class="text-center mb-4">
                <label class="h3 mb-3 font-weight-normal">No se pudo iniciar sesión</label>
              </div>
            </body>
          </html>';
        }
    }
}
?>