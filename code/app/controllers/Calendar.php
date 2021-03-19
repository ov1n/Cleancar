<?php

    //include database class
    include_once './models/Service_type.php';
    include_once './models/Time_slot.php';
    include_once 'lib/classes/util/time_func.php';

    class Calendar extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //get variables from session
            $timeslots=Calendar::get_time_slots('02:00:00');
        
            Session::set('timeslots',$timeslots);

            if(Session::get("role")==$role){
                require_once("./views/customer_calendar.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        static function get_time_slots($time){

            $timeslot=new Time_slot();
            $service_type=new Service_type();

            $min=$timeslot->get_min();
            $max=$timeslot->get_max();

            //get seperate timeslots for 3 slots 
            $full_service_slots=$normal_service_slots=$body_wash_slots=array();

            //get durations for service types
            $full_service_duration=$service_type->get_duration_from_name('Full Service');
            $normal_service_duration=$service_type->get_duration_from_name('Normal Service');
            $body_wash_duration=$service_type->get_duration_from_name('Body Wash');
            
            //full service
            $curr=$min;
            while(strtotime($curr)<strtotime($max)){
                array_push($full_service_slots,Time_func::sqlto12hour($curr));
                $curr=$timeslot->add_slots($curr,$full_service_duration);
            }
            
            //normal service
            $curr=$min;
            while(strtotime($curr)<strtotime($max)){
                array_push($normal_service_slots,Time_func::sqlto12hour($curr));
                $curr=$timeslot->add_slots($curr,$normal_service_duration);
            }

            //body wash
            $curr=$min;
            while(strtotime($curr)<strtotime($max)){
                array_push($body_wash_slots,Time_func::sqlto12hour($curr));
                $curr=$timeslot->add_slots($curr,$body_wash_duration);
            }
            //echo($normal_service_duration);
            //echo($body_wash_duration);
            var_dump($full_service_slots);
            //array_push($a,"blue","yellow");
            //set variables
            Session::set('full_service_slots',$full_service_slots);
            Session::set('normal_service_slots',$normal_service_slots);
            Session::set('body_wash_slots',$body_wash_slots);
            
        }

    }
?>