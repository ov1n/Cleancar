<?php

    //include Time_slot class
    include './models/Time_slot.php';

    class Timeslot extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create employee object
            $timeslot=new time_slot();
            $array=$timeslot->get_detail();
            //var_dump($array);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        static function add_timeslot(){

            $new_timeslot=new time_slot();
            
            //get each field from form
            $start_time=$_POST['start_time'];
            $end_time=$_POST['end_time'];
            $lift_no=$_POST['lift_no'];
           
            //insert data
            $new_timeslot->insert_timeslot($start_time,$end_time,$lift_no);


        }

        static function update(){

            $updated_timeslot=new time_slot();
            
            //get each field from form
            $start_time=$_POST['start_time'];
            $end_time=$_POST['end_time'];
           
            //update data
            $updated_timeslot->update_timeslot($start_time,$end_time);


        }

        public static function delete($view_name){
        
        $timeslot = $_GET['timeslot_no'];

        $delete_timeslot = new time_slot();
        $delete_timeslot->delete_timeslot($timeslot);
        
        }

    }

?>

