<?php

class Paciente{
  private $idpaciente;
  private $creado_por;
  private $idlaboratorio;
  private $nombre;
  private $clinica;
  private $sexo;
  private $edad;
  private $telefono;
  private $movil;
  private $ciudad;
  private $estado;
  private $direccion;
  private $estudio;
  private $folio;
  private $folio_id;
  private $activacion_farma;
  private $activacion_representante;
  private $fecha_captura;
  private $fecha_nacimiento;
  private $fecha_cita;
  private $estatus;
  private $motivo_cancelacion;
  private $observaciones;
  private $medico_tratante;
  private $fecha_entrega;
  private $tipo_cupon;
  private $fecha_confirmacion;
  private $factura_asociado;
  private $factura_mdt;
  private $pago_factura;
  private $idprograma;
  private $resultados;
  private $db;
  private $cupon_original;
  private $cupon_copia;
  private $consentimiento_original;
  private $consentimiento_copia;
  private $resultado_original;
  private $resultado_copia;
  private $fecha_creacion;
  private $tipo_estudio;
  private $hora_cita;
  private $fecha_resultados;

  public function __construct(){
    $this->db = Database::connect();
  }

  public function getId(){
		return $this->idpaciente;
	}

	public function setId($idpaciente){
		$this->idpaciente = $idpaciente;
	}

  public function getIdPrograma(){
    return $this->idprograma;
  }

  public function setIdPrograma($idprograma){
    $this->idprograma = $idprograma;
  }

  public function getCreadoPor(){
    return $this->creado_por;
  }

  public function setCreadoPor($creado_por){
    $this->creado_por = $creado_por;
  }

  public function getIdLaboratorio(){
    return $this->idlaboratorio;
  }

  public function setIdLaboratorio($idlaboratorio){
    $this->idlaboratorio = $idlaboratorio;
  }


