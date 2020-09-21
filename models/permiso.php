<?php

class Permiso{
  private $idpermiso;
  private $nombre;
  private $db;

  public function __construct(){
    $this->db = Database::connect();
  }

  public function getId(){
    return $this->idpermiso;
  }

  public function setId($idpermiso){
    $this->idpermiso = $idpermiso;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($nombre){
    $this->nombre = $this->db->real_escape_string($nombre);
  }

  public function save(){
    $sql = "INSERT INTO permiso VALUES (NULL, '{$this->getNombre()}')";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function getOne(){
    $permiso = $this->db->query("SELECT * FROM permiso WHERE idpermiso= {$this->getId()}");
    return $permiso->fetch_object();
  }

  public function getAll(){
    $sql = "SELECT * FROM permiso";
    $permisos = $this->db->query($sql);

    return $permisos;
  }

  public function edit(){
    $sql = "UPDATE permiso SET idpermiso = {$this->getId()}, nombre = '{$this->getNombre()}' WHERE idpermiso={$this->idpermiso}";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function getUsers(){
    $sql = "SELECT u.nombre as nombre, u.idusuario as idusuario, up.idpermiso as idpermiso, up.idusuario_permiso as id_up FROM usuario u INNER JOIN usuario_permiso up ON u.idusuario = up.idusuario WHERE up.idpermiso = {$this->idpermiso}";
    $users = $this->db->query($sql);

    return $users;
  }

  public function delete(){
    $sql = "DELETE FROM permiso WHERE idpermiso={$this->idpermiso}";
    $delete = $this->db->query($sql);

      $result = false;
      if ($delete) {
        $result = true;
      }
      return $result;
  }

}
