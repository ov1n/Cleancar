<?php

    include_once 'Model.php';

    class Service_employee extends Model{

        //getting all details of employees
        function get_all(){

            //echo session var
            //echo "uname is " . $_SESSION["uname"] . ".<br>";
            //echo "pwd is " . $_SESSION["pwd"] . ".";
               
            $query="SELECT* FROM service_employee";
            $result= mysqli_query($this->conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }

            //get employees in an array
            $employees = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($employees);

            //if array is not empty that means employees are returning
            if($employees){
                //echo("go to view");
                return($employees);
            }

        }

        //function which gets a selected employee from ID
        function get_employee($employeeid){
            
            //$query="SELECT* FROM service_employee WHERE emp_id='$employeeid';";
            //$result= mysqli_query($this->conn,$query);
            $condition = "WHERE emp_id='$employeeid';";
            $result = $this->select("*" ,'service_employee',$condition);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
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

        //checking credentials by searching through the service_employee table
        function check_credentials($uname,$pwd){

            //echo session var
            //echo "uname is " . $_SESSION["uname"] . ".<br>";
            //echo "pwd is " . $_SESSION["pwd"] . ".";
               
            $query="SELECT emp_id FROM service_employee WHERE (emp_id='$uname' OR email='$uname') AND password='$pwd'";
            $result= mysqli_query($this->conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
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
        function insert_record($first_name,$last_name,$address,$e_mail,$home_tel_no,$mobile_tel_no,$nic_no,$gender,$dob,$password){

            //get date of today for registered date
            $today=date('Y-m-d');
            // echo($today);
            
            //$query_emp="INSERT INTO service_employee(first_name,last_name,address,email,home_tel_no,mobile_tel_no,NIC_no,gender,dob,password,enrollment_date) 
            //VALUES('$first_name','$last_name','$address','$e_mail','$home_tel_no','$mobile_tel_no','$nic_no','$gender','$dob','$password','$today');";
            
            //echo($query);
            $columns=array('first_name','last_name','address','email','home_tel_no','mobile_tel_no','NIC_no','gender','dob','password','enrollment_date');
            $values=array("$first_name","$last_name","$address","$e_mail","$home_tel_no","$mobile_tel_no","$nic_no","$gender","$dob","$password","$today");

            $this->insert('service_employee',$columns,$values);
        }

        // get details for employee table
        // function view_emp_list(){
        //     //assign connectivity to a variable
        //     $conn=Database::conn();

        //     $query = $this->db->query("SELECT * from items");
        //     return $query->result();
        // }



        function delete_record($employeeid){
            
            //$query="DELETE FROM service_employee WHERE (emp_id='$employeeid')";
            
            $condition="WHERE (emp_id='$employeeid')";

            $this->delete('service_employee',$condition);
        }

    }
?>