<?php
include_once 'Model.php';

class Service_type extends Model
{

    //automatically create db object
    // public function __construct(){
    //$db=new Database();
    // }

    //get id,duration,price of the service name
    function get_details($type_name)
    {

        //assign connectivity to a variable

        //ONLY GETS CAR FOR NOW
        $condition="WHERE type_name='$type_name'
                    AND vehicle_category='Motor Car';";
        
        $result= $this->select(array('type_id','duration','price'),'service_type',$condition);
        //get necessary elements in an array
        $r = mysqli_fetch_array($result);

        //var_dump($r);
        return $r;
    }

    function get_duration_from_name($name){

        $condition="WHERE type_name='$name';";

        $result= $this->select('DISTINCT duration','service_type',$condition);

        $r = mysqli_fetch_array($result);
        $dur=array_shift( $r );
        
        //echo($dur);
        return $dur;
    }

    //get details from service_id
    function get_details_id($type_id)
    {

        //assign connectivity to a variable
        $conn = Database::conn();

        //ONLY GETS CAR FOR NOW
        $query = "SELECT type_name,duration,price FROM service_type 
                    WHERE type_id='$type_id'
                    AND vehicle_category='car';";
        $result = mysqli_query($conn, $query);

        //debugging
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }

        //get necessary elements in an array
        $r = $result->fetch_all(MYSQLI_ASSOC);

        //var_dump($r);
        return $r;
    }


    //function which gets a selected employee from ID
    function get_servicetype($typeid)
    {

        //$query="SELECT* FROM service_employee WHERE emp_id='$employeeid';";
        //$result= mysqli_query($this->conn,$query);
        $condition = "WHERE type_id='$typeid';";
        $result = $this->select("*", 'service_type', $condition);

        //get details into an associative array
        $details = mysqli_fetch_array($result);
        //print_r($details);

        //Return array to be fetched and displayed
        if ($details) {
            //echo("go to view");
            return ($details);
        }
    }



    //getting all details of employees
    function get_all()
    {

        //echo session var
        //echo "uname is " . $_SESSION["uname"] . ".<br>";
        //echo "pwd is " . $_SESSION["pwd"] . ".";

        //assign connectivity to a variable
        $conn = Database::conn();

        $query = "SELECT* FROM service_type";
        $result = mysqli_query($conn, $query);

        //debugging
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }

        //get employees in an array
        $service_types = $result->fetch_all(MYSQLI_ASSOC);
        //var_dump($employees);

        //if array is not empty that means employees are returning
        if ($service_types) {
            //echo("go to view");
            return ($service_types);
        }
    }



    function insert_record($type_name, $vehicle_category, $no_of_emp, $duration, $lift_no, $price)
    {

        //assign connectivity to a variable
        $conn = Database::conn();


        $query_service_type = "INSERT INTO service_type(type_name,vehicle_category,no_of_emp,duration,lift_no,price)

            VALUES('$type_name','$vehicle_category','$no_of_emp','$duration','$lift_no','$price');";

        //echo($query);

        $result = mysqli_query($conn, $query_service_type);

        //debugging
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
    }

    function update_record($type_id, $service_type, $vehicle_category, $no_of_employees, $no_of_time_slot, $lift_no, $prize)
    {

        //get date of today for registered date

        $ser_type = "UPDATE service_type SET type_name='$service_type',vehicle_category='$vehicle_category',no_of_emp='$no_of_employees',duration='$no_of_time_slot',lift_no='$lift_no',price='$prize'
            WHERE type_id='$type_id';";
        $result = mysqli_query($this->conn, $ser_type);

        //debugging
        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->conn));
            exit();
        }

        //$condition = 'WHERE emp_id= $emp_id;';
        //$columns=array("first_name","last_name","address","email","home_tel_no","mobile_tel_no","NIC_no","gender","dob");
        //$values=array("$first_name","$last_name","$address","$email","$home_tel_no","$mobile_tel_no","$nic_no","$gender","$dob");
        //$result= $this->update('service_employee',$columns,$values,$condition);


    }

    // get details for employee table
    // function view_emp_list(){
    //     //assign connectivity to a variable
    //     $conn=Database::conn();

    //     $query = $this->db->query("SELECT * from items");
    //     return $query->result();
    // }
    function delete_record($type_id)
    {

        //$query="DELETE FROM service_type WHERE (type_id='$type_id')";

        $condition = "WHERE (type_id='$type_id')";

        $this->delete('service_type', $condition);
    }

    function get_search_data($search_key)
    {
        $conn = Database::conn();
        $condition = "WHERE (type_id='$search_key' OR type_name='$search_key' OR vehicle_category='$search_key' OR lift_no='$search_key');";
        $result = $this->select("*", 'service_type', $condition);

        //get details into an associative array
        $details = $result->fetch_all(MYSQLI_ASSOC);
        //print_r($details);

        //Return array to be fetched and displayed
        if ($details) {
            //echo("go to view");
            return ($details);
        }
    }
}




//get types of services corresponding to category
function get_types($category)
{

    //assign connectivity to a variable
    $conn = Database::conn();

    $query = "SELECT type_name FROM service_type WHERE vehicle_category='$category'";
    $result = mysqli_query($conn, $query);

    //debugging
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    //get employees in an array
    $types = $result->fetch_all(MYSQLI_ASSOC);
    //var_dump($employees);

    //if array is not empty that means employees are returning
    if ($types) {
        //echo("go to view");
        return ($types);
    }
}