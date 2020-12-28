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

            //hash the password
            //$hashed=md5($password);
            //hash the password
            // Blowfish encryption
            function better_crypt($input, $rounds = 7)
            {
                $salt = "";
                $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));
                for($i=0; $i < 22; $i++) {
                $salt .= $salt_chars[array_rand($salt_chars)];
                }
                return crypt($input, sprintf('$2a$%02d$', $rounds) . $salt);
            }
           
            //$hashed = password_hash(better_crypt($password), PASSWORD_DEFAULT);
            $hashed = better_crypt($password);

            //insert data
            $result=$cust->insert_record($first_name,$last_name,$vehicle_number,$address,$hashed,$e_mail,$mobile_tel_no,$home_tel_no);
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