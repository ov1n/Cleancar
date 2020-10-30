<?php
    include_once './lib/classes/Session.php';
    class Controller{
        //base controller just for extending
        public static function create_view($view_name){
            //echo("errorcheck");
            //session commence
            //Session::init();
            //testing if session works
            //Session::set("test","test");
            //echo($_SESSION[$uname]);
            //echo($_SESSION["test"]);

            require_once("./views/$view_name.php");
        }
    }
?>