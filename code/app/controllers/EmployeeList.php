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
            
            if(Session::get("role")=='manager'){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        function load_employees(){

            
        }

        //function to view employee
        public function view($view_name){

            $empid=$_GET['emp_id'];
            $emp=new Service_employee();
            $array=$emp->get_employee($empid);
            //var_dump($array);
            require_once("./views/$view_name.php");
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
        
    }