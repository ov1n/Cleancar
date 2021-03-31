<?php
    include_once 'Model.php';

    class Customer extends Model{

        //automatically create db object

        //get autofill data in reservation form
        function getdata($cust_id){
            
            //assign connectivity to a variable
            $fields=array('first_name','last_name','email','mobile_tel_no');
            $condition="WHERE (cust_id='$cust_id' OR email='$cust_id')";
            $result= $this->select($fields,'customer',$condition);

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            
            //echo($cust_id);
            return $r;
            
        }

         //get autofill data in reservation form
        function get_cust_data($cust_id){
            
            //assign connectivity to a variable
            $condition="WHERE (cust_id='$cust_id' OR email='$cust_id')";
            $result= $this->select('*','customer',$condition);

            $r = mysqli_fetch_array($result);

            return $r;
            
        }

        //get cust_id from email
        function get_custid($email){

            $condition="WHERE (email='$email' OR cust_id='$email')";
            $result= $this->select("cust_id",'customer',$condition);

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            $cust_id=array_shift( $r );
            return $cust_id;
            
        }

        //get cust_name from email
        function get_lastname($email){
            
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

            $condition="WHERE (cust_id='$uname' OR email='$uname') AND password='$pwd';";
            $result= $this->select('cust_id','customer',$condition);

            //get a count of rows returning
            $count = mysqli_fetch_array($result);

            if($count){
               return True;
            }
            
        }

        //checking if email exists
        function check_email($email){

            $condition="WHERE (email='$email');";
            $result= $this->select('email','customer',$condition);

            $count = mysqli_fetch_array($result);
            if($count){
               return True;
            }
        }

        //function to insert data into table customer and vehicle
        function insert_record($first_name,$last_name,$vehicle_number,$address,$e_mail,$password,$mobile_tel_no,$home_tel_no,$vehicle_type){
            
            //get date of today for registered date
            $today=date('Y-m-d');
            
            $columns=array("first_name","last_name","address","email","password","registered_date","mobile_tel_no","home_tel_no");
            $values=array("$first_name","$last_name","$address","$password","$e_mail","$today","$mobile_tel_no","$home_tel_no");


            $this->insert('customer',$columns,$values);
 
            $condition="WHERE  first_name='$first_name' AND last_name='$last_name' AND address='$address';";
            $result2= $this->select('cust_id','customer',$condition);
            
            //get sole element of returning array which  is the unique cust_id
            $r = mysqli_fetch_array($result2);
            $cust_id=array_shift( $r );

            //insert that into the vehicle table
            $columns2=array("cust_id","vehicle_num","vehicle_category");
            $values2=array("$cust_id","$vehicle_number","$vehicle_type");
            $this->insert('vehicle',$columns2,$values2);

        }

        function update_record($userid, $first_name, $last_name, $address, $email, $mobile_tel_no, $home_tel_no){
            $query="UPDATE customer SET first_name='$first_name',last_name='$last_name',address='$address',email='$email',home_tel_no='$home_tel_no',mobile_tel_no='$mobile_tel_no' WHERE cust_id='$userid';" ;
            $result = mysqli_query($this->conn, $query);
            if(!$result){
            printf("Error: %s\n", mysqli_error($this->conn));
            exit();
            }
        }

        //function to increment the customer reservation count when new reservation is placed
        function increment_count($cust_id){

               
            // $query="UPDATE customer 
            //         SET no_of_reservations = no_of_reservations + 1
            //         WHERE cust_id ='$cust_id';";
            
            $this->update('customer','no_of_reservations',"no_of_reservations+1", 
                           "WHERE cust_id ='$cust_id';");
        }

            function change_password($curr_pwd, $con_pwd)
    {
        $query = "UPDATE customer SET password='$con_pwd' WHERE password='$curr_pwd';";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            printf("Error :%s\n", mysqli_error($this->conn));
            exit();
        }
    }
        
    }
?>