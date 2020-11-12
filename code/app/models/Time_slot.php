<?php
    include_once 'Model.php';

    class Time_slot extends Model{
        
        //automatically create db object
        public function __construct(){
            //$db=new Database();
        }

        //get timeslots for required time slot
        function get_range($start_time,$end_time){

            //assign connectivity to a variable
            $conn=Database::conn();

            $query="SELECT timeslot_no FROM time_slot.start_time>=$start_time AND
                    time_slot.end_time<=$end_time AND
                    lift_no='1';";
            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            
            //echo($cust_id);
            return $r;
        }
    }