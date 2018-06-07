<?php
require_once ('config.php');
/**
 *
 */
class db
{
  //Propiedades de conexion
  private $server="";
  private $user="";
  private $pass="";
  private $bd="";
  private $usuario="";
  private $nombre="";
  private $apellidos="";
  private $edad=0;
  private $curso="";
  //Propiedad conector
  private $conector;
  function __construct()
  {
    global $config;
    $this->server=$config["host"];
    $this->user=$config["user"];
    $this->pass=$config["pass"];
    $this->bd=$config["bd"];
  }
  public function conectar(){
    $conectorTmp = new mysqli ($this->server,$this->user,
                                  $this->pass,$this->bd) ;
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }
  }
    /**
     * Get the value of Server
     *
     * @return mixed
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set the value of Server
     *
     * @param mixed server
     *
     * @return self
     */
    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }
    /**
     * Get the value of User
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set the value of User
     *
     * @param mixed user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Get the value of Pass
     *
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }
    /**
     * Set the value of Pass
     *
     * @param mixed pass
     *
     * @return self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }
    /**
     * Get the value of Db
     *
     * @return mixed
     */
    public function getbd()
    {
        return $this->bd;
    }
    /**
     * Set the value of Db
     *
     * @param mixed db
     *
     * @return self
     */
    public function setDb($bd)
    {
        $this->db = $bd;
        return $this;
    }
    /**
     * Get the value of Usuario
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    /**
     * Set the value of Usuario
     *
     * @param mixed usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }
    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    /**
     * Get the value of Apellidos
     *
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }
    /**
     * Set the value of Apellidos
     *
     * @param mixed apellidos
     *
     * @return self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }
    /**
     * Get the value of Edad
     *
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }
    /**
     * Set the value of Edad
     *
     * @param mixed edad
     *
     * @return self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
        return $this;
    }
    /**
     * Get the value of Curso
     *
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }
    /**
     * Set the value of Curso
     *
     * @param mixed curso
     *
     * @return self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
        return $this;
    }
    /**
     * Get the value of Conector
     *
     * @return mixed
     */
    public function getConector()
    {
        return $this->conector;
    }
    /**
     * Set the value of Conector
     *
     * @param mixed conector
     *
     * @return self
     */
    public function setConector($conector)
    {
        $this->conector = $conector;
        return $this;
    }
}
 ?>
