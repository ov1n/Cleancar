<?php
    include_once 'Model.php';

    class Emp_leave extends Model{

        //automatically create db object
       // public function __construct(){
                //$db=new Database();
        //}

        //getting wanted details of leaves from database
        function get_detail($id){

            //assign today date to a variable
            $today=date('Y-m-d');
               
            $condition = "WHERE emp_id = '$id' AND  NOT is_accepted = 'Rejected' AND leave_date > '$today';";
            
            $result= $this->select("*",'emp_leave',$condition);
            
            
            //get leaves in an array
            $leaves = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($leaves);

            //if array is not empty, leave details are returning
            if($leaves){
                return($leaves); 
            }

        }

        function get_all_leaves($id){

            //assign today date to a variable
            // $today=date('Y-m-d');
               
            $condition = "WHERE emp_id = '$id' AND is_accepted = 'Accepted';";
            
            $result= $this->select("leave_date",'emp_leave',$condition);
            
            
            //get leaves in an array
            $leaves = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($leaves);

            //if array is not empty, leave details are returning
            if($leaves){
                return($leaves); 
            }

        }

        function insert_leave($leave_date,$emp_id,$type,$leave_time,$reason){            
            $leave_status="Pending";

            $columns=array('leave_date','emp_id','type','leave_time','reason','is_accepted');
            $values=array("$leave_date","$emp_id","$type","$leave_time","$reason","$leave_status");

            $this->insert('emp_leave',$columns,$values);
            
            //echo($query);

            
        }

        
        //getting all details of employee leaves have to accept
        function get_pending(){

            $today=date('Y-m-d');
            //assign connectivity to a variable
            $query="SELECT emp_leave.emp_id,first_name,last_name,leave_date,type,leave_time,reason, is_accepted FROM emp_leave INNER JOIN service_employee ON emp_leave.emp_id = service_employee.emp_id WHERE NOT emp_leave.is_accepted ='accepted' AND NOT emp_leave.is_accepted ='rejected' AND leave_date > '$today';";
            $result= mysqli_query($this->conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
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

        function delete_leave($id,$leave_date,$leave_status,$leave_type){
                        
            $condition="WHERE emp_id='$id' AND leave_date='$leave_date'";
            $this->delete('emp_leave',$condition);

            if ($leave_status == 'Accepted') {

                if ($leave_type == 'Full_leave') {
    
                    $update_count = "UPDATE service_employee SET no_of_leaves_fullday = no_of_leaves_fullday - 1 WHERE emp_id='$id';";
                    $result = mysqli_query($this->conn, $update_count);
                
                } elseif ($leave_type == 'half_day') {
    
                    $update_count = "UPDATE service_employee SET no_of_leaves_halfday = no_of_leaves_halfday - 1 WHERE emp_id='$id';";
                    $result = mysqli_query($this->conn, $update_count);
                
                } else {
    
                    $update_count = "UPDATE service_employee SET no_of_leaves_short = no_of_leaves_short - 1 WHERE emp_id='$id';";
                    $result = mysqli_query($this->conn, $update_count);
                }
            }

        }

        function update_leaves_status($employeeid, $leave_date, $leave_status, $leave_type)
         {
        //$condition = "WHERE (emp_id='$employeeid') AND (leave_date='$leave_date')";
        $rec_update = "UPDATE emp_leave SET is_accepted='$leave_status' WHERE (emp_id='$employeeid') AND (leave_date='$leave_date');";
        $result = mysqli_query($this->conn, $rec_update);

        if ($leave_status == 'Accepted') {

            if ($leave_type == 'Full_leave') {

                $rec_update = "UPDATE service_employee SET no_of_leaves_fullday = no_of_leaves_fullday + 1 WHERE emp_id='$employeeid';";
                $up_result = mysqli_query($this->conn, $rec_update);
            
            } elseif ($leave_type == 'half_day') {

                $rec_update = "UPDATE service_employee SET no_of_leaves_halfday = no_of_leaves_halfday + 1 WHERE emp_id='$employeeid';";
                $up_result = mysqli_query($this->conn, $rec_update);
            
            } else {

                $rec_update = "UPDATE service_employee SET no_of_leaves_short = no_of_leaves_short + 1 WHERE emp_id='$employeeid';";
                $up_result = mysqli_query($this->conn, $rec_update);
            }
        }

      
        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->conn));
            exit();
        }
        }

        function view_no_of_leave($id){
           
            $condition = "WHERE emp_id = '$id' OR email= '$id'";
            
            $result= $this->select("*",'service_employee',$condition);
            
            
            //get leaves in an array
            $leaves = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($leaves);

            //if array is not empty, leave details are returning
            if($leaves){
                return($leaves); 
            }


        }

    function get_accepted_leaves()
        {
        $tomorrow = date("Y-m-d", strtotime('+1 day'));
        $condition = "WHERE is_accepted='Accepted' AND leave_date >='$tomorrow' ;";

        $columns = array('leave_date', 'emp_id', 'type', 'leave_time', 'reason');
        $result = $this->select($columns, 'emp_leave', $condition);

        //get leaves in an array
        $data = $result->fetch_all(MYSQLI_ASSOC);

        if ($data) {
            return ($data);
        }
        }


    function update_cancel_leaves_status($employeeid, $leave_date, $leave_status, $leave_type)
        {


        //$condition = "WHERE (emp_id='$employeeid') AND (leave_date='$leave_date')";
        $rec_update = "UPDATE emp_leave SET is_accepted='$leave_status' WHERE (emp_id='$employeeid') AND (leave_date='$leave_date') AND (type='$leave_type');";
        $result = mysqli_query($this->conn, $rec_update);

        if ($leave_status == 'Rejected') {

            if ($leave_type == 'Full_leave') {

                $rec_update = "UPDATE service_employee SET no_of_leaves_fullday = no_of_leaves_fullday - 1 WHERE emp_id='$employeeid';";
                $up_result = mysqli_query($this->conn, $rec_update);
            } elseif ($leave_type == 'half_day') {

                $rec_update = "UPDATE service_employee SET no_of_leaves_halfday = no_of_leaves_halfday - 1 WHERE emp_id='$employeeid';";
                $up_result = mysqli_query($this->conn, $rec_update);
            } else {

                $rec_update = "UPDATE service_employee SET no_of_leaves_short = no_of_leaves_short - 1 WHERE emp_id='$employeeid';";
                $up_result = mysqli_query($this->conn, $rec_update);
            }
        }


        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->conn));
            exit();
        }
        }

        
        
    }

?>
