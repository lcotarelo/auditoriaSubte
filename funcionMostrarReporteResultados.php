  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
<?php
function mostrarReporte($usuario){
  include("db/con_db.php");
  $sql = "SELECT * FROM REPORTES WHERE AUDITOR='".$_SESSION['usuario']."' order by ID_REPORTE desc";
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
}
?>
