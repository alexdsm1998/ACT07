<?php
require_once "db.php";
/**
 *
 */
class Consultar extends db
{
    private $bd;
    private $conector;
    function __construct()
    {
      parent::__construct();
      parent::conectar();
      $this->conector=parent::getConector();
    }
  public function listarusuario()
    {
      $resultado = $this->conector->query("SELECT * FROM usuarios");
      foreach ($resultado as $fila) {
         echo "Usuario".$fila['id']."<br>"."Nombre: ".$fila['nombre']."<br>"."Apellidos: ".$fila['apellidos']."<br>"."Edad: ".$fila['edad']."<br>"."Curso: ".$fila['curso']."<br>"."Puntuacion: ".$fila['puntuacion']."<br>";
         echo "<a href='actualizarUsuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
         echo "<a href='borrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br> <br>";
       }
    }
  public function insertarusuario($nombre, $apellidos, $edad, $curso, $puntuacion)
  {
    $insertar = "INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('$nombre','$apellidos',$edad,$curso,$puntuacion)";
    $registroinsertar = $this->conector->query($insertar);
  }
  public function actualizarusuario($id, $nombre, $apellidos, $edad, $curso, $puntuacion)
  {
    $actualizar = "UPDATE usuarios set id=$id, nombre='$nombre', apellidos='$apellidos', edad=$edad, curso=$curso, puntuacion=$puntuacion where id=$id";
    $registroactualizar = $this->conector->query($actualizar);
  }
  public function borrarusuario($id)
  {
    $borrar = "DELETE from usuarios where id=$id";
    $registroborrar = $this->conector->query($borrar);
  }
}
 ?>
