<?php
    include_once 'Model.php';

    class Timetable extends Model{

        function get_timetable(){
            //assign connectivity to a variable
            $conn=Database::conn();
            $today=date('Y-m-d');

            //get each record
            $query="SELECT reservation.reservation_id AS reservation_id, is_advance_paid, reservation.cust_id AS cust_id, 
            reservation_time_slot.date AS date, service_type.type_name AS servise_type, service_type.lift_no AS lift_no, 
            time_slot.start_time As start_time 
            FROM reservation, service_type, time_slot , reservation_time_slot 
            WHERE reservation.service_id = service_type.type_id 
            AND reservation_time_slot.timeslot_no = time_slot.timeslot_no 
            AND date >= $today
            GROUP BY reservation.reservation_id
            ";

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

        function get_cust($reservation_id){
            //assign connectivity to a variable
            $conn=Database::conn();
            

            //get each record
            $query=" SELECT reservation.reservation_id AS reservation_id , reservation.cust_id AS cust_id, customer.mobile_tel_no AS tp_no
                     FROM customer, reservation 
                     WHERE reservation.reservation_id = $reservation_id AND customer.cust_id = reservation.cust_id ";

            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            
            
            //get leaves in an array
            $reservation = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($leaves);

            //if array is not empty that means leave details are returning
            if($reservation){
                return($reservation); 
            }
        }

        function get_reservation_details($cust_id){
            //assign connectivity to a variable
            $conn=Database::conn();
            

            //get each record
            $query="SELECT customer.cust_id AS cust_id, CONCAT(customer.first_name, ' ', customer.last_name) AS name , customer.address , customer.home_tel_no AS home_tp, customer.mobile_tel_no AS mobile_tp, vehicle.vehicle_num AS vehicle_num, vehicle.vehicle_category AS vehicle_category
                    FROM customer, vehicle
                    WHERE customer.cust_id = $cust_id AND customer.cust_id = vehicle.cust_id ";

            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            
            
            //get leaves in an array
            $array = mysqli_fetch_array($result);
            //var_dump($leaves);

            //if array is not empty that means leave details are returning
            if($array){
                return($array); 
            }
        }

        function get_bill_details($reservation_id){
            //assign connectivity to a variable
            $conn=Database::conn();
            

            //get each record
            $query="SELECT reservation.reservation_id AS reservation_id, 
            is_advance_paid, service_type.type_name AS service_type, 
            CONCAT(customer.first_name, ' ', customer.last_name) AS name, customer.mobile_tel_no AS tp_no, 
            vehicle.vehicle_num, vehicle.vehicle_category 
            FROM reservation, vehicle, customer, service_type 
            WHERE reservation.reservation_id = $reservation_id AND customer.cust_id = vehicle.cust_id 
            AND reservation.cust_id = customer.cust_id 
            AND reservation.service_id = service_type.type_id
            GROUP BY reservation.reservation_id";

            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            
            
            //get leaves in an array
            $array = mysqli_fetch_array($result);
            //var_dump($leaves);

            //if array is not empty that means leave details are returning
            if($array){
                return($array); 
            }
        }

    }