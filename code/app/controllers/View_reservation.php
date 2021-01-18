<?php

    //include database class
    include_once './models/Customer.php';
    include_once './models/Reservation.php';
    include_once './models/Time_slot.php';
    include_once './models/Service_type.php';

    class View_Reservation extends Controller{

        public function __construct(){
            //
        }

        //function to get reservation details of the current employee
        function get_reservations(){

            //create seperate db objects
            $cust=new Customer();       //find a way to not repeat this variable
            $service_type=new Service_type();
            $timeslot=new Time_slot();
            $res=new Reservation();

            //get uname from session
            $email=Session::get("uname");

            //get the cust id and last name
            $cust_id=$cust->get_custid($email);
            $last_name=$cust->get_lastname($email);

            //get the customers reservation details
            $reservation_details=$res->select_reservation($cust_id);
            //echo '<pre>';
            //var_dump($reservation_details);
            //echo '</pre>';

            //set reservation details to session
            //set the values so that the session can continue and data can be grabbed for the invoice
            //Session::set("reservation_details",$reservation_details["reservation_id"]);
            //Session::set("added_date",$reservation_details["added_date"]); 
            //Session::set("advance_paid",$reservation_details["is_advance_paid"]);

            //data from service
            //Session::set("service_price",$service_details["price"]);
            //Session::set("service_name",$service_details["type_name"]);
            require_once("./views/customer/view_reservation.php");

    
        }

    }

?>