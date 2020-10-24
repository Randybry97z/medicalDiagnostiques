<?php
require_once 'models/persona.php';

class PersonaController{
  public function index(){

  }

  public function registro(){
    require_once 'views/persona/registro.php';
  }

  public function editar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $edit=true;

      $persona = new Persona();
      $persona->setId($id);
      $sub = $persona->getOne();

      header("Location:".base_url.'?controller=PersonaController&action=detalle&id='.$id);
    }
  }

  public function desactivar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $persona = new Persona();
      $persona->setId($id);
      $sub = $persona->getOne();
      $save = $persona->desactivar();

      require_once 'views/persona/detalle.php';
    }
  }

  public function activar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $persona = new Persona();
      $persona->setId($id);
      $usr = $persona->getOne();
      $save = $persona->activar();

      require_once 'views/persona/detalle.php';
    }
  }

  public function proveedores(){
    $persona = new Persona();

    $proveedores = $persona->getProveedores();
    require_once 'views/persona/proveedores.php';
  }

  public function gestion(){
	
    $persona = new Persona();

    $personas = $persona->getAll();
    require_once 'views/persona/gestion.php';
  }

  public function clientes(){
	  
	if(Utils::isAdmin()){
    $persona = new Persona();

    $clientes = $persona->getClientes();
    require_once 'views/persona/clientes.php';
	}else {
		header("Location:".base_url."?controller=InicioController&action=index");
	}
  }

  public function detalle(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $persona = new Persona();
      $persona->setId($id);
      $sub = $persona->getOne();

    }
    require_once 'views/persona/detalle.php';
  }

  public function save(){
    if(isset($_POST)){
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $contacto = isset($_POST['contacto']) ? $_POST['contacto'] : false;
      $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
      $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
      $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : false;
      $contacto_2 = isset($_POST['contacto_2']) ? $_POST['contacto_2'] : false;
      $programas = isset($_POST['programas']) ? $_POST['programas'] : false;


      if($nombre && $correo && $telefono && $tipo && $contacto){
      $persona = new Persona();
      $persona->setNombre($nombre);
      $persona->setContacto($contacto);
      $persona->setEmail($correo);
      $persona->setTelefono($telefono);
      $persona->setTipo($tipo);
      $persona->setContacto2($contacto_2);
      if(isset($_GET['id'])){
          $id = $_GET['id'];
          $persona->setId($id);
          $persona->setEstatus(1);
          $save = $persona->editar();
          foreach ($programas as $programa) {
          $save_programas = $persona->save_programas($programa);
        }

      }else{
        $save = $persona->save();
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
    header("Location:".base_url.'?controller=PersonaController&action=clientes');
  }

} //FIN CLASE

?>