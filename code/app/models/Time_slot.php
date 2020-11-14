<?php
    include_once 'Model.php';

    class Time_slot extends Model{
        
        //automatically create db object
        public function __construct(){
            //$db=new Database();
        }

        //get timeslots for required time slot
        function get_range($start_time,$duration){

            //assign connectivity to a variable
            $conn=Database::conn();

            //calculate the end time
            $query1="SELECT end_time
                    FROM time_slot
                    WHERE ADDTIME('$start_time', '$duration')=end_time
                    AND lift_no=1; ";
            
            $result1= mysqli_query($conn,$query1);

            if (!$result1) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //make temporary one elem array to get end time 
            $temp = mysqli_fetch_array($result1);
            $end_time=array_shift( $temp );
            echo($end_time);


            //2nd query to get range of timeslots from the endtime
            $query2="SELECT timeslot_no FROM time_slot
                    WHERE time_slot.start_time>='$start_time' AND
                    time_slot.end_time<='$end_time' AND
                    lift_no='1';";
            $result2= mysqli_query($conn,$query2);
            

            //debugging
            if (!$result2) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get necessary elements in an array
            $r = $result2->fetch_all(MYSQLI_ASSOC);
            //$r = mysqli_fetch_array($result2);
            
            //echo($cust_id);
            return $r;
        }
    }