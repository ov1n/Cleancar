<?php

    //include database class
    include_once './models/Service_type.php';
    include_once './models/Time_slot.php';
    include_once 'lib/classes/util/time_func.php';

    class Calendar extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //get variables from session
            Calendar::get_time_slots();
            Calendar::make_service_arrays();

            if(Session::get("role")==$role){
                //require_once("./views/customer_calendar.php");
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

            //declaring 3 arrays
            $full_service_list=array();
            $normal_service_list=array();
            $body_wash_list=array();

            //getting the 3 types of slots for lifts
            $full_service_lifts=$service_type->get_lifts_per_type('Full Service');
            $normal_service_lifts=$service_type->get_lifts_per_type('Normal Service');
            $body_wash_lifts=$service_type->get_lifts_per_type('Body Wash');

            //var_dump($full_service_lifts);

            for($i=0;$i<sizeof(Session::get('coming_week'));$i++){

                $x=$_SESSION["coming_week"][$i]; //2021-10-27 sort

                
                for($j=0;$j<sizeof(Session::get('full_service_slots'));$j++){
                    $y=$_SESSION["full_service_slots"][$j]; //08:00 sort
                    //HAVE TON SET AS ($SLOTS-$AVAILABLE)
                    //SO IF NULL YOU CANT BOOK
                    $newdata[$y]=array(1,2,3);
                }
                //print_r('\n');
                $full_service_list[$x]=$newdata;
                //array_push($full_service_list[$x],$newdata);
                //$full_service_list[$x]=array(
                //   $y=>array(1,2,3)
                //);
                             
            }
            
            Session::set('full_service_list',$full_service_list);

            //print_r("\n");
            //print_r($full_service_list);
        }

    }
?>