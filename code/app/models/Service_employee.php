<?php
    include_once 'Model.php';

    class Service_employee extends Model{

        //automatically create db object
        public function __construct(){
                //$db=new Database();
        }

        //checking credentials by searching through the service_employee table
        function check_credentials($uname,$pwd){

            //echo session var
            //echo "uname is " . $_SESSION["uname"] . ".<br>";
            //echo "pwd is " . $_SESSION["pwd"] . ".";
            
            //assign connectivity to a variable
            $conn=Database::conn();
               
            $query="SELECT emp_id FROM service_employee WHERE (emp_id='$uname' OR email='$uname') AND password='$pwd'";
            $result= mysqli_query($conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get a count of rows returning
            $count = mysqli_fetch_array($result);
            //print_r($count);

            //if array is not empty that means credentials are correct
            if($count){
                //echo("go to view");
                return True;
            }
            
        }
        function insert_record($first_name,$last_name,$address,$e_mail,$home_tel_no,$mobile_tel_no,$nic_no,$password){
            
            //assign connectivity to a variable
            $conn=Database::conn();

            //get date of today for registered date
            $today=date('Y-m-d');
            // echo($today);
            
            $query_emp="INSERT INTO service_employee(first_name,last_name,address,email,home_tel_no,mobile_tel_no,NIC_no,password,enrollment_date) 
            VALUES('$first_name','$last_name','$address','$e_mail','$home_tel_no','$mobile_tel_no','$nic_no','$password','$today');";
            
            //echo($query);

            $result= mysqli_query($conn,$query_emp);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
        }

        // get details for employee table
        // function view_emp_list(){
        //     //assign connectivity to a variable
        //     $conn=Database::conn();

        //     $query = $this->db->query("SELECT * from items");
        //     return $query->result();
        // }


    }

    //function which gets employee details on employee id parameter
    function get_employee($employeeid){
        
        //assign connectivity to a variable
        $conn=Database::conn();
        
        $query="SELECT* FROM service_employee WHERE (emp_id='$employeeid')";
        $result= mysqli_query($conn,$query);
        
        //debugging
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }

        //get details into an associative array
        $details = mysqli_fetch_array($result);
        //print_r($details);

        //Return array to be fetched and displayed
        if($details){
            //echo("go to view");
            return($details);
        } 
    }

    function delete_record($employeeid){
        
        //assign connectivity to a variable
        $conn=Database::conn();
        
        $query="DELETE FROM service_employee WHERE (emp_id='$employeeid')";
        $result= mysqli_query($conn,$query);
        
        //debugging
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }else{
            return True;
            
        }
    }
?>