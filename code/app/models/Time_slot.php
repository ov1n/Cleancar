<?php
    include_once 'Model.php';

    class Time_slot extends Model{
        
        function get_min(){

            $result= $this->select('MIN(start_time)','time_slot','time_slot','');

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            $start_time=array_shift( $r );
            
            //echo($start_time);
            return $start_time;
        }

        function get_max(){

            $result= $this->select('MAX(start_time)','time_slot','time_slot','');

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            $end_time=array_shift( $r );
            
            //echo($end_time);
            return $end_time;
        }

        function add_slots($curr,$inc){
            
            $sql="SELECT ADDTIME('$curr','$inc');";

            $result=mysqli_query($this->conn,$sql);

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            $new_time=array_shift( $r );

            //echo($new_time);
            return $new_time;
        }
        
        //get timeslots for required time slot
        function get_range($start_time,$duration,$res_date){

            //calculate the end time
            $query1="SELECT end_time
                    FROM time_slot
                    WHERE ADDTIME('$start_time', '$duration')=end_time
                    ";
            
            echo($query1);

            $result1= mysqli_query($this->conn,$query1);

            if (!$result1) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }

            //make temporary one elem array to get end time 
            $temp = mysqli_fetch_array($result1);
            $end_time=array_shift( $temp );
            //echo($end_time);


            //2nd query to get range of timeslots from the endtime
            $query2="SELECT timeslot_no
                    FROM time_slot
                    WHERE timeslot_no NOT IN (SELECT DISTINCT time_slot.timeslot_no
                    FROM time_slot,reservation_time_slot
                    WHERE time_slot.start_time>='$start_time' AND
                    time_slot.end_time<='$end_time' AND
                    time_slot.timeslot_no=reservation_time_slot.timeslot_no AND 
                    reservation_time_slot.date='$res_date') AND 
                    time_slot.start_time>='$start_time' AND
                    time_slot.end_time<='$end_time'
                    GROUP BY start_time;";
            
            //echo($query2);

            $result2= mysqli_query($this->conn,$query2);

            //debugging
            if (!$result2) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }
            $r = $result2->fetch_all(MYSQLI_ASSOC);
            return $r;
        }

        //getting all details of leaves
        function get_detail(){

            $result= $this->select('*','time_slot','');
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }
            
            
            //get leaves in an array
            $timeslot = $result->fetch_all(MYSQLI_ASSOC);

            //if array is not empty that means leave details are returning
            if($timeslot){
                return($timeslot); 
            }

        }

        function insert_timeslot($start_time,$end_time,$lift_no){            
        
            $columns=array('start_time','end_time','lift_no');
            $values=array("$start_time","$end_time","$lift_no");

            $this->insert('time_slot',$columns,$values);    
        }

        function delete_timeslot($timeslot_no){

            $condition = "WHERE timeslot_no='$timeslot_no'";

            $this->delete('time_slot', $condition);
        }


        function get_timeslot($timeslot_no){

        $condition = "WHERE timeslot_no='$timeslot_no';";
        $result = $this->select("*", 'time_slot', $condition);

        //get details into an associative array
        $details = mysqli_fetch_array($result);

        if ($details) {
            return ($details);
        }
        }

        function get_search_data($search_key)
        {
            $condition = "WHERE (timeslot_no ='$search_key' OR start_time='$search_key' OR lift_no='$search_key' OR end_time='$search_key');";
            $result = $this->select("*", 'time_slot', $condition);

            //get details into an associative array
            $details = $result->fetch_all(MYSQLI_ASSOC);

            //Return array to be fetched and displayed
            if ($details) {
                return ($details);
            }
        }

        function update_timeslot($start_time,$end_time,$timeslot_no){

            $u_time_slot = "UPDATE time_slot SET start_time='$start_time',end_time='$end_time' WHERE timeslot_no='$timeslot_no';";
            $result = mysqli_query($this->conn, $u_time_slot);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }
          
        }


    }