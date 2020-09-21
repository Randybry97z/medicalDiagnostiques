<?php

require_once 'models/laboratorio.php';

class LaboratorioController{
  public function index(){

  }

  public function registro(){
    require_once 'views/laboratorio/registro.php';
  }

  public function editar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $edit=true;

      $laboratorio = new Laboratorio();
      $laboratorio->setId($id);
      $lab = $laboratorio->getOne();

      header("Location:".base_url.'?controller=LaboratorioController&action=detalle&id='.$id);
    }
  }

  public function gestion(){
    $laboratorio = new Laboratorio();

    $laboratorios = $laboratorio->getAll();
    require_once 'views/laboratorio/gestion.php';
  }

  public function detalle(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $laboratorio = new Laboratorio();
      $laboratorio->setId($id);
      $lab = $laboratorio->getOne();

    }
    require_once 'views/laboratorio/detalle.php';
  }

  public function save(){
    if(isset($_POST)){
      $idusuario = isset($_POST['idusuario']) ? $_POST['idusuario'] : false;
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $estado = isset($_POST['estado']) ? $_POST['estado'] : false;
      $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : false;
      $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
      $contacto = isset($_POST['contacto']) ? $_POST['contacto'] : false;
      $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
      $movil = isset($_POST['movil']) ? $_POST['movil'] : false;
      $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
      $correo_2 = isset($_POST['correo_2']) ? $_POST['correo_2'] : false;
      $estudio = isset($_POST['estudio']) ? $_POST['estudio'] : false;
      $atencion = isset($_POST['atencion']) ? $_POST['atencion'] : false;
      $clinica = isset($_POST['clinica']) ? $_POST['clinica'] : false;
      $razon_social = isset($_POST['razon_social']) ? $_POST['razon_social'] : false;
      $num_cuenta = isset($_POST['num_cuenta']) ? $_POST['num_cuenta'] : false;
      $convenio = isset($_POST['convenio']) ? $_POST['convenio'] : false;
      $estatus = isset($_POST['estatus']) ? $_POST['estatus'] : false;
      $nombre_banco = isset($_POST['nombre_banco']) ? $_POST['nombre_banco'] : false;
      $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
      $observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : false;

      if($nombre){
      $laboratorio = new Laboratorio();
      $laboratorio->setIdUsuario($idusuario);
      $laboratorio->setNombre($nombre);
      $laboratorio->setEstado($estado);
      $laboratorio->setCiudad($ciudad);
      $laboratorio->setDireccion($direccion);
      $laboratorio->setContacto($contacto);
      $laboratorio->setTelefono($telefono);
      $laboratorio->setMovil($movil);
      $laboratorio->setEmail($correo);
      $laboratorio->setEmailS($correo_2);
      $laboratorio->setEstudio($estudio);
      $laboratorio->setClinica($clinica);
      $laboratorio->setRazonSocial($razon_social);
      $laboratorio->setNumCuenta($num_cuenta);
      $laboratorio->setConvenio($convenio);
      $laboratorio->setNombreBanco($nombre_banco);
      $laboratorio->setPrecio($precio);
      $laboratorio->setObservaciones($observaciones);
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $laboratorio->setId($id);
        $laboratorio->setEstatus($estatus);
        $save = $laboratorio->edit();
      }else{
        $save = $laboratorio->save();
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
    header("Location:".base_url.'?controller=LaboratorioController&action=gestion');
  }

} //FIN CLASE

?>
