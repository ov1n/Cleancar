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

        //function to get reservations for given customer id WITH JOINING RESERVATION TIME_SLOT FOR DATE
        function select($cust_id){
            //assign connectivity to a variable
            $conn=Database::conn();
            //echo($added_date);

            //get each record
            //ADD TIME
            $query="SELECT DISTINCT(reservation.reservation_id),date,type_name,start_time,price,is_advance_paid
                    FROM reservation
                    INNER JOIN reservation_time_slot
                    ON reservation.reservation_id=reservation_time_slot.reservation_id
                    INNER JOIN time_slot
                    ON reservation_time_slot.timeslot_no=time_slot.timeslot_no
                    INNER JOIN service_type
                    ON reservation.service_id=service_type.type_id
                    WHERE reservation.cust_id='$cust_id' 
                    AND start_time='08:00:00'";

            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            
            
            //get leaves in an array
            $reservations = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($leaves);

            //if array is not empty that means leave details are returning
            if($reservations){
                return($reservations); 
            }
        }

    }