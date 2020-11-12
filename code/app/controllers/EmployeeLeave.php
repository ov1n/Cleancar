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

        static function add_leave(){

            $leave=new emp_leave();
            
            //get each field from form
            $leave_date=$_POST['leave_date'];
            $emp_id=$_POST['emp_id'];
            $type=$_POST['type'];
            $leave_time=$_POST['leave_time'];
            $reason=$_POST['reason'];

            //insert data
            $leave->insert_record($leave_date,$emp_id,$type,$leave_time,$reason);


        }


    }

?>

