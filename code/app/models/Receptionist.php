<?php
include_once 'Model.php';

class Receptionist extends Model
{

    //checking credentials by searching through the receptionist table
    function check_credentials($uname, $pwd)
    {

        //echo session var
        //echo "uname is " . $_SESSION["uname"] . ".<br>";
        //echo "pwd is " . $_SESSION["pwd"] . ".";


        //$query="SELECT emp_id FROM receptionist WHERE (emp_id='$uname' OR email='$uname') AND password='$pwd'";
        $result = $this->select('emp_id', 'receptionist', "WHERE (emp_id='$uname' OR email='$uname') AND password='$pwd';");

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
        $query = "UPDATE receptionist SET first_name='$first_name',last_name='$last_name',address='$address',email=' $email',NIC_no=' $nic',mobile_tel_no='$mobile_tel_no',home_tel_no='$home_tel_no' WHERE emp_id='$userid';";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->conn));
            exit();
        }
    }

    //get autofill data in reservation form
    function get_recep_data()
    {

        //assign connectivity to a variable

        //$query="SELECT * FROM receptionist;
        //$fields=array(';');
        $condition = ";";
        $result = $this->select('*', 'receptionist', $condition);

        //get necessary elements in an array
        $r = mysqli_fetch_array($result);

        //echo($cust_id);
        return $r;
    }

    function change_password($curr_pwd, $con_pwd)
    {
        $query = "UPDATE receptionist SET password='$con_pwd' WHERE password='$curr_pwd';";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            printf("Error :%s\n", mysqli_error($this->conn));
            exit();
        }
    }
}