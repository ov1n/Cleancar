<?php
    include_once './lib/classes/Session.php';
    class Controller{
        //base controller just for extending
        public static function create_view($view_name,$role){
            //echo("errorcheck");
            //session commence
            //Session::init();
            //testing if session works
            //Session::set("test","test");
            //echo($_SESSION[$uname]);
            //echo($_SESSION["login"]);

            //require_once("./views/$view_name.php");
            if($role==""){
                //no permission needed
                require_once("./views/$view_name.php");
            }
            else if($role=="loggedin"){

                if(Session::get("role")){
                    require_once("./views/$view_name.php");
                }
                
            }else if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        public static function test($view_name){
            
            require_once("./views/$view_name.php");
            
        }
    }
?>