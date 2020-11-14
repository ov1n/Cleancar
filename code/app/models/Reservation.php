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
            echo($added_date);
            //FIX BY ADDING DURATION
            $query="INSERT INTO reservation (`is_advance_paid`, `cust_id`, `added_date`, `service_id`) VALUES ('0', $cust_id,'$added_date',$service_id);";
            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
        }
    }