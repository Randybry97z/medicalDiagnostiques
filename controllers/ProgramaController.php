<?php

require_once 'models/programa.php';

class ProgramaController{
  public function index(){

  }

  public function registro(){
    require_once 'views/programa/registro.php';
  }

  public function editar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $edit=true;

      $programa = new Programa();
      $programa->setId($id);
      $prog = $programa->getOne();

      header("Location:".base_url.'?controller=ProgramaController&action=detalle&id='.$id);
    }
  }

  public function gestion(){
    $programa = new Programa();

    $progs = $programa->getAll();
    require_once 'views/programa/gestion.php';
  }

  public function detalle(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $programa = new Programa();
      $programa->setId($id);
      $prog = $programa->getOne();

    }
    require_once 'views/programa/detalle.php';
  }

  public function save(){
    if(isset($_POST)){
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $fecha_creacion = isset($_POST['fecha_creacion']) ? $_POST['fecha_creacion'] : false;
      $estatus = isset($_POST['estatus']) ? $_POST['estatus'] : false;
      $clientes = isset($_POST['clientes']) ? $_POST['clientes'] : false;
      $observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : false;

      if($nombre && $fecha_creacion){
      $programa = new Programa();
      $programa->setNombre($nombre);
      $programa->setFechaCreacion($fecha_creacion);
      $programa->setEstatus($estatus);
      $programa->setObservaciones($observaciones);
      if(isset($_GET['id'])){
          $id = $_GET['id'];
          $programa->setId($id);
          $save = $programa->editar();
          foreach ($clientes as $cliente) {
          $save_clientes = $programa->save_clientes($cliente);
        }
      }else{
        $save = $programa->save();
      }


        if ($save) {
          $_SESSION['register'] = "complete";

        }else {
          $_SESSION['register'] = "failed";
        }
      }else{
        $_SESSION['register'] = "failed";
      }
    }else {
      $_SESSION['register'] = "failed";
    }
    header("Location:".base_url.'?controller=ProgramaController&action=gestion');
  }

} //FIN CLASE

?>
