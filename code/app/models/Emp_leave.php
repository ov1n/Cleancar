<?php
    include_once 'Model.php';

    class Emp_leave extends Model{

        //automatically create db object
        public function __construct(){
                //$db=new Database();
        }

        //getting wanted details of leaves from database
        function get_detail($id){

            //assign today date to a variable
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
            
            
            //get leaves in an array
            $leaves = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($leaves);

            //if array is not empty, leave details are returning
            if($leaves){
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

        
        //getting all details of employee leaves have to accept
        function get_pending(){

            $today=date('Y-m-d');
            //assign connectivity to a variable
            $conn=Database::conn();
               
            $query="SELECT emp_leave.emp_id,first_name,last_name,leave_date,type,leave_time,reason, is_accepted FROM emp_leave INNER JOIN service_employee ON emp_leave.emp_id = service_employee.emp_id WHERE NOT emp_leave.is_accepted ='accepted'";
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
        
    }

?>