<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script src="comprobar.js" charset="utf-8"></script>
    <form action="listadousuarios.php" method="post" onsubmit="return comprobar()">
      <input type="text" id="nombre" name="nombre" value="nombre">
      <input type="text" id="apellidos" name="apellidos" value="apellidos">
      <input type="text" id="edad" name="edad" value="edad">
      <input type="text" id="curso" name="curso" value="curso">
      <input type="text" id="puntuacion" name="puntuacion" value="puntuacion">
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" id="insertar" name="insertar" value="insertar">
    </form>
  </body>
</html>
