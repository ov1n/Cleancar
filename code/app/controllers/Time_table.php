<?php

    //include employee class
    include './models/Timetable.php';

    class Time_table extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create employee object
            $timetable=new Timetable();
            $array=$timetable->get_timetable();
            //var_dump($array);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

    }

?>
