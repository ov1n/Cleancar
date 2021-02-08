<?php
    class Home extends Controller{
        //base controller just for extending
        public static function create_view($view_name,$role){

            require_once("./views/$view_name.php");
        }

    }
?>