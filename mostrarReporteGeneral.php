<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
    <style type="text/css">
    th {
      position : sticky;
      top:0;
      background-color: white;
     }
  </style>
</head>
<body>
  <?php
  function mostrarReporteGeneral(){
    include("db/con_db.php");
    $sql = "SELECT * FROM REPORTES order by ID_REPORTE desc";
    $result=mysqli_query($conex,$sql);

    while($mostrar=mysqli_fetch_array($result)){
      $listaDB=["AUDITOR","FECHA","ESTACION","PGCBA","OBSERVACIONESPGCBA","PSIAU","PSBASE","OBSERVACIONESPSBASE","PE","OBSERVACIONESPE","AUDIO","ESTADO_DE_RED","ANDEN","DISPENSER_DE_ALCOHOL","OBSERVACIONESALCOHOL","USUARIOS_CON_TAPABOCAS","OBSERVACIONESTAPABOCAS","TAS","OBSERVACIONESTAS","SISTEMADECARGA","OBSERVACIONESSISTEMASDECARGA","VENTILADORES","OBSERVACIONESVENTILADORES","MEDIOS_DE_ELEVACION",
      "OBSERVACIONESME","EVASION","INCUMPLIMIENTOS","OBSERVACIONES","LLAMADATELEFONICA","HORA_DE_ENVIO_DE_INFORME","HORADELLEGADA"];
      ?>
      <tbody>
        <tr>
          <?php
          foreach ($listaDB as $key) {
            echo "<td>".$mostrar[$key]."</td>";
          }

          ?>
        </tr>
      </tbody>
      <?php
    }
  }?>
</body>
</html>
