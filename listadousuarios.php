<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link rel="stylesheet" href="css.css">
    <a href="insertarusuario.php"><h3>INSERTAR USUARIO</h3></a>
    <br>
    <?php
    require_once 'Consultar.php';
    if (isset($_POST['insertar'])) {
      $insertarpost=$_POST['insertar'];
    } elseif (isset($_POST['actualizar'])) {
      $actualizarpost=$_POST['actualizar'];
      $insertarpost="";
    }else {
      $insertarpost="";
      $actualizarpost="";
    }
    $consultar = new Consultar();
    if ($insertarpost == "insertar") {
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $puntuacion=$_POST['puntuacion'];
      $consultar->insertarusuario($nombre, $apellidos, $edad, $curso, $curso, $puntuacion);
  } elseif ($actualizarpost == "actualizar") {
      $id=$_POST["id"];
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $puntuacion=$_POST['puntuacion'];
      $consultar->actualizarusuario( $id, $nombre, $apellidos, $edad, $curso, $curso, $puntuacion);
  } else {
      $id=$_POST["id"];
      $consultar->borrarusuario($id);
  }
  $consultar->listarusuario();
     ?>
  </body>
</html>
