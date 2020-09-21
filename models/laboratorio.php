<?php

class Laboratorio{
  private $idlaboratorio;
  private $idusuario;
  private $nombre;
  private $estado;
  private $ciudad;
  private $direccion;
  private $contacto;
  private $telefono;
  private $movil;
  private $correo;
  private $correo_2;
  private $estudio;
  private $atencion;
  private $clinica;
  private $razon_social;
  private $num_cuenta;
  private $convenio;
  private $estatus;
  private $nombre_banco;
  private $precio_estudio;
  private $observaciones;
  private $fecha_creacion;
  private $db;

  public function __construct(){
    $this->db = Database::connect();
  }

  public function getId(){
    return $this->idlaboratorio;
  }

  public function setId($idlaboratorio){
    $this->idlaboratorio = $idlaboratorio;
  }

  public function getFechaCreacion(){
    return $this->fecha_creacion;
  }

  public function setFechaCreacion($fecha_creacion){
    $this->fecha_creacion = $fecha_creacion;
  }

  public function getIdUsuario(){
    return $this->idusuario;
  }

  public function setIdUsuario($idusuario){
    $this->idusuario = $idusuario;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($nombre){
    $this->nombre = $this->db->real_escape_string($nombre);
  }

  public function getEstado(){
    return $this->estado;
  }

  public function setEstado($estado){
    $this->estado = $this->db->real_escape_string($estado);
  }

  public function getCiudad(){
    return $this->ciudad;
  }

  public function setCiudad($ciudad){
    $this->ciudad = $this->db->real_escape_string($ciudad);
  }

  public function getDireccion(){
    return $this->direccion;
  }

  public function setDireccion($direccion){
    $this->direccion = $this->db->real_escape_string($direccion);
  }

  public function getContacto(){
    return $this->contacto;
  }

  public function setContacto($contacto){
    $this->contacto = $this->db->real_escape_string($contacto);
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

  public function getEmail(){
    return $this->correo;
  }

  public function setEmail($correo){
    $this->correo = $this->db->real_escape_string($correo);
  }

  public function getEmailS(){
    return $this->correo_2;
  }

  public function setEmailS($correo_2){
    $this->correo_2 = $this->db->real_escape_string($correo_2);
  }

  public function getEstudio(){
    return $this->estudio;
  }

  public function setEstudio($estudio){
    $this->estudio = $this->db->real_escape_string($estudio);
  }

  public function getAtencion(){
    return $this->atencion;
  }

  public function setAtencion($atencion){
    $this->atencion = $this->db->real_escape_string($atencion);
  }

  public function getClinica(){
    return $this->clinica;
  }

  public function setClinica($clinica){
    $this->clinica = $this->db->real_escape_string($clinica);
  }

  public function getRazonSocial(){
    return $this->razon_social;
  }

  public function setRazonSocial($razon_social){
    $this->razon_social = $this->db->real_escape_string($razon_social);
  }

  public function getNombreBanco(){
    return $this->nombre_banco;
  }

  public function setNombreBanco($nombre_banco){
    $this->nombre_banco = $this->db->real_escape_string($nombre_banco);
  }

  public function getNumCuenta(){
    return $this->num_cuenta;
  }

  public function setNumCuenta($num_cuenta){
    $this->num_cuenta = $num_cuenta;;
  }

  public function getConvenio(){
    return $this->convenio;
  }

  public function setConvenio($convenio){
    $this->convenio = $convenio;
  }

  public function getEstatus(){
    return $this->estatus;
  }

  public function setEstatus($estatus){
    $this->estatus = $this->db->real_escape_string($estatus);
  }

  public function getObservaciones(){
    return $this->observaciones;
  }

  public function setObservaciones($observaciones){
    $this->observaciones = $this->db->real_escape_string($observaciones);
  }

  public function getPrecio(){
    return $this->precio_estudio;
  }

  public function setPrecio($precio_estudio){
    $this->precio_estudio = $precio_estudio;
  }

  public function save(){
    $sql = "INSERT INTO laboratorio VALUES (NULL, {$this->getIdUsuario()}, '{$this->getNombre()}','{$this->getEstado()}','{$this->getCiudad()}','{$this->getDireccion()}','{$this->getContacto()}','{$this->getTelefono()}', '{$this->getMovil()}','{$this->getEmail()}', '{$this->getEmailS()}', '{$this->getEstudio()}', '{$this->getAtencion()}', '{$this->getClinica()}', '{$this->getRazonSocial()}', {$this->getNumCuenta()}, {$this->getConvenio()}, 1, '{$this->getNombreBanco()}',{$this->getPrecio()},'{$this->getObservaciones()}', CURDATE())";

    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function getOne(){
    $sql = "SELECT l.* , u.idusuario as idusuario, u.nombre as usuario_nombre FROM laboratorio l INNER JOIN usuario u ON l.idusuario = u.idusuario WHERE l.idlaboratorio= {$this->getId()}";
    $laboratorio = $this->db->query($sql);
/*    echo var_dump($sql);
    die();*/
    return $laboratorio->fetch_object();
  }

  public function getAll(){
    $sql = "SELECT l.* ,u.idusuario as idusuario, u.nombre as usuario_nombre FROM laboratorio l INNER JOIN usuario u ON l.idusuario = u.idusuario";
    $laboratorios = $this->db->query($sql);

    return $laboratorios;
  }

  public function getPrograma($idprograma){
    $sql = "SELECT laboratorio.estudio, programas.nombre as programa FROM `laboratorio` INNER JOIN programas ON laboratorio.estudio = programas.idprograma";
    $programa = $this->db->query($sql);

    return $programa->fetch_object();
  }

  public function edit(){
    $sql = "UPDATE laboratorio SET idlaboratorio = {$this->getId()}, nombre = '{$this->getNombre()}', estado = '{$this->getEstado()}', ciudad = '{$this->getCiudad()}', direccion = '{$this->getDireccion()}', contacto = '{$this->getContacto()}', telefono = '{$this->getTelefono()}', movil = '{$this->getMovil()}', correo = '{$this->getEmail()}', correo_2 = '{$this->getEmailS()}', estudio = '{$this->getEstudio()}', atencion = '{$this->getAtencion()}', clinica = '{$this->getClinica()}', razon_social = '{$this->getRazonSocial()}', num_cuenta = {$this->getNumCuenta()}, convenio = {$this->getConvenio()}, nombre_banco = '{$this->getNombreBanco()}', precio_estudio = {$this->getPrecio()}, observaciones = '{$this->getObservaciones()}' WHERE idlaboratorio={$this->idlaboratorio}";
    $save = $this->db->query($sql);

    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function delete(){
    $sql = "DELETE FROM laboratorio WHERE idlaboratorio={$this->laboratorio}";
    $delete = $this->db->query($sql);

      $result = false;
      if ($delete) {
        $result = true;
      }
      return $result;
  }

}
