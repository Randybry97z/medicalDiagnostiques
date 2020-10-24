<?php
require_once 'models/permiso.php';

class PermisoController{

	public function index(){
		if(Utils::isAdmin()){
		$permiso = new Permiso();
		$permisos = $permiso->getAll();

		require_once 'views/permiso/listar.php';
		}else {header("Location:".base_url."?controller=InicioController&action=index");}
	}

	public function crear(){
		require_once 'views/permiso/crear.php';
	}

	public function save(){
		if (isset($_POST)) {
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;

      if ($nombre) {
        $permiso = new Permiso();
        $permiso->setNombre($nombre);
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $permiso->setId($id);
          $save = $permiso->edit();

        }else{
        $save = $permiso->save();
        }
		    	if ($save) {
		          $_SESSION['permiso'] = "complete";
	        }else {
		          $_SESSION['permiso'] = "failed";
    	    }
      }else {
        $_SESSION['permiso'] = "failed";
      }
    }else {
      $_SESSION['permiso'] = "failed";
    }
    header("Location: ".base_url.'?controller=PermisoController&action=index');
	}

	public function delete(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $permiso = new Permiso();
      $permiso->setId($id);
      $delete = $permiso->delete();
      if ($delete) {
        $_SESSION['delete'] = 'complete';
      }else {
        $_SESSION['delete'] = 'failed';
      }
    }else {
      $_SESSION['delete'] = 'failed';
    }
	}

	public function detail(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $edit = true;

      $permiso = new Permiso();
      $permiso->setId($id);
      $pm = $permiso->getOne();
      $user = $permiso->getUsers();

      require_once 'views/permiso/detalle.php';
    }else{
      header("Location: ".base_url.'?controller=PermisoController&action=index');
    }
  }
}