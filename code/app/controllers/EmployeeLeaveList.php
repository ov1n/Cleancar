<?php

    //include Emp_Leave class
    include './models/Emp_leave.php';

    class EmployeeLeaveList extends Controller{

        public static function create_view($view_name,$role){

            //create employee leave object
            $leave=new Emp_leave();
            $array=$leave->get_pending();
            //var_dump($array);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        public static function update_leave_status($view_name, $role)
        {
        $emp_id = $_GET['emp_id'];
        $leave_date = $_GET['leave_date'];
        $leave_status = $_GET['leave_status'];
        $leave_type = $_GET['leave_type'];
        //create employee leave object
        $leave = new Emp_leave();
        $leave->update_leaves_status($emp_id, $leave_date, $leave_status, $leave_type);

        //var_dump($array);
        $array = $leave->get_pending();
        // $array = NULL;
        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

     public static function leave_cancel($view_name, $role)
    {
        $leave = new Emp_leave();
        $array = $leave->get_accepted_leaves();

        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

     public static function delete_leaves($view_name, $role)
    {
        $leave = new Emp_leave();
        $leave_date = $_GET['leave_date'];
        $employeeid = $_GET['emp_id'];
        $leave_status = 'Rejected';
        $leave_type = $_GET['type'];
        $update = $leave->update_cancel_leaves_status($employeeid, $leave_date, $leave_status, $leave_type);
        $array = $leave->get_accepted_leaves();

        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

        
    }

?>

