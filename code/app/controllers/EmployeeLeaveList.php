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
        $leave_status = $_GET['leave_status'];;
        //create employee leave object
        $leave = new Emp_leave();
        $leave->update_leaves_status($emp_id, $leave_date, $leave_status);
        //var_dump($array);
        $array = $leave->get_pending();
        // $array = NULL;
        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

        
    }

?>

