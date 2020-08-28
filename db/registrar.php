<?php ob_start();


include("db/con_db.php");

if (isset($_POST['register'])) {
  //CREACION DE VARIABLES
  // $_SESSION["mail"]
  ////
  $auditor = $_SESSION["usuario"];
  $estaciones = trim($_POST['estaciones']);
  $PGCBA = trim($_POST['PGCBA']);
  $observacionesPGCBA = trim($_POST['observacionesPGCBA']);
  $PSIAU = trim($_POST['PSIAU']);
  $PSBASE = trim($_POST['PSBASE']);
  $observacionesPSBASE = trim($_POST['observacionesPSBASE']);
  $PE = trim($_POST['PE']);
  $observacionesPE = trim($_POST['observacionesPE']);
  $audio = trim($_POST['audio']);
  $estado_de_red = trim($_POST['estado_de_red']);
  $anden = trim($_POST['anden']);
  $alcohol = trim($_POST['alcohol']);
  $observacionesalcohol = trim($_POST['observacionesalcohol']);
  $tapabocas = trim($_POST['tapabocas']);
  $observacionestapabocas = trim($_POST['observacionestapabocas']);
  $TAS = trim($_POST['TAS']);
  $observacionesTAS = trim($_POST['observacionesTAS']);
  $sistemadecarga = trim($_POST['sistemadecarga']);
  $observacionessistemadecarga = trim($_POST['observacionessistemadecarga']);
  $ventiladores = trim($_POST['ventiladores']);
  $observacionesventiladores = trim($_POST['observacionesventiladores']);
  $ME = trim($_POST['ME']);
  $observacionesME = trim($_POST['observacionesME']);
  $evasion = trim($_POST['evasion']);
  $incumplimiento = trim($_POST['incumplimiento']);
  $observaciones = trim($_POST['observaciones']);
  $llamadatelefonica = trim($_POST['llamadatelefonica']);
  $destino1 = trim($_POST['mail']);
  $horadellegada = trim($_POST['horadellegada']);
  date_default_timezone_set("America/Argentina/Buenos_Aires");
  $fecha = date("d/m/y");
  $hora = date("h:i:sa");
  //CREACION DE CONSULTA SQL
  $consulta ="INSERT INTO `REPORTES`(`AUDITOR`, `FECHA`, `ESTACION`, `PGCBA`, `OBSERVACIONESPGCBA`, `PSIAU`, `PSBASE`, `OBSERVACIONESPSBASE`, `PE`, `OBSERVACIONESPE`, `AUDIO`, `ESTADO_DE_RED`, `ANDEN`, `DISPENSER_DE_ALCOHOL`, `OBSERVACIONESALCOHOL`, `USUARIOS_CON_TAPABOCAS`, `OBSERVACIONESTAPABOCAS`, `TAS`, `OBSERVACIONESTAS`, `SISTEMADECARGA`, `OBSERVACIONESSISTEMASDECARGA`, `VENTILADORES`, `OBSERVACIONESVENTILADORES`, `MEDIOS_DE_ELEVACION`, `OBSERVACIONESME`, `EVASION`, `INCUMPLIMIENTOS`, `OBSERVACIONES`, `LLAMADATELEFONICA`, `HORA_DE_ENVIO_DE_INFORME`, `HORADELLEGADA`) VALUES ('$auditor','$fecha','$estaciones','$PGCBA','$observacionesPGCBA','$PSIAU','$PSBASE','$observacionesPSBASE','$PE','$observacionesPE','$audio','$estado_de_red','$anden','$alcohol','$observacionesalcohol','$tapabocas','$observacionestapabocas','$TAS','$observacionesTAS','$sistemadecarga','$observacionessistemadecarga','$ventiladores','$observacionesventiladores','$ME','$observacionesME','$evasion','$incumplimiento','$observaciones','$llamadatelefonica','$hora','$horadellegada')";
  $resultado = mysqli_query($conex,$consulta);
  if ($resultado) {

  // $fecha = date("d/m/y");
  // $hora = date("h:i:sa");
  // $auditor = trim($_POST['auditor']);
  // $estaciones = trim($_POST['estaciones']);
  // $PGCBA = trim($_POST['PGCBA']);
  // $observacionesPGCBA = trim($_POST['observacionesPGCBA']);
  // $PSIAU = trim($_POST['PSIAU']);
  // $observacionesSIAU = trim($_POST['observacionesSIAU']);
  // $PE = trim($_POST['PE']);
  // $audio = trim($_POST['audio']);
  // $estado_de_red = trim($_POST['estado_de_red']);
  // $anden = trim($_POST['anden']);
  // $alcohol = trim($_POST['alcohol']);
  // $tapabocas = trim($_POST['tapabocas']);
  // $TAS = trim($_POST['TAS']);
  // $observacionesTAS = trim($_POST['observacionesTAS']);
  // $ventiladores = trim($_POST['ventiladores']);
  // $ME = trim($_POST['ME']);
  // $evasion = trim($_POST['evasion']);
  // $incumplimiento = trim($_POST['incumplimiento']);
  // $observaciones = trim($_POST['observaciones']);
  // $llamadatelefonica = trim($_POST['llamadatelefonica']);
  // $horadellegada = trim($_POST['horadellegada']);

  date_default_timezone_set("America/Argentina/Buenos_Aires");
  $destino = "maildesupervisor@algo.com";
  $contenido = $auditor . " ha realizado la siguiente auditoria: " . "\n\nHora de envio de informe: " . $hora . "\n\nHora de arribo a la estacion: " . $horadellegada . "\n\nFecha: " . $fecha . "\n\nEstacion: " . $estaciones . "\n\nPGCBA: " . $PGCBA . "\n\nObservaciones PGCBA: ". $observacionesPGCBA . "\n\nPSIAU: " . $PSIAU . "\n\nPSBASE: " . $PSBASE . "\n\nObservaciones PSBASE: ". $observacionesPSBASE . "\n\nPuertas de emergencia: " . $PE . "\n\nObservaciones Puertas de emergencia: ". $observacionesPE . "\n\nAudio: " . $audio . "\n\nEstado de red: " . $estado_de_red. "\n\nAnden: " . $anden . "\n\nAlcohol en gel: " . $alcohol. "\n\nObservaciones Dispenser de alcohol: ". $observacionesalcohol . "\n\nTapabocas: " . $tapabocas. "\n\nObservaciones de tapabocas: ". $observacionestapabocas . "\n\nTAS: " . $TAS. "\n\nObservaciones TAS: " . $observacionesTAS .  "\n\nSistema de carga: " . $sistemadecarga. "\n\nObservaciones Sistema de carga: " . $observacionessistemadecarga . "\n\nVentiladores: " . $ventiladores. "\n\nObservaciones de Ventiladores: ". $observacionesventiladores . "\n\nMedios de elevacion: " . $ME. "\n\nObservaciones Medios de elevacion: ". $observacionesME . "\n\nEvasion: " . $evasion. "\n\nIncumplimiento: " . $incumplimiento. "\n\nObservaciones: " . $observaciones . "\n\nLlamada telefonica: " . $llamadatelefonica;

  mail($destino, "Reporte de: ". $auditor . " Estacion: " . $estaciones , $contenido);
  mail($destino1, "Reporte de: ". $auditor . " Estacion: " . $estaciones , $contenido);
   
     echo '<script type="text/javascript">alert("Auditoria enviada");</script>';
   

} else {
  echo("Error description: " .$conex -> error);
}
}   else {

}
ob_end_fluch();
?>
