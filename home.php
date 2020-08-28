<?php ob_start();
?>
<html lang="es" dir="ltr">
<head><meta charset="utf-8">
  <title>Registro</title>
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
  <?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:index.php");

    ob_end_fluch();

  }
  else{
echo '<script type="text/javascript">alert("Hola ' . $_SESSION["usuario"] . '!");</script>';
  }
  ?>
  <div>
    <table>
        <?php
            include("estaciones/estaciones.php");
        ?>
      <tbody>
        <form method="POST">
          <div><tr>
            <td>
              <img src="images/metrovias.jpg">
            </td>
          </tr>
<!--          <tr>
            <td><label for="auditor">Auditor </label></td>
            <td>
              <input type="text" name="auditor" required>
            </td>
          </tr> -->
          <tr>
            <td><label for="horadellegada">Hora de llegada a la estacion</label></td>
            <td>
              <input type="text" name="horadellegada">
            </td>
          </tr>
          <tr>
            <td>
              <label for="estaciones">Estaciones </label>
            </td>
            <br>
            <td>
        <select name="estaciones">
                //Linea A
                <optgroup label="Linea A">Linea A</optgroup>
                <?php foreach($lineaA as  $i){
                  echo "<option value='$i'>$i</option>";
                }
                ?>
                //Linea B
                <optgroup label="Linea B">Linea B</optgroup>
                <?php foreach($lineaB as  $i){
                  echo"<option value='$i'>$i</option>";
                }
                ?>

                //Linea C
                <optgroup label="Linea C">Linea C</optgroup>
                <?php foreach($lineaC as  $i){
                  echo"<option value='$i'>$i</option>";
                }
                ?>
                //Linea D
                <optgroup label="Linea D">Linea D</optgroup>
                <?php foreach($lineaD as  $i){
                  echo"<option value='$i'>$i</option>";
                }
                ?>
                //Linea E
                <optgroup label="Linea E">Linea E</optgroup>
                <?php foreach($lineaE as  $i){
                  echo"<option value='$i'>$i</option>";
                }
                ?>
                //Linea H
                <optgroup label="Linea H">Linea H</optgroup>
                <?php foreach($lineaH as  $i){
                  echo"<option value='$i'>$i</option>";
                }
                ?>
                </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="Personal GCBA">Personal del GCBA / Policia </label>
            </td>
            <td>
              <select name="PGCBA">
                <option value="Si">Si</option>
                <option value="No">No</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionesPGCBA">Observaciones - PGCBA: </label>
            </td>
            <td>
              <input type="text" name="observacionesPGCBA">
            </td>
          </tr>
          <tr>
            <td>
              <label for="Personal SIAU">Personal SIAU </label>
            </td>
            <td>
              <input type="text" name="PSIAU">
            </td>
          </tr>
          <tr>
            <td>
              <label for="Personal SBASE">Personal SBASE</label>
            </td>
            <td>
              <select name="PSBASE">
                <option value="Si">Si</option>
                <option value="No">No</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionesPSBASE">Observaciones - PSBASE: </label>
            </td>
            <td>
              <input type="text" name="observacionesPSBASE">
            </td>
          </tr>
          <tr>
            <td>
              <label for="Puertas de emergencia">Puertas de emergencia</label>
            </td>
            <td>
              <select name="PE">
                <option value="Abiertas">Abiertas</option>
                <option value="Cerradas">Cerradas</option>
                <option value="Algunas_abiertas">Algunas</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionesPE">Observaciones - Puertas de emergencia: </label>
            </td>
            <td>
              <input type="text" name="observacionesPE">
            </td>
          </tr>
          <tr>
            <td>
              <label for="audio">Audio </label>
            </td>
            <td>
              <input type="text" name="audio">
            </td>
          </tr>
          <tr>
            <td>
              <label for="estado_de_red">Estado de red: </label>
            </td>
            <td>
              <input type="text" name="estado_de_red">
            </td>
          </tr>
          <tr>
            <td>
              <label for="anden">Anden </label>
            </td>
            <td>
              <input type="text" name="anden" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="alcohol">Dispenser de alcohol en gel</label>
            </td>
            <td>
              <select name="alcohol">
                <option value="Disponible">Disponible</option>
                <option value="No disponible">No disponible</option>
                <option value="Expendedor fuera de servicio">Expendedor fuera de servicio</option>
                <option value="No aplica">No aplica</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionesalcohol">Observaciones - Dispenser de alcohol: </label>
            </td>
            <td>
              <input type="text" name="observacionesalcohol">
            </td>
          </tr>
          <tr>
            <td>
              <label for="tapabocas">Usuarios con tapabocas</label>
            </td>
            <td>
              <select name="tapabocas">
                <option value="Todos">Todos</option>
                <option value="Algunos">Algunos</option>
                <option value="Nadie">Nadie</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionestapabocas">Observaciones - Usuarios con tapabocas: </label>
            </td>
            <td>
              <input type="text" name="observacionestapabocas">
            </td>
          </tr>
          <tr>
            <td>
              <label for="TAS">TAS</label>
            </td>
            <td>
              <select name="TAS">
                <option value="Funcionan">Funcionan</option>
                <option value="No funcionan">No funcionan</option>
                <option value="Parcialmente funcionando">Parcialmente funcionando</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionesTAS">Observaciones - TAS </label>
            </td>
            <td>
              <input type="text" name="observacionesTAS">
            </td>
          </tr>
          <tr>
            <td>
              <label for="sistemadecarga">Sistema de carga</label>
            </td>
            <td>
              <select name="sistemadecarga">
                <option value="Con sistema">Sistema funcionando</option>
                <option value="Sin sistema">Sin sistema</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionessistemadecarga">Observaciones - Sistemas de carga: </label>
            </td>
            <td>
              <input type="text" name="observacionessistemadecarga">
            </td>
          </tr>
          <tr>
            <td>
              <label for="ventiladores">Ventiladores</label>
            </td>
            <td>
              <select name="ventiladores">
                <option value="Apagados">Apagados</option>
                <option value="Encendidos">Encendidos</option>
                <option value="Parcialmente funcionando">Parcialmente funcionando</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionesventiladores">Observaciones - Ventiladores: </label>
            </td>
            <td>
              <input type="text" name="observacionesventiladores">
            </td>
          </tr>
          <tr>
            <td>
              <label for="ME">Medios de elevacion</label>
            </td>
            <td>
              <select name="ME">
                <option value="Funcionan">Funcionan</option>
                <option value="No funcionan">No funcionan</option>
                <option value="Parcialmente funcionando">Parcialmente funcionando</option>
                <option value="No aplica">No aplica</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="observacionesME">Observaciones - Medios de elevacion: </label>
            </td>
            <td>
              <input type="text" name="observacionesME">
            </td>
          </tr>
          <tr>
            <td>
              <label for="evasion">Evasion </label>
            </td>
            <td>
              <input type="text" name="evasion" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="incumplimiento">Incumplimiento </label>
            </td>
            <td>
              <input type="text" name="incumplimiento">
            </td>
          </tr>
          <tr>
            <td>
              <label for="observaciones">Observaciones </label>
            </td>
            <td>
              <input type="text" name="observaciones">
            </td>
          </tr>
          <tr>
            <td>
              <label for="llamadatelefonica">Llamada telefonica o mensaje </label>
            </td>
            <td>
              <input type="text" name="llamadatelefonica">
            </td>
          </tr>
          <tr>
            <td>
              <label for="mail">Correo electronico para el envio del informe </label>
            </td>
            <td>
              <input type="text" name="mail" required>
            </td>
          </tr>
          <tr>
            <td>
              <br>
              <input type="submit" value="Enviar" name="register" class="btn btn-warning btn-lg">
            <br>
            <hr>  
            <a href="consulta.php" class="btn btn-warning">Mis auditorias</a>

            </td>
          </tr>
          <?php
          include("db/registrar.php");
          ?>
       </div> </form>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
