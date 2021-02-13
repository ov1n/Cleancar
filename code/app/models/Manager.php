<?php
include_once 'Model.php';

class Manager extends Model
{

    //automatically create db object


    //checking credentials by searching through the manager table
    function check_credentials($uname, $pwd)
    {

        //$this->__construct();
        //assign connectivity to a variable
        //$db=New Model();
        //var_dump($conn);
        //$conn=Database::conn();         

        //condition passed for WHERE in query
        $condition = "WHERE (emp_id='$uname' OR email='$uname') AND password='$pwd';";

        $result = $this->select("emp_id", 'manager', $condition);

        //get a count of rows returning
        $count = mysqli_fetch_array($result);
        //print_r($count);

        //if array is not empty that means credentials are correct
        if ($count) {
            //echo("go to view");
            return True;
        }
    }
    function update_record($userid, $first_name, $last_name, $nic, $address, $email, $mobile_tel_no, $home_tel_no)
    {
        $query = "UPDATE manager SET first_name='$first_name',last_name='$last_name',address='$address',NIC_no='$nic',email='$email',mobile_tel_no=' $mobile_tel_no',home_tel_no=' $home_tel_no' WHERE emp_id='$userid';";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {

            printf("Error: %s\n", mysqli_error($this->conn));
            exit();
        }
    }

    //get autofill data in reservation form
    function get_man_data()
    {

        //assign connectivity to a variable

        //$query="SELECT * FROM manager;
        //$fields=array(';');
        $condition = ';';
        $result = $this->select('*', 'manager', $condition);

        //get necessary elements in an array
        $r = mysqli_fetch_array($result);

        //echo($cust_id);
        return $r;
    }


    function change_password($curr_pwd, $con_pwd)
    {
        $query = "UPDATE manager SET password='$con_pwd' WHERE password='$curr_pwd';";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            printf("Error :%s\n", mysqli_error($this->conn));
            exit();
        }
    }
}