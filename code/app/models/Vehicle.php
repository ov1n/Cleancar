<?php
    include_once 'Model.php';

    class Vehicle extends Model{

        //get timeslots for required time slot
        function get_details($cust_id){

            //calculate the end time
            $query="SELECT vehicle_num,vehicle_category 
                    FROM vehicle
                    WHERE cust_id='$cust_id';";
            
            $result= mysqli_query($this->conn,$query);

            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }

            $r = mysqli_fetch_assoc($result);

            //var_dump($r);
            return $r;
        }

    }
?>