  public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $this->db->real_escape_string($nombre);
	}

  public function getClinica(){
    return $this->clinica;
  }

  public function setClinica($clinica){
    $this->clinica = $this->db->real_escape_string($clinica);
  }

  public function getCiudad(){
    return $this->ciudad;
  }

  public function setCiudad($ciudad){
    $this->ciudad = $this->db->real_escape_string($ciudad);
  }

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $this->db->real_escape_string($estado);
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $this->db->real_escape_string($telefono);
	}

  public function getMovil(){
    return $this->movil;
  }

  public function setMovil($movil){
    $this->movil = $this->db->real_escape_string($movil);
  }

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $this->db->real_escape_string($direccion);
	}

	public function getEstudio(){
		return $this->estudio;
	}

	public function setEstudio($estudio){
		$this->estudio = $estudio;
	}

	public function getEstatus(){
		return $this->estatus;
	}

	public function setEstatus($estatus){
		$this->estatus = $estatus;
	}

	public function getTipoCupon(){
		return $this->tipo_cupon;
	}

	public function setTipoCupon($tipo_cupon){
		$this->tipo_cupon = $this->db->real_escape_string($tipo_cupon);
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $this->db->real_escape_string($sexo);
	}

  public function getEdad(){
    return $this->edad;
  }

  public function setEdad($edad){
    $this->edad = $edad;
  }

  public function getFolio(){
    return $this->folio;
  }

  public function setFolio($folio){
    $this->folio = $this->db->real_escape_string($folio);
  }

  public function getFolioID(){
    return $this->folio_id;
  }

  public function setFolioID($folio_id){
    $this->folio_id = $folio_id;
  }

  public function getActivacionFarma(){
    return $this->activacion_farma;
  }

  public function setActivacionFarma($activacion_farma){
    $this->activacion_farma = $activacion_farma;
  }

  public function getActivacionRepresentante(){
    return $this->activacion_representante;
  }

  public function setActivacionRepresentante($activacion_representante){
    $this->activacion_representante = $this->db->real_escape_string($activacion_representante);
  }

  public function getFechaCaptura(){
    return $this->fecha_captura;
  }

  public function setFechaCaptura($fecha_captura){
    $this->fecha_captura = $fecha_captura;
  }

  public function getFechaNacimiento(){
    return $this->fecha_nacimiento;
  }

  public function setFechaNacimiento($fecha_nacimiento){
    $this->fecha_nacimiento = $fecha_nacimiento;
  }

  public function getFechaCita(){
    return $this->fecha_cita;
  }

  public function setFechaCita($fecha_cita){
    $this->fecha_cita = $fecha_cita;
  }

  public function getFechaEntrega(){
    return $this->fecha_entrega;
  }

  public function setFechaEntrega($fecha_entrega){
    $this->fecha_entrega = $fecha_entrega;
  }

  public function getCancelacion(){
    return $this->motivo_cancelacion;
  }

  public function setCancelacion($motivo_cancelacion){
    $this->motivo_cancelacion = $this->db->real_escape_string($motivo_cancelacion);
  }

  public function getObservaciones(){
    return $this->observaciones;
  }

  public function setObservaciones($observaciones){
    $this->observaciones = $this->db->real_escape_string($observaciones);
  }

  public function getMedicoTratante(){
    return $this->medico_tratante;
  }

  public function setMedicoTratante($medico_tratante){
    $this->medico_tratante = $this->db->real_escape_string($medico_tratante);
  }

  public function getFacturaAsociado(){
    return $this->factura_asociado;
  }

  public function setFacturaAsociado($factura_asociado){
    $this->factura_asociado = $this->db->real_escape_string($factura_asociado);
  }

  public function getFacturaMDT(){
    return $this->factura_asociado;
  }

  public function setFacturaMDT($factura_mdt){
    $this->factura_mdt = $this->db->real_escape_string($factura_mdt);
  }

  public function getFechaConfirmacion(){
    return $this->fecha_confirmacion;
  }

  public function setFechaConfirmacion($fecha_confirmacion){
    $this->fecha_confirmacion = $fecha_confirmacion;
  }

  public function getPagoFactura(){
    return $this->pago_factura;
  }

  public function setPagoFactura($pago_factura){
    $this->pago_factura = $this->db->real_escape_string($pago_factura);
  }

  public function getResultados(){
    return $this->resultados;
  }

  public function setResultados($resultados){
    $this->resultados = $resultados;
  }


  public function getCuponOriginal(){
    return $this->cupon_original;
  }

  public function setCuponOriginal($cupon_original){
    $this->cupon_original = $cupon_original;
  }

  public function getCuponCopia(){
    return $this->cupon_copia;
  }

  public function setCuponCopia($cupon_copia){
    $this->cupon_copia = $cupon_copia;
  }

  public function getConsentimientoOriginal(){
    return $this->consentimiento_original;
  }

  public function setConsentimientoOriginal($consentimiento_original){
    $this->consentimiento_original = $consentimiento_original;
  }

  public function getConsentimientoCopia(){
    return $this->consentimiento_copia;
  }

  public function setConsentimientoCopia($consentimiento_copia){
    $this->consentimiento_copia = $consentimiento_copia;
  }
  public function getResultadoOriginal(){
    return $this->resultado_original;
  }

  public function setResultadoOriginal($resultado_original){
    $this->resultado_original = $resultado_original;
  }
  public function getResultadoCopia(){
    return $this->resultado_copia;
  }

  public function setResultadoCopia($resultado_copia){
    $this->resultado_copia = $resultado_copia;
  }


  public function getFechaCreacion(){
    return $this->fecha_creacion;
  }

  public function setFechaCreacion($fecha_creacion){
    $this->fecha_creacion = $fecha_creacion;
  }

  public function getTipoestudio(){
		return $this->tipo_estudio;
	}

	public function setTipoestudio($tipo_estudio){
		$this->tipo_estudio = $tipo_estudio;
	}

  public function getHoraCita(){
    return $this->hora_cita;
  }

  public function setHoraCita($hora_cita){
    $this->hora_cita = $hora_cita;
  }

  public function getFechaResultados(){
    return $this->fecha_resultados;
  }

  public function setFechaResultados($fecha_resultados){
    $this->fecha_resultados = $fecha_resultados;
  }

  public function save(){
  $sql = "INSERT INTO pacientes VALUES (NULL, {$this->getCreadoPor()}, {$this->getIdLaboratorio()}, '{$this->getNombre()}', '{$this->getSexo()}', {$this->getEdad()}, '{$this->getTelefono()}', '{$this->getMovil()}', '{$this->getCiudad()}', '{$this->getEstado()}','{$this->getDireccion()}','{$this->getEstudio()}', '{$this->getFolioID()}','{$this->getFolio()}',{$this->getActivacionFarma()}, '{$this->getActivacionRepresentante()}', CURDATE(),'{$this->getFechaCita()}',{$this->getEstatus()},'{$this->getCancelacion()}', '{$this->getObservaciones()}',{$this->getMedicoTratante()},NULL,'{$this->getTipoCupon()}','{$this->getFacturaMDT()}','{$this->getFacturaAsociado()}','{$this->getFechaConfirmacion()}', '{$this->getFechaNacimiento()}', '{$this->getClinica()}', '{$this->getPagoFactura()}', {$this->getIdPrograma()}, '{$this->getResultados()}', {$this->getCuponOriginal()}, {$this->getCuponCopia()}, {$this->getConsentimientoOriginal()}, {$this->getConsentimientoCopia()}, {$this->getResultadoOriginal()}, {$this->getResultadoCopia()}, CURDATE(), '{$this->getTipoestudio()}', '{$this->getHoraCita()}',NULL)";
//echo var_dump($sql);
  //die();
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function editar(){
    $sql = "UPDATE pacientes SET idpaciente = {$this->getId()}, creado_por = {$this->getCreadoPor()}, idlaboratorio = {$this->getIdLaboratorio()}, nombre = '{$this->getNombre()}', sexo='{$this->getSexo()}', edad = {$this->getEdad()}, telefono = '{$this->getTelefono()}', movil = '{$this->getMovil()}', ciudad = '{$this->getCiudad()}', estado = '{$this->getEstado()}', direccion = '{$this->getDireccion()}', estudio = '{$this->getEstudio()}', folio_id = '{$this->getFolioID()}', folio = '{$this->getFolio()}', activacion_farma = {$this->getActivacionFarma()}, activacion_representante = '{$this->getActivacionRepresentante()}', fecha_cita = '{$this->getFechaCita()}', estatus = {$this->getEstatus()}, motivo_cancelacion = '{$this->getCancelacion()}', observaciones = '{$this->getObservaciones()}', medico_tratante = {$this->getMedicoTratante()}, fecha_entrega = '{$this->getFechaEntrega()}', tipo_cupon = '{$this->getTipoCupon()}', factura_mdt = '{$this->getFacturaMDT()}', factura_asociado = '{$this->getFacturaAsociado()}', fecha_confirmacion = '{$this->getFechaConfirmacion()}', fecha_nacimiento = '{$this->getFechaNacimiento()}', clinica = '{$this->getClinica()}', pago_factura = '{$this->getPagoFactura()}', idprograma = {$this->getIdPrograma()}, resultados = '{$this->getResultados()}', cupon_original = {$this->getCuponOriginal()}, cupon_copia = {$this->getCuponCopia()}, consentimiento_original = {$this->getConsentimientoOriginal()}, consentimiento_copia = {$this->getConsentimientoCopia()}, resultado_original = {$this->getResultadoOriginal()}, resultado_copia = {$this->getResultadoCopia()}, tipo_estudio = '{$this->getTipoestudio()}', hora_cita = '{$this->getHoraCita()}', fecha_resultados = '{$this->getFechaResultados()}' WHERE idpaciente={$this->idpaciente} ;";
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function getAll(){
    $pacientes = $this->db->query("SELECT pacientes.*, u.nombre as nombre_usuario, p.nombre as nombre_programa, p.nombre as nombre_programa, c.nombre as cliente, l.nombre as laboratorio FROM pacientes
    INNER JOIN programas p ON p.idprograma = pacientes.idprograma
    INNER JOIN persona c ON pacientes.estudio = c.idpersona
    INNER JOIN usuario u ON pacientes.creado_por = u.idusuario
    INNER JOIN laboratorio l ON pacientes.idlaboratorio = l.idlaboratorio
    ORDER BY idpaciente DESC");
	return $pacientes;
  }

	public function getActivos(){
    $pacientes = $this->db->query("SELECT * FROM pacientes ORDER BY idpaciente DESC WHERE estatus = 1");
		return $pacientes;
  }

	public function getInactivos(){
    $pacientes = $this->db->query("SELECT * FROM pacientes ORDER BY idpaciente DESC WHERE estatus = 3");
		return $pacientes;
  }

  public function getOne(){
    $paciente = $this->db->query("SELECT * FROM pacientes WHERE idpaciente= {$this->getId()}");
    return $paciente->fetch_object();
  }

  public function getPrograma($idprograma, $idcliente){
    $sql = "SELECT pacientes.*, u.nombre as nombre_usuario, p.nombre as nombre_programa, p.nombre as nombre_programa, c.nombre as cliente, l.nombre as laboratorio FROM pacientes
    INNER JOIN programas p ON p.idprograma = pacientes.idprograma
    INNER JOIN persona c ON pacientes.estudio = c.idpersona
    INNER JOIN usuario u ON pacientes.creado_por = u.idusuario
    INNER JOIN laboratorio l ON pacientes.idlaboratorio = l.idlaboratorio
    WHERE pacientes.idprograma = $idprograma and pacientes.estudio = $idcliente and pacientes.estatus = 0 ORDER BY idpaciente DESC";
    $pacientes = $this->db->query($sql);


    return $pacientes;
  }

  public function getCanceladosPrograma($idprograma, $idcliente){
    $sql = "SELECT pacientes.*, u.nombre as nombre_usuario, p.nombre as nombre_programa, p.nombre as nombre_programa, c.nombre as cliente, l.nombre as laboratorio FROM pacientes
    INNER JOIN programas p ON p.idprograma = pacientes.idprograma
    INNER JOIN persona c ON pacientes.estudio = c.idpersona
    INNER JOIN usuario u ON pacientes.creado_por = u.idusuario
    INNER JOIN laboratorio l ON pacientes.idlaboratorio = l.idlaboratorio
    WHERE pacientes.idprograma = $idprograma and pacientes.estudio = $idcliente and pacientes.estatus != 0 ORDER BY idpaciente DESC";
    $pacientes = $this->db->query($sql);

    return $pacientes;
  }

}

?>
