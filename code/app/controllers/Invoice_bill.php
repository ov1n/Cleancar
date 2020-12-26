<?php

    //include employee class
    include './models/Invoice.php';

    class Invoice_bill extends Controller{

        //overloading create view
        public static function create_view($view_name){

            //create employee object
            //$bill=new Invoice();
            $array=$bill->get_bill_details();
            //var_dump($array);

            require_once("./views/$view_name.php");
        }

        static function add_new(){

            $bill=new Invoice();
            
            //get each field from form
            $bill_no=$_POST['bill_no'];
            $reservation_id=$_POST['reservation_id'];
            $vehicle_no=$_POST['veh_Number'];
            $vehicle_model=$_POST['veh_Model'];
            $customer_name=$_POST['name'];
            $contact_no=$_POST['contact_number'];
            $net_amount=$_POST['net_amount'];

            //get date of today for registered date
            $today=date('Y-m-d');


            //the built in insert function of model is called here
            $key_array=array("bill_no","reservation_id","vehicle_no","vehicle_model","customer_name","contact_no","net_amount","bill_date");
            $values_array=array("$bill_no","$reservation_id","$vehicle_no","$vehicle_model","$customer_name","$contact_no","$net_amount",$today);

            //insert data using the base model function
            $bill->insert('invoice',$key_array,$values_array);

        }

    }