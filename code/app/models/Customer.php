<?php
    include 'Model.php';

    class Customer extends Model{

        //automatically create db object
        public function __construct(){
                //$db=new Database();
        }

        //checking credentials by searching through the customer table
        function check_credentials($uname,$pwd){
            
            //assign connectivity to a variable
            $conn=Database::conn();
               
            $query="SELECT cust_id FROM customer WHERE (cust_id='$uname' OR 'e-mail'='$uname') AND password='$pwd'";
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
                echo("go to view");
            }
        }

        //function to insert data into table customer
        function insert_record($first_name,$last_name,$vehicle_number,$address,$e_mail,$password,$mobile_tel_no,$home_tel_no){
            
            //assign connectivity to a variable
            $conn=Database::conn();

            $query="INSERT INTO customer(first_name,last_name,vehicle_number,address,e_mail,password,mobile_tel_no,home_tel_no) VALUES($first_name,$last_name,$vehicle_number,$address,$e_mail,$password,$mobile_tel_no,$home_tel_no)";

        }
        
    }
?>