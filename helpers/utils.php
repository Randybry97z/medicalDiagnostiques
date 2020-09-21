<?php

class Utils{
  public static function deleteSession($name){
    if (isset($_SESSION[$name])) {
    $_SESSION[$name] = null;
    unset($_SESSION[$name]);
    }

    return $name;
  }

  public static function isAdmin(){
    require_once 'models/usuario.php';
    $usuario = new Usuario();
    $admin = $usuario->admin($_SESSION['identity']->idusuario);
    $isadmin = $admin->fetch_object();

    if($isadmin->idpermiso != "4"){
      header("Location:".base_url.'?controller=InicioController&action=index');
    }else{
      return true;
    }
  }

  public static function isIdentity(){
    if (!isset($_SESSION['identity'])) {
      header("Location:".base_url);
    }else {
      return true;
    }
  }

  public static function showPermisos(){
    require_once 'models/permiso.php';
    $permiso = new Permiso();
    $permisos = $permiso->getAll();
    return $permisos;
  }

  public static function showMedicos(){
    require_once 'models/usuario.php';
    $usuario = new Usuario();
    $medicos = $usuario->getMedicos();
    return $medicos;
  }

  public static function showEmail($idusuario){
    require_once 'models/usuario.php';
    $usuario = new Usuario();
    $email = $usuario->getCorreo($idusuario);
    return $email;
  }

  public static function showLaboratorios(){
    require_once 'models/laboratorio.php';
    $laboratorio = new Laboratorio();
    $laboratorios = $laboratorio->getAll();
    return $laboratorios;
  }

  public static function showUserPermisos($id){
    require_once 'models/usuario.php';
    $usuario = new Usuario();
    $permisos = $usuario->getPermisos($id);
    return $permisos;
  }

  public static function showProgramas(){
    require_once 'models/programa.php';
    $programa = new Programa();
    $programas = $programa->getAll();
    return $programas;
  }

  public static function showClientes(){
    require_once 'models/persona.php';
    $persona = new Persona();
    $clientes = $persona->getClientes();
    return $clientes;
  }

  public static function showCliente($id){
    require_once 'models/persona.php';
    $persona = new Persona();
    $clientes = $persona->getOneId($id);
    return $clientes;
  }

  public static function showClientesHead(){
    require_once 'models/persona.php';
    $persona = new Persona();
    $clientes = $persona->getClientesHead();
    return $clientes;
  }

  public static function showClientProgram($id){
    require_once 'models/persona.php';
    $persona = new Persona();
    $programs = $persona->getProgramas($id);
    return $programs;
  }

  public static function showLabProgram($id){
    require_once 'models/laboratorio.php';
    $laboratorio = new Laboratorio();
    $program = $laboratorio->getPrograma($id);
    return $program;
  }

  public static function showProgramClients($id){
    require_once 'models/programa.php';
    $programa = new Programa();
    $clientes = $programa->getClientes($id);
    return $clientes;
  }

  public static function showPacientes(){
    require_once 'models/paciente.php';
    $paciente = new Paciente();
    $pacientes = $paciente->getAll();
    return $pacientes;
  }

}

?>