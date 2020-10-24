<?php

class Programa{
  private $idprograma;
  private $nombre;
  private $fecha_creacion;
  private $estatus;
  private $idcliente;
  private $observaciones;
  private $db;

  public function __construct(){
    $this->db = Database::connect();
  }

  public function getId(){
		return $this->idprograma;
	}

	public function setId($idprograma){
		$this->idprograma = $idprograma;
	}

  public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $this->db->real_escape_string($nombre);
	}

  public function getObservaciones(){
    return $this->observaciones;
  }

  public function setObservaciones($observaciones){
    $this->observaciones = $this->db->real_escape_string($observaciones);
  }

	public function getFechaCreacion(){
		return $this->fecha_creacion;
	}

	public function setFechaCreacion($fecha_creacion){
		$this->fecha_creacion = $fecha_creacion;
	}

	public function getEstatus(){
		return $this->estatus;
	}

	public function setEstatus($estatus){
		$this->estatus = $estatus;
	}

  public function save(){
    $sql = "INSERT INTO programas VALUES (NULL, '{$this->getNombre()}', '{$this->getFechaCreacion()}', {$this->getEstatus()}, '{$this->getObservaciones()}')";
    $save = $this->db->query($sql);
	//echo var_dump($sql);
    //die();
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function save_clientes($idcliente){
    $insert = "INSERT INTO clientes_programas VALUES (NULL, {$idcliente}, {$this->getId()} )";
    /*echo var_dump($insert);
    die();*/
    $save = $this->db->query($insert);
  }

  public function editar(){
    $sql = "UPDATE programas SET idprograma = {$this->getId()}, nombre = '{$this->getNombre()}', estatus = 1, observaciones = '{$this->getObservaciones()}' WHERE idprograma={$this->idprograma} ;";
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function getAll(){
    $programas = $this->db->query("SELECT * FROM programas ORDER BY idprograma DESC");
    return $programas;
  }

  public function getPrograma($idprograma){
    $sql = "SELECT * FROM programas WHERE idprograma= $idprograma";
    $programa = $this->db->query($sql);

    return $programa->fetch_object();
  }
  
  public function getOne(){
    $sql = "SELECT * FROM programas WHERE idprograma= {$this->idprograma}";
    $programa = $this->db->query($sql);

    return $programa->fetch_object();
  }

  public function getOneUtils($idprograma){
    $sql = "SELECT * FROM programas WHERE idprograma= {$idprograma}";
    $programa = $this->db->query($sql);
    /*echo var_dump($sql);
    die();*/
    return $programa->fetch_object();
  }

  public function getClientes($idprograma){
    $clientes = $this->db->query("SELECT c.* FROM persona c INNER JOIN clientes_programas cp ON c.idpersona = cp.idcliente AND cp.idprograma = {$idprograma}");

    return $clientes;
  }

  public function desactivar(){
  	//UPDATE `usuario` SET `estatus` = '0' WHERE `usuario`.`idusuario` = 1;
    $sql = "UPDATE programas SET estatus= '0' WHERE idprograma={$this->idprograma};";
    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function activar(){
  	//UPDATE `usuario` SET `estatus` = '0' WHERE `usuario`.`idusuario` = 1;
    $sql = "UPDATE programas SET estatus= '1' WHERE idprograma={$this->idprograma};";
    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

}
?>