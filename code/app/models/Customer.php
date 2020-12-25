<?php
    include_once 'Model.php';

    class Customer extends Model{

        //automatically create db object

        //get autofill data in reservation form
        function getdata($cust_id){
            
            //assign connectivity to a variable

            //$query="SELECT first_name,last_name,email,mobile_tel_no FROM customer WHERE (cust_id='$cust_id' OR email='$cust_id')";
            $fields=array('first_name','last_name','email','mobile_tel_no');
            $condition="WHERE (cust_id='$cust_id' OR email='$cust_id')";
            $result= $this->select($fields,'customer',$condition);

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            
            //echo($cust_id);
            return $r;
            
        }

        //get cust_id from email
        function get_custid($email){

            $condition="WHERE (email='$email' OR cust_id='$email')";
            $result= $this->select("cust_id",'customer',$condition);

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            $cust_id=array_shift( $r );
            
            //echo($cust_id);
            return $cust_id;
            
        }

        //get cust_name from email
        function get_lastname($email){
            

            //$query="SELECT last_name FROM customer WHERE (email='$email' OR cust_id='$email')";
            $condition="WHERE (email='$email' OR cust_id='$email');";
            $result= $this->select('last_name','customer',$condition);

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            $last_name=array_shift( $r );
            
            //echo($last_name);
            return $last_name;
            
        }

        //checking credentials by searching through the customer table
        function check_credentials($uname,$pwd){

            //echo session var
            //echo "uname is " . $_SESSION["uname"] . ".<br>";
            //echo "pwd is " . $_SESSION["pwd"] . ".";
               
            //$query="SELECT cust_id FROM customer WHERE (cust_id='$uname' OR email='$uname') AND password='$pwd'";
            $condition="WHERE (cust_id='$uname' OR email='$uname') AND password='$pwd';";
            $result= $this->select('cust_id','customer',$condition);

            //get a count of rows returning
            $count = mysqli_fetch_array($result);
            //print_r($count);
            //print_r($uname);
            //if array is not empty that means credentials are correct
            if($count){
               return True;
            }
            
        }

        //function to insert data into table customer and vehicle
        function insert_record($first_name,$last_name,$vehicle_number,$address,$e_mail,$password,$mobile_tel_no,$home_tel_no){
            
            //get date of today for registered date
            $today=date('Y-m-d');
            //echo($today);
            
            //$query_cust="INSERT INTO customer(first_name,last_name,address,email,password,registered_date,mobile_tel_no,home_tel_no) VALUES('$first_name','$last_name','$address','$password','$e_mail','$today','$mobile_tel_no','$home_tel_no');";
            $columns=array('first_name','last_name','address','email','password','registered_date','mobile_tel_no','home_tel_no');
            $values=array("$first_name","$last_name","$address","$password","$e_mail","$today","$mobile_tel_no","$home_tel_no");
            //echo($query);

            $result=$this->insert('customer',$columns,$values);

            //intermediate query to get cust id from name;
            //$query_custid="SELECT cust_id FROM customer WHERE  first_name='$first_name' AND last_name='$last_name' AND address='$address'; ";
            
            $condition="WHERE  first_name='$first_name' AND last_name='$last_name' AND address='$address';";
            $result2= $this->select('cust_id','customer',$condition);
            
            //get sole element of returning array which  is the unique cust_id
            $r = mysqli_fetch_array($result2);
            $cust_id=array_shift( $r );

            //insert that into the vehicle table
            $query_veh="INSERT INTO vehicle(cust_id,vehicle_num,vehicle_category) VALUES('$cust_id','$vehicle_number','Car');";
            
            $result3= mysqli_query($this->conn,$query_veh);

            //debugging
            if (!$result3) {
                printf("Error: %s\n", mysqli_error($this->conn));

                exit();
            }

        }

        //function to increment the customer reservation count when new reservation is placed
        function increment_count($cust_id){

               
            $query="UPDATE customer 
                    SET no_of_reservations = no_of_reservations + 1
                    WHERE cust_id ='$cust_id';"; 
            
            $result= mysqli_query($this->conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }

        }
        
    }
?>