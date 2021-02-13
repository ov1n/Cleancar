<?php
    include_once 'Model.php';

    class Invoice extends Model{

        //getting all details of Invoice
        function get_bill_details(){

               
            $query="SELECT* FROM invoice";
            $result= mysqli_query($this->conn,$query);
            
            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
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

        function get_invoice_number(){
            $query="SELECT MAX(invoice_no) FROM invoice;";
            $result= mysqli_query($this->conn,$query);

            //debugging
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->conn));
                exit();
            }

            $r = mysqli_fetch_array($result);
            $invoice_no=array_shift( $r );

            if($invoice_no){
                //echo("go to view");
                return($invoice_no);
            }
        }

    }

?>