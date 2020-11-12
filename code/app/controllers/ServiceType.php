<?php

    //include employee class
    include './models/Service_type.php';

    class ServiceType extends Controller{

        //overloading create view
        public static function create_view($view_name){

            //create employee object
            $Service_type=new Service_type();
            $array=$Service_type->get_all();
            //var_dump($array);

            require_once("./views/$view_name.php");
        }      
    }
    
    ?>
    