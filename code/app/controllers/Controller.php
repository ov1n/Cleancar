<?php
    class Controller{
        //base controller just for extending
        public static function create_view($view_name){
            //echo("errorcheck");
            require_once("./views/$view_name.php");
        }
    }
?>