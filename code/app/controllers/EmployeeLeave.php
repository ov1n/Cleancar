<?php

    //include Emp_Leave class
    include './models/Emp_leave.php';
    include './models/Service_employee.php';

    class EmployeeLeave extends Controller{

        //overloading create view
        public static function create_view($view_name,$role='employee'){

            $name = $_SESSION["uname"];

            //create employee object
            $leave=new Emp_leave();
            $employee=new Service_employee();
            
            $id=$employee->get_empid($name);
            $array=$leave->get_detail($id);
            //var_dump($array);

            require_once("./views/$view_name.php");
        }

        static function add_leave(){

            $leave=new Emp_Leave();
            $employee=new Service_employee();
            
            //get each field from form
            $leave_date=$_POST['leave_date'];
            $emp_name=$_POST['emp_id'];
            $type=$_POST['leave_type'];
            $leave_time=$_POST['leave_time'];
            $reason=$_POST['reason'];

            $emp_id=$employee->get_empid($emp_name);

            //insert data
            $leave->insert_leave($leave_date,$emp_id,$type,$leave_time,$reason);


        }

        static function cancel_leave($view_name){

            $leave=new Emp_Leave();

            $employeeid = $_SESSION["uname"];
            
             // echo($_GET['emp_id']);
             //echo ($employeeid);
             $leave_date = $_GET['leave_date'];
             //echo ($leave_date);

             $leave->delete_leave($employeeid,$leave_date);
             $array=$leave->get_detail($employeeid);
             //var_dump($array);
             require_once("./views/$view_name.php");

        }

        //function to view no of employee leave
        public function no_of_leave($view_name){
            $id = $_SESSION["uname"];

            //create employee object
            $no_of_leave=new Emp_Leave();
            $array=$no_of_leave->view_no_of_leave($id);
            //var_dump($array);

            require_once("./views/$view_name.php");

        }





    }

?>

