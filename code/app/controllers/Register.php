<?php

    //include customer class
    include './models/Customer.php';
    //get mailer class to send registration emails to customers
    require './lib/classes/Mailer.php';

    //get vehicle validation class
    require './lib/classes/Vehicle_regex.php';

    class Register extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE

        function register(){

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

            //hash the password
            //$hashed=md5($password);
            $hashed = sha1($password);

            //$hashed = password_hash($password,PASSWORD_BCRYPT);
            $vehicle_type=Vehicle_regex::validate($vehicle_number);
            //insert data
            $result=$cust->insert_record($first_name,$last_name,$vehicle_number,$address,$hashed,$e_mail,$mobile_tel_no,$home_tel_no,$vehicle_type);
            echo("resultstart");
            echo($result);
            echo("resultend");
            //ON SUCCESS, send an email to customer address
            $mail=new Mailer();

            $subject="Welcome to Cleancar Reservation System!";
            $body="<strong>Dear Mr./Mrs. $last_name,</strong></br>Thank you for
                    registering with Cleancar reservation System.";

            //call function in class
            $mail->mailto($subject,$e_mail,$body);
        }
    }
?>