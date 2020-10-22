<?php
    class Controller{
        //base controller just for extending
        public static function create_view($view_name){
            //echo("errorcheck");
            //session commence
            session_start();
            //testing if session works
            //echo($_SESSION["test"]);
            $_SESSION["test"] = "test";
            //echo($_SESSION[$uname]);
            //echo($_SESSION["test"]);

            require_once("./views/$view_name.php");
        }
    }
?>