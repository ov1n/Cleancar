<?php

    //include Emp_Leave class
    include './models/Emp_leave.php';

    class EmployeeLeave extends Controller{

        //overloading create view
        public static function create_view($view_name){

            $id = $_SESSION["uname"];

            //create employee object
            $leave=new Emp_leave();
            $array=$leave->get_detail($id);
            //var_dump($array);

            require_once("./views/$view_name.php");
        }

        static function add_le(){

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

            //insert data
            $emp->insert_record($first_name,$last_name,$address,$e_mail,$home_tel_no,$mobile_tel_no,$nic_no,$password);


        }

    }

?>

