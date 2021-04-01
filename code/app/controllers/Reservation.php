<?php

    //include database class
    include_once './models/Customer.php';
    include_once './models/Time_slot.php';
    include_once './models/Service_type.php';

    class Reservation extends Controller{

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

            //get the service typeid,no of timeslots to a single array
            $service_details=$service_type->get_details($service_name);

        }

        //function which finally inserts reservation to database across multiple tables 
        static function insert(){

            //create seperate db objects
            $cust=new Customer();       //find a way to not repeat this variable
            $timeslot=new Time_slot();
        }

    }
?>