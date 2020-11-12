<?php
    include_once 'Model.php';

    class Service_type extends Model{

        //automatically create db object
        public function __construct(){
                //$db=new Database();
        }

        //getting all details of employees
        function get_all(){

            //echo session var
            //echo "uname is " . $_SESSION["uname"] . ".<br>";
            //echo "pwd is " . $_SESSION["pwd"] . ".";
            
            //assign connectivity to a variable
            $conn=Database::conn();
               
            $query="SELECT* FROM service_type";
            $result= mysqli_query($conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get employees in an array
            $service_types = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($employees);

            //if array is not empty that means employees are returning
            if($service_types){
                //echo("go to view");
                return($service_types);
            }

        }



        function insert_record($type_name,$vehicle_category,$no_of_emp,$no_of_timeslots,$lift_no,$price){
            
            //assign connectivity to a variable
            $conn=Database::conn();

            
            $query_service_type="INSERT INTO service_type(type_name,vehicle_category,no_of_emp,no_of_timeslots,lift_no,price)

            VALUES('$type_name','$vehicle_category','$no_of_emp','$no_of_timeslots','$lift_no','$price');";
            
            //echo($query);

            $result= mysqli_query($conn,$query_service_type);

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