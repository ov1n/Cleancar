<?php
    include_once 'Model.php';

    class Reservation_time_slot extends Model{


        function  insert($res_id,$timeslot_no,$date){
                        
            //query 
            $query="INSERT INTO `reservation_time_slot` (`reservation_id`, `timeslot_no`, `date`) VALUES ('$res_id', '$timeslot_no', '$date')";
            $result= mysqli_query($this->conn,$query);
            //echo($query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }else{
                return $result;
            }
        }

        //to delete 
        function delete_slots($res_id){

            $condition="WHERE reservation_id='$res_id';";
            $result=$this->delete('reservation_time_slot',$condition);

            return $result;

        }
        
    }

?>