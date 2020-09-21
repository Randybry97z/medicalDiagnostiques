<?php

class Usuario{
  private $idusuario;
  private $nombre;
  private $correo;
  private $telefono;
  private $username;
  private $contrasena;
  private $estatus;
  private $tipo;
  private $cumple;
  private $id_permiso;
  private $db;

  public function __construct(){
    $this->db = Database::connect();
  }

  public function getId(){
		return $this->idusuario;
	}

	public function setId($idusuario){
		$this->idusuario = $idusuario;
	}

    public function getIdPermiso(){
    return $this->id_permiso;
  }

  public function setIdPermiso($id_permiso){
    $this->id_permiso = $id_permiso;
  }


  public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	public function getEmail(){
		return $this->correo;
	}

	public function setEmail($correo){
		$this->correo = $this->db->real_escape_string($correo);
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $this->db->real_escape_string($telefono);
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $this->db->real_escape_string($username);
	}

	public function getPassword(){
		return password_hash($this->db->real_escape_string($this->contrasena), PASSWORD_BCRYPT, ['cost' => 4]);
	}

	public function setPassword($contrasena){
		$this->contrasena = $contrasena;
	}

	public function getEstatus(){
		return $this->estatus;
	}

	public function setEstatus($estatus){
		$this->estatus = $estatus;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setTipo($tipo){
		$this->tipo = $this->db->real_escape_string($tipo);
	}

	public function getCumple(){
		return $this->cumple;
	}

	public function setCumple($cumple){
		$this->cumple = $cumple;
	}

  public function save(){
    $sql = "INSERT INTO usuario VALUES (NULL, '{$this->getNombre()}', '{$this->getEmail()}', '{$this->getTelefono()}', '{$this->getUsername()}', '{$this->getPassword()}', 1, '{$this->getTipo()}', '{$this->getCumple()}', CURDATE())";
    /*echo var_dump($sql);
    die();*/
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function save_permisos($id_permiso){
    $insert = "INSERT INTO usuario_permiso VALUES (NULL, {$this->getId()}, {$id_permiso})";
    $save = $this->db->query($insert);
  }

  public function editPassword(){
    $sql = "UPDATE usuario SET idusuario = {$this->getId()}, contrasena = '{$this->getPassword()}' WHERE idusuario={$this->idusuario} ;";
    /*echo var_dump($sql);
    die();*/
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function editar(){
    $sql = "UPDATE usuario SET idusuario = {$this->getId()}, nombre = '{$this->getNombre()}', correo = '{$this->getEmail()}', telefono = {$this->getTelefono()}, username='{$this->getUsername()}', estatus = {$this->getEstatus()}, tipo = '{$this->getTipo()}', cumple = '{$this->getCumple()}' WHERE idusuario={$this->idusuario} ;";

    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function login(){
    $result = false;
    $username = $this->username;
    $password = $this->contrasena;
    //Comprobar si existe el usuario
    $sql = "SELECT * FROM usuario WHERE username = '$username' AND estatus = 1";
    $login = $this->db->query($sql);

    if ($login && $login->num_rows == 1) {
      $usuario = $login->fetch_object();

      //Verificar contraseña
      $verify = password_verify($password, $usuario->contrasena);


      if ($verify) {
        $result = $usuario;
      }
    }
    return $result;
  }

  public function getAll(){
    $usuarios = $this->db->query("SELECT * FROM usuario ORDER BY idusuario DESC");
		return $usuarios;
  }

  public function getOne(){
    $usuario = $this->db->query("SELECT * FROM usuario WHERE idusuario= {$this->getId()}");
    return $usuario->fetch_object();
  }

  public function getMedicos(){
    $medicos = $this->db->query("SELECT * FROM usuario WHERE tipo LIKE '%medico%'");
    return $medicos;
  }

  public function getCorreo($idusuario){
    $medicos = $this->db->query("SELECT correo FROM usuario WHERE idusuario = {$idusuario}");
    return $medicos;
  }

  public function getPermisos($idusuario){
    $permisos = $this->db->query("SELECT pm.idpermiso as idpermiso, pm.nombre as nombre, up.idusuario_permiso as idup FROM permiso pm INNER JOIN usuario_permiso up ON pm.idpermiso = up.idpermiso AND up.idusuario = {$idusuario}");
    return $permisos;
  }

  public function deletePermiso($id_permiso){
    $permiso = $this->db->query("DELETE FROM usuario_permiso WHERE usuario_permiso.idusuario_permiso = {$id_permiso}");

    return $permiso;
  }

  public function desactivar(){
  	//UPDATE `usuario` SET `estatus` = '0' WHERE `usuario`.`idusuario` = 1;
    $sql = "UPDATE usuario SET estatus= '0' WHERE idusuario={$this->idusuario};";
    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

    public function activar(){
  	//UPDATE `usuario` SET `estatus` = '0' WHERE `usuario`.`idusuario` = 1;
    $sql = "UPDATE usuario SET estatus= '1' WHERE idusuario={$this->idusuario};";
    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function admin($idusuario){
    //SELECT u.* FROM usuario u INNER JOIN usuario_permiso up ON up.idusuario = u.idusuario AND u.idusuario = 56 AND up.idpermiso = 4
    $sql = "SELECT u.*, up.idpermiso as idpermiso FROM usuario u INNER JOIN usuario_permiso up ON up.idusuario = u.idusuario AND up.idpermiso = 4 AND u.idusuario = {$idusuario}";
    $admin = $this->db->query($sql);

    return $admin;
  }

}

?>
