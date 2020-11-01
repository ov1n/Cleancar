<?php

    //include customer class
    include './models/Customer.php';
    //get mailer class to send registration emails to customers
    require './lib/classes/Mailer.php';

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
            $e_mail=$_POST['email'];
            $password=$_POST['password'];
            $mobile_tel_no=$_POST['mobile_tel_no'];
            $home_tel_no=$_POST['home_tel_no'];

            //insert data
            $cust->insert_record($first_name,$last_name,$vehicle_number,$address,$password,$e_mail,$mobile_tel_no,$home_tel_no);

            //ON SUCCESS, send an email to customer address
            $mail=new Mailer();

            $subject="Welcome to Cleancar Reservation System!";
            $to='tdwithanage97@gmail.com';
            $body="Check if email goes from view instantiated";

            //call function in class
            $mail->mailto($subject,$to,$body);
        }
    }
?>