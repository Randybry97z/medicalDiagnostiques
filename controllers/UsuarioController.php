<?php

require_once 'models/usuario.php';

class UsuarioController{
  public function index(){
    //echo "Controlador Usuarios, Acción index";
    require_once 'views/usuario/login.php';
  }

  public function registro(){
    require_once 'views/usuario/registro.php';
  }

  public function editar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $edit=true;

      $usuario = new Usuario();
      $usuario->setId($id);
      $usr = $usuario->getOne();

      header("Location:".base_url.'?controller=UsuarioController&action=perfil&id='.$id);
    }
  }

  public function desactivar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $usuario = new Usuario();
      $usuario->setId($id);
      $usr = $usuario->getOne();
      $save = $usuario->desactivar();

      require_once 'views/usuario/perfil.php';
    }
  }

  public function activar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $usuario = new Usuario();
      $usuario->setId($id);
      $usr = $usuario->getOne();
      $save = $usuario->activar();

      require_once 'views/usuario/perfil.php';
    }
  }

  public function gestion(){
    if(Utils::isAdmin()){
    $usuario = new Usuario();
    $usuarios = $usuario->getAllAsignado();
    require_once 'views/usuario/gestion.php';
	}else{
		header("Location:".base_url."?controller=InicioController&action=index");
	}
  }

  public function perfil(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $usuario = new Usuario();
      $usuario->setId($id);
      $usr = $usuario->getOne();

    }
    require_once 'views/usuario/perfil.php';
  }

  public function save(){
    if(isset($_POST)){
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
      $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
      $username = isset($_POST['username']) ? $_POST['username'] : false;
      $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : false;
      $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : false;
      $cumple = isset($_POST['cumple']) ? $_POST['cumple'] : false;
      $permisos = isset($_POST['permisos']) ? $_POST['permisos'] : false;

      if($nombre && $correo && $telefono && $username && $tipo){
      $usuario = new Usuario();
      $usuario->setNombre($nombre);
      $usuario->setEmail($correo);
      $usuario->setTelefono($telefono);
      $usuario->setUsername($username);
      $usuario->setPassword($contrasena);
      $usuario->setTipo($tipo);
      $usuario->setCumple($cumple);
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $usuario->setId($id);
          $usuario->setEstatus(1);
          $save = $usuario->editar();
          foreach ($permisos as $permiso) {
            $save_permiso = $usuario->save_permisos($permiso);
          }
        }else{
          $save = $usuario->save();
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
    header("Location:".base_url.'?controller=UsuarioController&action=gestion');
  }

  public function passform(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $usuario = new Usuario();
      $usuario->setId($id);
      $usr = $usuario->getOne();

    }
    require_once 'views/usuario/updatePassword.php';
  }

  public function updatePassword(){
    if (isset($_POST)) {
      $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : false;
      if ($contrasena) {
        $usuario = new Usuario();
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $usuario->setId($id);
          $usuario->setPassword($contrasena);
          $save = $usuario->editPassword();
        }
        if ($save) {
          $_SESSION['updatePassword'] = "complete";
        }else {
          $_SESSION['updatePassword'] = "failed";
        }
      }else{
          $_SESSION['updatePassword'] = "failed";
      }
    }else{
          $_SESSION['updatePassword'] = "failed";
    }

    header("Location:".base_url.'?controller=UsuarioController&action=perfil&id='.$id);
  }

  public function login(){
    if (isset($_POST)) {
      // identificar usuario
      //Consulta a la base de datos
      $usuario = new Usuario();
      $usuario->setUsername($_POST['username']);
      $usuario->setPassword($_POST['contrasena']);

      $identity = $usuario->login();

      if ($identity && is_object($identity)) {
        $_SESSION['identity'] = $identity;
      }else {
        $_SESSION['error_login'] = "Identificación fallida";
      }

    }
    header("Location:".base_url."?controller=InicioController&action=index");
  }

  public function logout(){
    if (isset($_SESSION['identity'])) {
      unset($_SESSION['identity']);
    }

    header("Location:".base_url);
  }

  public function deletePermiso(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $usuario = new Usuario();
      $usr = $usuario->deletePermiso($id);

    }

    //header("Location:".base_url."Usuario/gestion");
  }

} //FIN CLASE

?>