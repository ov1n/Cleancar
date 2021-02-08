<?php
    include_once 'Model.php';

    class Receptionist extends Model{

        //checking credentials by searching through the receptionist table
        function check_credentials($uname,$pwd){

            //echo session var
            //echo "uname is " . $_SESSION["uname"] . ".<br>";
            //echo "pwd is " . $_SESSION["pwd"] . ".";
            
               
            //$query="SELECT emp_id FROM receptionist WHERE (emp_id='$uname' OR email='$uname') AND password='$pwd'";
            $result= $this->select('emp_id','receptionist',"WHERE (emp_id='$uname' OR email='$uname') AND password='$pwd';");
            
            //get a count of rows returning
            $count = mysqli_fetch_array($result);
            //print_r($count);

            //if array is not empty that means credentials are correct
            if($count){
                //echo("go to view");
                return True;
            }
            
        }

    }

?>