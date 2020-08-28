<?php ob_start();
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    try {
        ob_start();
      $base= new PDO("mysql:host=10.0.11.24:3306; dbname=mdpupigg_SUBTE","mdpupigg_root","Masque10()");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="SELECT * FROM USUARIOS WHERE USUARIO= :login AND PASSWORD= :password";
      $resultado=$base->prepare($sql);
      $login=htmlentities(addslashes($_POST['login']));
      $password=htmlentities(addslashes($_POST['password']));
      $resultado->bindValue(":login", $login);
      $resultado->bindValue(":password", $password);
      $resultado->execute();
      $numero_registro=$resultado->rowCount();
      if($numero_registro!=0){
        session_start();
          $_SESSION["usuario"]=$_POST["login"];
          if ($_SESSION["usuario"]=="admin") {
            header("Location:homeAdmin.php");
          }
          elseif ($_SESSION["usuario"]){
            header("location:home.php");
          }

      }else {
        header("Location:index.php"); ///si no esta en la base
        ob_end_fluch();
      }
    } catch (\Exception $e) {
    die("Error: " . $e->getMessage());
    }
        ?>

  </body>
</html>
