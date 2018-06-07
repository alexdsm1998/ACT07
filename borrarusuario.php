<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="listausuarios.php" method="post">
      Estas seguro de que quieres borrar?: <input type="submit" name="BORRAR" value="BORRAR">
      <input type="hidden" name="id" value="<?= $_GET["id"]?>">
      <input type="hidden" id="borrar" name="borrar" value="borrar">
    </form>
  </body>
</html>
