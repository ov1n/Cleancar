<?php
    include_once 'Model.php';

    class Manager extends Model{

        //automatically create db object
        

        //checking credentials by searching through the manager table
        function check_credentials($uname,$pwd){

            //$this->__construct();
            //assign connectivity to a variable
            //$db=New Model();
            //var_dump($conn);
            //$conn=Database::conn();         
            
            //condition passed for WHERE in query
            $condition="WHERE (emp_id='$uname' OR email='$uname') AND password='$pwd';";
            
            $result= $this->select("emp_id",'manager',$condition);

            //get a count of rows returning
            $count = mysqli_fetch_array($result);
            //print_r($count);

            //if array is not empty that means credentials are correct
            if($count){
                //echo("go to view");
                return True;
            }
            
        }

         //get autofill data in reservation form
        function get_man_data(){
            
            //assign connectivity to a variable

            //$query="SELECT * FROM manager;
            //$fields=array(';');
            $condition=';';
            $result= $this->select('*','manager',$condition);

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            
            //echo($cust_id);
            return $r;
            
        }

    }

?>