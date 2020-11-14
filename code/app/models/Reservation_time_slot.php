<?php
    include_once 'Model.php';

    class Reservation_time_slot extends Model{

        //automatically create db object
        public function __construct(){
                //$db=new Database();
        }

        function  insert($res_id,$timeslot_no,$date){

            //assign connectivity to a variable
            $conn=Database::conn();
               
            $query="INSERT INTO reservation_time_slot('reservation_id','timeslot_no','date') VALUES('$res_id','$timeslot_no','$date')";
            $result= mysqli_query($conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }else{
                return $result;
            }
        }
    }

?>