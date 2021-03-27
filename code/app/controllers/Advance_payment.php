<?php

    //include employee class
    include './models/Customer.php';

    class Advance_payment extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){
            //var_dump($array);
            
            if(Session::get("role")==$role){
                //change link
                header("Location: https://sandbox.payhere.lk/pay/o9e7eec74");
            }

            else{
                require_once("./views/error_403.php");
            }
        }
    }
?>