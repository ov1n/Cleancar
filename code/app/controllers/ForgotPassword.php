<?php

    //include employee class
    include './models/Service_employee.php';
    include './models/Customer.php';

    //get mailer class to send registration emails to customers
    require './lib/classes/Mailer.php';
    require './lib/classes/RandomStringGenerator.php';

    class ForgotPassword extends Controller{

        public function email($email,$uname){

            //ON SUCCESS, send an email to customer address
            $mail=new Mailer();

            $subject="PASSWORD RESET FOR CLEANCAR SYSTEM";
            $body="<strong>Dear Mr./Mrs. $last_name,</strong></br>Please use the following new credentials to log 
                    into the system : </br>
                    Username: $username </br>
                    Password: $password </br>
                    Please change your password to one of your preffered as soon as you login";

            //call function in class
            $mail->mailto($subject,$e_mail,$body);
        }

        public function authenticate_email(){

            $cust=new Customer();
            $emp=new Service_employee();

            $email=$_POST['email'];

            if($cust->check_email($email)){ 
                echo "customer exists";
                //db function to change password
                //send pw to email

                
            }else if($emp->check_email($email)){ 
                echo "employee exists";
                //db function to change password
                //send pw to email
            }else{
                echo "email doesnt exist";
            }

        }

    }