<?php

    //include Emp_Leave class
    include './models/Emp_leave.php';

    class EmployeeLeaveList extends Controller{

        public static function create_view($view_name){

            //create employee leave object
            $leave=new Emp_leave();
            $array=$leave->get_pending();
            //var_dump($array);

            require_once("./views/$view_name.php");
        }


    }

?>
