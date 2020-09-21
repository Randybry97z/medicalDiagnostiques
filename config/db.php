<?php
require_once 'global.php';
class Database{
public static function connect(){
    $db = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

    //Comprobar si la conexión es correcta
    if(mysqli_connect_errno()){
      //echo "La conexión a la base de datos MYSQL ha fallado: ".mysqli_connect_error();
    }else {
      //echo "Conexión Completada<br/>";
    }

    $db->query('SET NAMES "' .DB_ENCODE.'"');
    return $db;

  }
}