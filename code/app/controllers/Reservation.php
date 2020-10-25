<?php

    //include customer class
    include_once './models/Customer.php';

    class Reservation extends Controller{

        public function __construct(){
            //
        
        }

        static function autofill($cust_id){

            $cust=new Customer();
            $array=$cust->getdata($cust_id);
            
            //assign each from array to variables
            $first_name = $array['first_name'];
            $last_name = $array['last_name'];
            $email = $array['email'];
            $mobile_tel_no=$array['mobile_tel_no'];

            echo($first_name);
            echo($last_name);
            echo($email);
            echo($mobile_tel_no);

            return($array);

        }
    }