<?php

class Persona{
  private $idpersona;
  private $nombre;
  private $contacto;
  private $contacto_2;
  private $correo;
  private $telefono;
  private $estatus;
  private $tipo;
  private $idprograma;
  private $db;

  public function __construct(){
    $this->db = Database::connect();
  }

  public function getId(){
		return $this->idpersona;
	}

	public function setId($idpersona){
		$this->idpersona = $idpersona;
	}

  public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	public function getContacto(){
		return $this->contacto;
	}

	public function setContacto($contacto){
		$this->contacto = $this->db->real_escape_string($contacto);
	}

  public function getContacto2(){
    return $this->contacto_2;
  }

  public function setContacto2($contacto_2){
    $this->contacto_2 = $this->db->real_escape_string($contacto_2);
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

  public function save(){
    $sql = "INSERT INTO persona VALUES (NULL, '{$this->getNombre()}', '{$this->getContacto()}', '{$this->getEmail()}', '{$this->getTelefono()}', 1, '{$this->getTipo()}', '{$this->getContacto2()}')";
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function save_programas($idprograma){
    $insert = "INSERT INTO clientes_programas VALUES (NULL, {$this->getId()}, {$idprograma} )";
/*    echo var_dump($insert);
    die();*/
    $save = $this->db->query($insert);
  }


  public function editar(){
    $sql = "UPDATE persona SET idpersona = {$this->getId()}, nombre = '{$this->getNombre()}', contacto = '{$this->getContacto()}', correo = '{$this->getEmail()}', telefono = {$this->getTelefono()}, estatus = {$this->getEstatus()}, tipo = '{$this->getTipo()}', contacto_2 = '{$this->getContacto2()}' WHERE idpersona={$this->idpersona} ;";
    $save = $this->db->query($sql);


    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function getAll(){
    $personas = $this->db->query("SELECT * FROM persona ORDER BY idpersona DESC");
		return $personas;
  }

  public function getProgramas($idpersona){
    $programas = $this->db->query("SELECT p.* FROM programas p INNER JOIN clientes_programas cp ON p.idprograma = cp.idprograma AND cp.idcliente = {$idpersona}");
    return $programas;
  }

  public function getProveedores(){
    $proveedores = $this->db->query("SELECT * FROM persona WHERE tipo = 'proveedor' ORDER BY idpersona DESC");
    return $proveedores;
  }

  public function getClientes(){
    $clientes = $this->db->query("SELECT * FROM persona WHERE tipo = 'cliente' ORDER BY idpersona DESC");
    return $clientes;
  }

  public function getClientesHead(){
    $clientes = $this->db->query("SELECT * FROM persona WHERE tipo = 'cliente' ORDER BY idpersona DESC");
    return $clientes;
  }

  public function getOne(){
    $persona = $this->db->query("SELECT * FROM persona WHERE idpersona= {$this->getId()}");
    return $persona->fetch_object();
  }

  public function getOneId($idpersona){
    $persona = $this->db->query("SELECT * FROM persona WHERE idpersona= {$idpersona}");
    return $persona->fetch_object();
  }

  public function desactivar(){
  	//UPDATE `usuario` SET `estatus` = '0' WHERE `usuario`.`idusuario` = 1;
    $sql = "UPDATE persona SET estatus= '0' WHERE idpersona={$this->idpersona};";
    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function activar(){
  	//UPDATE `usuario` SET `estatus` = '0' WHERE `usuario`.`idusuario` = 1;
    $sql = "UPDATE persona SET estatus= '1' WHERE idpersona={$this->idpersona};";
    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

}

?>
