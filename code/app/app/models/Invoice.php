<?php
    include_once 'Model.php';

    class Invoice extends Model{

        //getting all details of Invoice
        function get_bill_details(){

            //assign connectivity to a variable
            $conn=Database::conn();
               
            $query="SELECT* FROM invoice";
            $result= mysqli_query($conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }

            //get employees in an array
            $bill_details = $result->fetch_all(MYSQLI_ASSOC);
            //var_dump($employees);

            //if array is not empty that means employees are returning
            if($bill_details){
                //echo("go to view");
                return($bill_details);
            }

        }
        // function insert($bill_no,$reservation_id,$vehicle_no,$vehicle_model,$customer_name,$contact_no,$net_amount){
            
        //     //assign connectivity to a variable
        //     $conn=Database::conn();

        //     //get date of today for registered date
        //     $today=date('Y-m-d');
        //     // echo($today);
            
        //     $query_bill="INSERT INTO invoice(bill_no,reservation_id,vehicle_no,vehicle_model,customer_name,contact_no,net_amount,bill_date) 
        //     VALUES('$bill_no','$reservation_id','$vehicle_no','$vehicle_model','$customer_name','$contact_no','$net_amount','$today');";
            
        //     //echo($query);

        //     $result= mysqli_query($conn,$query_bill);

        //     //debugging
        //     if (!$result) {
        //         printf("Error: %s\n", mysqli_error($conn));
        //         exit();
        //     }
        // }

    }

?>