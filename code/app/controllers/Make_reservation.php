<?php

    //include database class
    include_once './models/Customer.php';
    include_once './models/Time_slot.php';
    include_once './models/Service_type.php';
    include_once './models/Reservation.php';
    include_once './models/Vehicle.php';
    include_once './models/Reservation_time_slot.php';

    //get mailer class to send registration emails to customers
    require './lib/classes/Mailer.php';


    class Make_reservation extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //get variables from session
            $timeslot=Session::get("timeslot");
            $date=Session::get("date");

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
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
            $cust=new Customer();       
            $service_type=new Service_type();
            $timeslot=new Time_slot();

            //get necessary data from the view through POST
            $date=$_POST["date"];
            $service_name=$_POST["service_type"];
            $time=$_POST["time"];

            //get the service typeid,duration to a single array
            $service_details=$service_type->get_details($service_name);

            //set the values so that the session can continue and data can be grabbed for the invoice
            Session::set("service_name",$service_name);
            Session::set("service_id",$service_details["type_id"]);
            Session::set("duration",$service_details["duration"]);
            Session::set("price",$service_details["price"]);

            Session::set("time",$time);
            Session::set("res_date",$date);

        }

        //function which finally inserts reservation to database across multiple tables 
        static function insert(){

            //create seperate db objects
            $cust=new Customer();      
            $timeslot=new Time_slot();
            $res=new Reservation();
            $res_timeslot=new Reservation_time_slot();
            $vehicle=new Vehicle();

            //get the customer id to create tables
            $cid=$cust->get_custid(Session::get("uname"));

            //get current date in db format
            $curr_date=date("Y-m-d");
            
            //insert into reservation table
            $next_res_id=$res->insert_reservation('0',"$cid",$curr_date,Session::get("service_id"));

            //above function returns next res_id but we need the current one, so decrement
            $curr_res_id=$next_res_id-1;
            //echo($curr_res_id);
            Session::set("res_id",$curr_res_id);

            //get timeslots
            $timeslots=$timeslot->get_range(Session::get("time"),Session::get("duration"),Session::get("res_date"));         

            foreach ($timeslots as $key ) {
                $res_timeslot->insert($curr_res_id,"$key[timeslot_no]",Session::get("res_date"));
            }

            //once confirmed increment the current customer reservation count by 1
            $cust->increment_count($cid);

            //get vehicle number and vehicle category
            $vehicle_array=$vehicle->get_details($cid);
            //set them for session variables
            Session::set("vehicle_num",$vehicle_array["vehicle_num"]);
            Session::set("vehicle_category",$vehicle_array["vehicle_category"]);

            //ON SUCCESS, send an email to customer address //
            $mail=new Mailer();
            $subject="Successful reservation Placement";
            //Email body
            $body="<strong>Dear Mr./Mrs.".$_SESSION["details"]["last_name"].",</strong></br>
                    Thank you for placing your reservation with CleanCar.</br>
                    The reservation details are as follows: </br>
                    Reservation ID:".$_SESSION["details"]["last_name"]."</br>
                    Vehicle No    :".$_SESSION["vehicle_num"]."</br>
                    Category      :".$_SESSION["vehicle_category"]."</br>
                    Service Type  :".$_SESSION["service_name"]."</br>
                    Date          :".$_SESSION["res_date"]."</br>
                    Time          :".$_SESSION["time"]."</br>
                    Duration      :".substr($_SESSION["duration"],1,1)." hours </br>
                    Price         : Rs.".$_SESSION["price"]."</br>
                    </br>
                    For any clarifications please contact CleanCar at our hotline :011-2773411";

            //call function in class
            $mail->mailto($subject,$_SESSION['details']['email'],$body);

        }
        
    }
?>