<?php

    //include database class
    include_once './models/Service_type.php';
    include_once './models/Time_slot.php';
    include_once './models/Reservation.php';
    include_once 'lib/classes/util/time_func.php';

    class Calendar extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //get variables from session
            Calendar::get_time_slots();
            Calendar::make_service_arrays();

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        static function get_time_slots(){

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
                array_push($full_service_slots,$curr);
                $curr=$timeslot->add_slots($curr,$full_service_duration);
            }
            
            //normal service
            $curr=$min;
            while(strtotime($curr)<strtotime($max)){
                array_push($normal_service_slots,$curr);
                $curr=$timeslot->add_slots($curr,$normal_service_duration);
            }

            //body wash
            $curr=$min;
            while(strtotime($curr)<strtotime($max)){
                array_push($body_wash_slots,$curr);
                $curr=$timeslot->add_slots($curr,$body_wash_duration);
            }
            //echo($normal_service_duration);
            //echo($body_wash_duration);
            //var_dump($full_service_slots);
            //array_push($a,"blue","yellow");
            //set variables
            Session::set('full_service_slots',$full_service_slots);
            Session::set('normal_service_slots',$normal_service_slots);
            Session::set('body_wash_slots',$body_wash_slots);

            //get dates for the coming week
            $tomorrow = date("Y-m-d", strtotime('tomorrow'));
            Session::set('coming_week',Time_func::week_generate($tomorrow));
        }

        static function make_service_arrays(){

            $service_type=new Service_type();
            $reservation=new Reservation();

            //declaring 3 arrays
            //$full_service_list=array();
            //$normal_service_list=array();
            //$body_wash_list=array();

            //getting the 3 types of slots for lifts
            $full_service_lifts=$service_type->get_lifts_per_type('Full Service');
            $normal_service_lifts=$service_type->get_lifts_per_type('Normal Service');
            $body_wash_lifts=$service_type->get_lifts_per_type('Body Wash');

            //var_dump($normal_service_lifts);

            $full_service_list=Calendar::generate_list('Full Service',$full_service_lifts,"full_service_slots");
            $normal_service_list=Calendar::generate_list('Normal Service',$normal_service_lifts,"normal_service_slots");
            $body_wash_list=Calendar::generate_list('Body Wash',$body_wash_lifts,"body_wash_slots");
            
            Session::set('full_service_list',$full_service_list);
            Session::set('normal_service_list',$normal_service_list);
            Session::set('body_wash_list',$body_wash_list);

            //print_r("\n");
            //print_r($full_service_list);
        }

        static function generate_list($type_name,$service_lifts,$slot_type){

            $reservation=new Reservation();
            $type_lifts=array();

            for($i=0;$i<sizeof(Session::get('coming_week'));$i++){

                $x=$_SESSION["coming_week"][$i]; //2021-10-27 sort

                
                for($j=0;$j<sizeof(Session::get($slot_type));$j++){
                    $y=$_SESSION[$slot_type][$j]; //08:00 sort
                    //HAVE TON SET AS ($SLOTS-$AVAILABLE)
                    //get currently reserved slots for the respective time slot
                    $reserved_full=$reservation->get_reserved_slots($x,"$type_name",$y);
                    //get left out slots if 0 that means you cant reserve
                    //$l1=count($type_lifts);
                    //$l2=count($reserved_full);
                    $left_full=count($service_lifts)-$reserved_full;
                    $newdata[$y]=$left_full;
                    //print_r($left_full);
                    //print_r('nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn');
                }
                //print_r('\n');
                $type_lifts[$x]=$newdata;
                //array_push($full_service_list[$x],$newdata);
                //$full_service_list[$x]=array(
                //   $y=>array(1,2,3)
                //);
                             
            }
            return $type_lifts;

        }

    }
?>