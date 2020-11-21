<?php

    //include employee class
    include './models/Service_employee.php';

    class EmployeeList extends Controller{

        //overloading create view
        public static function create_view($view_name){

            //create employee object
            $emp=new Service_employee();
            $array=$emp->get_all();
            //var_dump($array);

            require_once("./views/$view_name.php");
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
        public function delete(){
            echo($_GET['emp_id']);
        }
        
    }