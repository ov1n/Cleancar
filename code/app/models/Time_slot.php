<?php
    include_once 'Model.php';

    class Time_slot extends Model{
                
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

        //getting all details of leaves
        function get_detail(){

            
            //assign connectivity to a variable
            $conn=Database::conn();
               

            $query="SELECT * FROM time_slot";

            $result= mysqli_query($conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            
            
            //get leaves in an array
            $timeslot = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($leaves);

            //if array is not empty that means leave details are returning
            if($timeslot){
                return($timeslot); 
            }

        }

        function insert_timeslot($start_time,$end_time,$lift_no){            
        
            $columns=array('start_time','end_time','lift_no');
            $values=array("$start_time","$end_time","$lift_no");

            $this->insert('time_slot',$columns,$values);
            
            //echo($query);
            
        }

        function update_timeslot($start_time,$end_time){

            //get date of today for registered date

            $columns=array('start_time','end_time');
            $values=array("$start_time","$end_time");

            $this->update('time_slot',$columns,$values);
            
            
            
        }


    }