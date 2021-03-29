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

        //overloading create view
        public static function get_customer($view_name,$role){

            //create employee object
            $timetable=new Timetable();
            $reservation_id = $_GET['reservation_id'];
            $array=$timetable->get_cust($reservation_id); 
            //var_dump($array);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        //overloading create view
        public static function get_cust_and_vehi($view_name,$role){

            //create employee object
            $timetable=new Timetable();
            $cust_id = $_GET['cust_id'];
            $array=$timetable->get_reservation_details($cust_id);
            //var_dump($array);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }
        
        //overloading create view
        public static function get_bill_data($view_name,$role){

            //create employee object
            $timetable=new Timetable();
            $reservation_id = $_GET['reservation_id'];
            $array=$timetable->get_bill_details($reservation_id);
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
