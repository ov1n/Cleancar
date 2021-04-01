<?php

    //include Time_slot class
    include './models/Time_slot.php';

    class Timeslot extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create employee object
            $timeslot=new time_slot();
            $array=$timeslot->get_detail();

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

        public function view($view_name){

            $timeslot = $_GET['timeslot_no'];

            $selected_timeslot = new time_slot();

            $array=$selected_timeslot->get_timeslot($timeslot);
            require_once("./views/$view_name.php");
        }

        static function update(){
            
             $updated_timeslot=new time_slot();
             //get each field from form
             $start_time=$_POST['new_start_time'];
             $end_time=$_POST['new_end_time'];
             $timeslot_no=$_POST['timeslot_no'];
           
             //update data
             $updated_timeslot->update_timeslot($start_time,$end_time,$timeslot_no);

             $timeslot=new time_slot();

            $array=$timeslot->get_detail();

            if(Session::get("role")=='manager'){
                require_once("./views/timeslot_list.php");
            }

            else{
                require_once("./views/error_403.php");
            }


         }


        public static function delete($view_name){
        
        $timeslot = $_GET['timeslot_no'];

        $delete_timeslot = new time_slot();
        $delete_timeslot->delete_timeslot($timeslot);

        $timeslot=new time_slot();

        $array=$timeslot->get_detail();

        if(Session::get("role")=='manager'){
            require_once("./views/timeslot_list.php");
        }

        else{
            require_once("./views/error_403.php");
        }
        
    }


      public static function search($view_name, $role)
    {

        $search_key = $_POST['search'];
        $timeslot = new time_slot();
        $array = $timeslot->get_search_data($search_key);
        if ($array) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/$view_name.php");
            Session::set("serh_error", "search_error");
        }
    }

    }

?>

