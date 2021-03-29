<?php
    include_once 'Model.php';

    class Timetable extends Model{

        function get_timetable(){
            //assign connectivity to a variable
            $conn=Database::conn();
            

            //get each record
            $query="SELECT reservation.reservation_id AS reservation_id, is_advance_paid, reservation.cust_id AS cust_id,
            service_type.type_name AS servise_type, service_type.lift_no AS lift_no, time_slot.start_time As start_time 
            FROM reservation, service_type, time_slot , reservation_time_slot 
            WHERE service_type.lift_no = time_slot.lift_no AND reservation.service_id = service_type.type_id 
            GROUP BY reservation.reservation_id";

            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            
            
            //get leaves in an array
            $timetable = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($leaves);

            //if array is not empty that means leave details are returning
            if($timetable){
                return($timetable); 
            }
        }

    }