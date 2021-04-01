<?php
    include_once 'Model.php';

    class Reservation extends Model{

        //insert into table
        function insert_reservation($is_advance_paid,$cust_id,$added_date,$service_id){

            //assign connectivity to a variable
            //echo($added_date);
            //FIX BY ADDING 
            $this->insert('reservation',array("is_advance_paid", "cust_id", "added_date", "service_id"),array('0', $cust_id,$added_date,$service_id));
            //$query="INSERT INTO reservation (`is_advance_paid`, `cust_id`, `added_date`, `service_id`) VALUES ('0', $cust_id,'$added_date',$service_id);";
            //$result= mysqli_query($conn,$query);
            //debugging
            

            //if no error get the reservation id from that table
            $fields=array('first_name','last_name','email','mobile_tel_no');
            $condition="WHERE TABLE_SCHEMA = 'cleancar' AND TABLE_NAME = 'reservation';";
            $result2= $this->select('AUTO_INCREMENT','INFORMATION_SCHEMA.TABLES',$condition);
            //$query2="SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'cleancar' AND TABLE_NAME = 'reservation'";

            //get the sole element reservation id and return it 
            $r = mysqli_fetch_array($result2);
            $res_id=array_shift( $r );
            echo($res_id);
            return $res_id;
        }

        //function to get reservations for given customer id WITH JOINING RESERVATION TIME_SLOT FOR DATE
        function select_reservation($cust_id){
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
                    GROUP BY reservation.reservation_id";

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

        //function to get availabel slots in reservation
        function get_reserved_slots($date,$service_name,$start_time){

            $query="SELECT reservation_time_slot.reservation_id,time_slot.timeslot_no
            FROM reservation,reservation_time_slot,time_slot,service_type
            WHERE reservation_time_slot.date='$date' AND
            service_type.type_id=reservation.service_id AND
            service_type.type_name='$service_name' AND
            time_slot.start_time='$start_time' AND
            time_slot.timeslot_no=reservation_time_slot.timeslot_no AND
            reservation.reservation_id=reservation_time_slot.reservation_id";

            //echo($query);
            $result = mysqli_query($this->conn, $query);
            $details =$result -> fetch_all(MYSQLI_ASSOC);
                    
            $slots=array();
            if($details){

                for($i=0;$i<sizeof($details);$i++){
                    array_push($slots,$details[$i]['reservation_id']);
                }
                //print_r($slots);
                //Return count of array
                return(count($slots));
            }else{
                return 0;
            }
            
        }

        //function to cancel reservation
        function cancel_reservation($res_id){

            $query="UPDATE reservation SET is_advance_paid=2 WHERE reservation_id='$res_id'";

            $result = mysqli_query($this->conn, $query);

            return $result;

        }

    }