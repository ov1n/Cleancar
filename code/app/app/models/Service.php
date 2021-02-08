<?php
    include_once 'Model.php';

    class Service extends Model{

        //automatically create db object
        public function __construct(){
                //$db=new Database();
        }

        //get details of a certain service
        function get_service($type_id){
            
            //assign connectivity to a variable
            $conn=Database::conn();

            $query="SELECT* FROM service_type WHERE (type_id='$type_id')";
            $result= mysqli_query($conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get necessary elements in an array
            $r = mysqli_fetch_array($result);
            
            //echo($cust_id);
            return $r;
            
        }

        //get types of services corresponding to category
        function get_types($category){

            //assign connectivity to a variable
            $conn=Database::conn();
               
            $query="SELECT type_name FROM service_type WHERE vehicle_category='$category'";
            $result= mysqli_query($conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get employees in an array
            $types = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($employees);

            //if array is not empty that means employees are returning
            if($types){
                //echo("go to view");
                return($types);
            }

        }

    }
?>