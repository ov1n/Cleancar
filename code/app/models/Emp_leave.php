<?php
    include_once 'Model.php';

    class Emp_leave extends Model{

        //automatically create db object
        public function __construct(){
                //$db=new Database();
        }

        //getting all details of employees
        function get_detail($id){

            $today=date('Y-m-d');
            //assign connectivity to a variable
            $conn=Database::conn();
               
            $query="SELECT leave_date,type,leave_time,reason FROM emp_leave WHERE emp_id = '$id' AND is_accepted = 'accepted' AND leave_date > '$today'";
            $result= mysqli_query($conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get employees in an array
            $leaves = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($employees);

            //if array is not empty that means employees are returning
            if($leaves){
                //echo("go to view");
                return($leaves);
            }

        }


        function insert_leave($leave_date,$emp_id,$type,$leave_time,$reason){
            
            //assign connectivity to a variable
            $conn=Database::conn();

            
            $query_leave="INSERT INTO emp_leave(leave_date,emp_id,type,leave_time,reason) 
            VALUES('$leave_date','$emp_id','$type','$leave_time','$reason')";
            
            //echo($query);

            $result= mysqli_query($conn,$query_leave);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
        }

        
    }

?>