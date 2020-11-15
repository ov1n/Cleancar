<?php
    include_once 'Model.php';

    class Reservation extends Model{

        //automatically create db object
        public function __construct(){
                //$db=new Database();
        }

        //insert into table
        function insert($is_advance_paid,$cust_id,$added_date,$service_id){

            //assign connectivity to a variable
            $conn=Database::conn();
            //echo($added_date);
            //FIX BY ADDING DURATION
            $query="INSERT INTO reservation (`is_advance_paid`, `cust_id`, `added_date`, `service_id`) VALUES ('0', $cust_id,'$added_date',$service_id);";
            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //if no error get the reservation id from that table
            $query2="SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'cleancar' AND TABLE_NAME = 'reservation'";

            $result2= mysqli_query($conn,$query2);

            //debugging
            if (!$result2) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get the sole element reservation id and return it 
            $r = mysqli_fetch_array($result2);
            $res_id=array_shift( $r );

            return $res_id;
        }
    }