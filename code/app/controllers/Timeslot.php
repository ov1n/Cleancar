<?php

    //include Time_slot class
    include './models/Time_slot.php';

    class Timeslot extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create employee object
            $timeslot=new time_slot();
            $array=$timeslot->get_detail();
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

