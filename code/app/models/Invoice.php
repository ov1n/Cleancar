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

        function invoice_details($invoice_no)
        {
        $condition = "WHERE invoice_no=$invoice_no;";
        $result = $this->select("*", 'invoice', $condition);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->conn));
            exit();
        }

        //get employees in an array
        //$bill_details = $result->fetch_all(MYSQLI_ASSOC);
        //var_dump($employees);
        $res = mysqli_fetch_array($result);
        //if array is not empty that means employees are returning
        if ($res) {
            //echo("go to view");
            return ($res);
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

        function get_search_data($search_key)
        {
        $conn = Database::conn();
        $condition = "WHERE (invoice_no='$search_key' OR vehicle_model='$search_key' OR bill_date='$search_key' OR vehicle_no='$search_key' OR customer_name='$search_key');";
        $result = $this->select("*", 'invoice', $condition);

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

?>