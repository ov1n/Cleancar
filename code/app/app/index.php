<?php
require_once './lib/routes.php';    //load routes

//to autoload classes,models and controllers
function __autoload($class_name){
    if(file_exists('./lib/classes/'.$class_name.'.php')){
        require_once './lib/classes/'.$class_name.'.php';
    }else if(file_exists('./Controllers/'.$class_name.'.php')){
        require_once './Controllers/'.$class_name.'.php';
    }
}
?>