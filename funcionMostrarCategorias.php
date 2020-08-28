<?php

function mostrarCategorias(){

$listaDeCategorias = ["AUDITOR","FECHA","ESTACION","PGCBA","OBSERVACIONES PGCBA","PSIAU","PSBASE","OBSERVACIONES PSBASE","PE","OBSERVACIONES PE",
"AUDIO","ESTADO DE RED","ANDEN","DISPENSER DE ALCOHOL","OBSERVACIONES ALCOHOL","USUARIOS CON TAPABOCAS","OBSERVACIONES TAPABOCAS",
"TAS","OBSERVACIONES TAS","SISTEMA DE CARGA","OBSERVACIONES SISTEMAS DE CARGA","VENTILADORES","OBSERVACIONES VENTILADORES",
"MEDIOS DE ELEVACION","OBSERVACIONES ME","EVASION","INCUMPLIMIENTOS","OBSERVACIONES","LLAMADA TELEFONICA","HORA DE ENVIO DE INFORME",
"HORA DE LLEGADA"];

    foreach ($listaDeCategorias as $key) {
        echo "<th>".$key."</th>";
    }

}
 ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
