<?php

    //include customer class
    include './models/Customer.php';

    class Register extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE

        public function __construct(){
            //
        
        }
        static function register(){

            $cust=new Customer();
            
            //get each field from form
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $vehicle_number=$_POST['vehicle_number'];
            $address=$_POST['address'];
            $e_mail=$_POST['e-mail'];
            $password=$_POST['password'];
            $mobile_tel_no=$_POST['mobile_tel_no'];
            $home_tel_no=$_POST['home_tel_no'];

            $cust->insert_record($first_name,$last_name,$vehicle_number,$address,$e_mail,$password,$mobile_tel_no,$home_tel_no);
        }
    }
?>