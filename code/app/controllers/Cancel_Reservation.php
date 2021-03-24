<?php

    //include database class
    include_once './models/Service_type.php';
    include_once './models/Time_slot.php';
    include_once './models/Reservation.php';
    include_once './models/Reservation_time_slot.php';
    include_once 'lib/classes/util/time_func.php';

    class Cancel_reservation extends Controller{

        $reservation=new Reservation();
        $reservation_slot=new Reservation_time_slot();

        function foo(){

        }
    }

?>