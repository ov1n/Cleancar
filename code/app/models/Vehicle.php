<?php
    include_once 'Model.php';

    class Vehicle extends Model{

        //automatically create db object
        public function __construct(){
            //$db=new Database();
        }

        //get timeslots for required time slot
        function get_details($cust_id){

            //assign connectivity to a variable
            $conn=Database::conn();

            //calculate the end time
            $query="SELECT vehicle_num,vehicle_category 
                    FROM vehicle
                    WHERE cust_id='$cust_id';";
            
            $result= mysqli_query($conn,$query);

            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            $r = mysqli_fetch_assoc($result);

            //var_dump($r);
            return $r;
        }

    }
?>