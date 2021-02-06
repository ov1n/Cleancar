<?php

    //include employee class
    include './models/Service_employee.php';
    include './models/Customer.php';

    //get mailer class to send registration emails to customers
    require './lib/classes/Mailer.php';

    class ForgotPassword extends Controller{

        public function authenticate_email($view_name){

            $cust=new Customer();
            $emp=new Service_employee();

            $email=$_POST['email'];

        }

    }