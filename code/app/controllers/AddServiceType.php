<?php

    //include employee class
    include './models/Service_type.php';
    //get mailer class to send registration emails to customers
    require './lib/classes/Mailer.php';

    class AddServiceType extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE

        public function __construct(){
            //
        
        }
        static function register(){

            $s_type=new Service_type();
            
            //get each field from form
            $service_type=$_POST['service_type'];
            $vehicle_category=$_POST['vehicle_category'];
            $no_of_employees=$_POST['no_of_employees'];
            $no_of_time_slot=$_POST['no_of_time_slot'];
            $lift_no=$_POST['lift_no'];
            $price=$_POST['price'];
            
           
            
            //insert data
            $s_type->insert_record($service_type,$vehicle_category,$no_of_employees,$no_of_time_slot,$lift_no,$price);

            //ON SUCCESS, send an email to the employee asking him to change his password immediately
           

         
          
        }
    }
?>