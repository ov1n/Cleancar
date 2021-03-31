<?php

    //include employee class
    include './models/Service_employee.php';

    class EmployeeList extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create employee object
            $emp=new Service_employee();
            $array=$emp->get_all();
            //var_dump($array);
            
            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        
        public static function create_new_view($view_name, $role)
        {
        $emp_id = Session::get("uname");
        //create employee object
        $employee = new Service_employee();

        $array = $employee->get_emp_data($emp_id);
        //var_dump($array['no_of_leaves_fullday']);


        if (
            Session::get("role") == $role
        ) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
        }

        //function to delete employee
        public static function delete($view_name){
            // echo($_GET['emp_id']);
            $employeeid = $_GET['emp_id'];
            
            $emp=new Service_employee();
            $emp->delete_record($employeeid);
            $array=$emp->get_all();
            //var_dump($array);
            require_once("./views/$view_name.php");
            
        }

         public static function search($view_name, $role)
    {
        $search_emp_key = $_POST['search'];
        $employee = new Service_employee();
        $array = $employee->get_search_emp_data($search_emp_key);
        if ($array) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/$view_name.php");
            Session::set("serh_error", "search_error");
        }
    }
        
    }