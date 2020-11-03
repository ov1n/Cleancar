<?php

    //include employee class
    include './models/Service_employee.php';
    //get mailer class to send registration emails to customers
    // require './lib/classes/Mailer.php';

    class Employee extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE

        public function __construct(){
            //
        
        }
        static function register(){

            $emp=new Service_employee();
            
            //get each field from form
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $nic_no=$_POST['nic'];
            $address=$_POST['address'];
            $e_mail=$_POST['email'];
            $unhashed=$_POST['password'];
            $mobile_tel_no=$_POST['mobile_tel_no'];
            $home_tel_no=$_POST['home_tel_no'];

            //hash password
            $password=md5($unhashed);
            
            //insert data
            $emp->insert_record($first_name,$last_name,$address,$e_mail,$home_tel_no,$mobile_tel_no,$nic_no,$password);

            //ON SUCCESS, send an email to customer address
            // $mail=new Mailer();

            // $subject="Welcome to Cleancar Reservation System!";
            // $body="<strong>Dear Mr./Mrs. $last_name,</strong></br>Thank you for
            //         registering with Cleancar reservation System.";

            //call function in class
            // $mail->mailto($subject,$e_mail,$body);
        }
    }
?>