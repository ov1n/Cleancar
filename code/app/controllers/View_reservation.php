<?php

    //include database class
    include_once './models/Customer.php';
    include_once './models/Time_slot.php';
    include_once './models/Service_type.php';

    class View_Reservation extends Controller{

        public function __construct(){
            //
        }

        //overloading create view
        public static function create_view($view_name){

            require_once("./views/customer/view_reservation.php");
        }

    }

?>