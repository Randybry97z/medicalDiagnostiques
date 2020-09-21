<?php

class InicioController{
  public function index(){
    Utils::isIdentity();
    //echo "Controlador Usuarios, Acción index";
    require_once 'views/inicio.php';
  }
}