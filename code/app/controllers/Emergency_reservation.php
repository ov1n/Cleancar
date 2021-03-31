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


    class Emergency_reservation extends Controller{
        //function which finally inserts reservation to database across multiple tables 
        static function insert(){

            //create seperate db objects
            $cust=new Customer();       //find a way to not repeat this variable
            $timeslot=new Time_slot();
            $res=new Reservation();
            $res_timeslot=new Reservation_time_slot();

            //get the customer id to create tables
            $cid='9999';

            //get current date in db format
            $curr_date=date("Y-m-d");
            
            //insert into reservation table , 0 for adv_paid because function hasnt been implemented yet
            //get other necessary arguments from sessions and get reservation id returned for next query
            $next_res_id=$res->insert_reservation('0',"9999",$curr_date,Session::get("service_id"));

            //above function returns next res_id but we need the current one, so decrement
            $curr_res_id=$next_res_id-1;
            Session::set("res_id",$curr_res_id);

            //get timeslots
            $timeslots=$timeslot->get_range(Session::get("time"),Session::get("duration"),Session::get("res_date"));
            print_r($timeslots);
            
            //('before timeslot');//get each timeslot and insert into reservation-timeslot table

            foreach ($timeslots as $key ) {
                
                $res_timeslot->insert($curr_res_id,"$key[timeslot_no]",Session::get("res_date"));
            }

            //once confirmed increment the current customer reservation count by 1
            $cust->increment_count('9999');

        }
    }