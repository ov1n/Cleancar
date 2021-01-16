<?php

    //include employee class
    include './models/Service_type.php';

    class ServiceType extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create Service_type object
            $Service_type=new Service_type();
            $array=$Service_type->get_all();
            //var_dump($array);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

           //function to view service type
        public function view($view_name,$role){

            $typeid=$_GET['type_id'];
           
            $Service_type=new Service_type();
            $array=$Service_type->get_servicetype($typeid);
            //var_dump($array);
            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

          //function to delete sevice type
        public static function delete($view_name){
            // echo($_GET['type_id']);
            $type_id = $_GET['type_id'];
            
            $Service_type=new Service_type();
            $Service_type->delete_record($type_id);
            $array=$Service_type->get_all();
            //var_dump($array);
            require_once("./views/$view_name.php");
            
        }


    }
    
    ?>
    