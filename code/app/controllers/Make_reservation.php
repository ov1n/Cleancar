<?php

    //include database class
    include_once './models/Customer.php';
    include_once './models/Time_slot.php';
    include_once './models/Service_type.php';
    include_once './models/Reservation.php';
    include_once './models/Reservation_time_slot.php';

    class Make_reservation extends Controller{

        public function __construct(){
            //
           
        }

        //overloading create view
        public static function create_view($view_name){

            //get variables from session
            $timeslot=Session::get("timeslot");
            $date=Session::get("date");
            require_once("./views/make_reservation.php");
        }

        static function autofill($cust_id){

            $cust=new Customer();       //find a way to not repeat this variable
            $array=$cust->getdata($cust_id);
            
            //assign each from array to variables
            $first_name = $array['first_name'];
            $last_name = $array['last_name'];
            $email = $array['email'];
            $mobile_tel_no=$array['mobile_tel_no'];
            
            //get tomorrows date and assign it as just the default value
            $tomorrow=date("Y-m-d", strtotime('+1 day'));

            $array['date']=$tomorrow;

            return($array);

        }

        //function which gets timeslot,date from database
        static function get_time(){

            //create seperate db objects
            $cust=new Customer();       //find a way to not repeat this variable
            $service_type=new Service_type();
            $timeslot=new Time_slot();

            //get necessary data from the view through POST
            $date=$_POST["date"];
            $service_name=$_POST["service_type"];
            $time=$_POST["time"];
            echo($time);

            //get the service typeid,duration to a single array
            $service_details=$service_type->get_details($service_name);

            //set the values so that the session can continue
            Session::set("service_id",$service_details["type_id"]);
            Session::set("duration",$service_details["duration"]);

        }

        //function which finally inserts reservation to database across multiple tables 
        static function insert(){

            //create seperate db objects
            $cust=new Customer();       //find a way to not repeat this variable
            $timeslot=new Time_slot();
            $res=new Reservation();
            $res_timeslot=new Reservation_time_slot();

            //get the customer id to create tables
            $cid=$cust->get_custid(Session::get("uname"));

            //get current date in db format
            $curr_date=date("Y-m-d");
            //echo($curr_date);
            
            //insert into reservation table , 0 for adv_paid because function hasnt been implemented yet
            //get other necessary arguments from sessions and get reservation id returned for next query
            $next_res_id=$res->insert('0',$cid,$curr_date,Session::get("service_id"));

            //above function returns next res_id but we need the current one, so decrement
            $curr_res_id=$next_res_id-1;

            echo($curr_res_id);
            //$res_timeslot->insert($curr_res_id,$timeslot_no,$date);
        }
        //function which gets 
    }
?>