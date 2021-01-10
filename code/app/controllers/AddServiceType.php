<?php

    //include employee class
    include './models/Service_type.php';
    //get mailer class to send registration emails to customers
    require './lib/classes/Mailer.php';

    class AddServiceType extends Controller{
        //base controller just for extending
        
        static function register(){

            $s_type=new Service_type();
            
            //get each field from form
            $service_type=$_POST['service_type'];
            $vehicle_category=$_POST['vehicle_category'];
            $no_of_employees=$_POST['no_of_employees'];
            $duration=$_POST['duration'];
            $lift_no=$_POST['lift_no'];
            $price=$_POST['price'];
            
           
            
            //insert data
            $s_type->insert_record($service_type,$vehicle_category,$no_of_employees,$duration,$lift_no,$price);
            
            $service_notif=TRUE;

            header("Location: add_service");
            
            

            //ON SUCCESS, send an email to the employee asking him to change his password immediately
        
          
        }

            //get details from form and return to the Model to update data
        static function update(){

            //create new Service_employee object
            $type=new Service_type();
          
            //get each field from form
            $type_id=$_POST['type_id'];
            $service_type=$_POST['service_type'];
            $vehicle_category=$_POST['vehicle_category'];
            $no_of_employees=$_POST['no_of_employees'];
            $no_of_time_slot=$_POST['no_of_time_slot'];
            $lift_no=$_POST['lift_no'];
            $prize=$_POST['prize'];
          
           
            
            //Call the update_record function to insert the data to database
            $type->update_record($type_id,$service_type,$vehicle_category,$no_of_employees,$no_of_time_slot,$lift_no,$prize);

            
        }
    }
?>