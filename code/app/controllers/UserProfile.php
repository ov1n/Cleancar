<?php

    //include employee class
    include './models/Customer.php';
    include './models/Manager.php';
    include './models/Receptionist.php';
    include './models/Service_employee.php';

    class UserProfile extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create Service_type object
            $cust=new Customer();
            $manager=new Manager();
            $emp=new Service_employee();
            $recep=new Receptionist();
           // $array=$U_Profile->get_user_details();
            //var_dump($array);
               //echo $_SESSION["uname"]
            if(Session::get("role")=='customer'){
                //$array=$U_Profile->get_manager_details();
                
                //uname $_SESSION["details"]
                $temp_cust_id=$cust->get_custid(Session::get("uname"));
                
                $array=$cust->get_cust_data($temp_cust_id);
                require_once("./views/$view_name.php");
            }
            else if(Session::get("role")=='receptionist'){
                $array=$recep->get_recep_data();
                require_once("./views/$view_name.php");
            }
             else if(Session::get("role")=="manager"){
                $array=$manager->get_man_data();
                var_dump($array);
                require_once("./views/$view_name.php");
            }
             else if(Session::get("role")=='employee'){
                $temp_empt_id=$emp->get_empid(Session::get("uname"));
                
                $array=$emp->get_emp_data($temp_empt_id);
                
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

    }
    
    ?>