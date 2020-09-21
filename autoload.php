<?php

function controllers_autoload($file_name){
  include 'controllers/'.$file_name.'.php';
}

spl_autoload_register('controllers_autoload');
