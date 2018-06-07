<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script src="comprobar.js" charset="utf-8"></script>
    <form action="listadousuarios.php" method="post" onsubmit="return comprobar()">
      <input type="text" id="id" name="id">
      <input type="text" id="nombre" name="nombre">
      <input type="text" id="apellidos" name="apellidos">
      <input type="text" id="edad" name="edad">
      <input type="text" id="curso" name="curso">
      <input type="text" id="puntuacion" name="puntuacion">
      <input type="submit" name="Enviar">
      <input type="hidden" name="hiddenid" value="<?= $_GET["id"]?>">
      <input type="hidden" id="actualizar" name="actualizar" value="actualizar">
    </form>
  </body>
</html>
