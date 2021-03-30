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


         function revenue()
        {
        $query = "SELECT SUM(net_amount) AS net_amount,bill_date AS bill_date FROM invoice GROUP BY bill_date DESC LIMIT 7;";
        $result = mysqli_query($this->conn, $query);
        $res = $result->fetch_all(MYSQLI_ASSOC);
        if ($res) {
            //echo("go to view");
            return ($res);
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


         function update_bill_records($invoice_no, $cus_name, $contact_no, $vehicle_no, $vehicle_model, $handled_by, $service_charge, $aditional_charges, $net_amount)
        {

        $query = "UPDATE invoice SET customer_name='$cus_name',contact_no='$contact_no',vehicle_no='$vehicle_no',vehicle_model='$vehicle_model',emp_id='$handled_by',service_charge=' $service_charge',aditional_charges='$aditional_charges',net_amount='$net_amount' WHERE invoice_no=$invoice_no ; ";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {

            printf("Error: %s\n", mysqli_error($this->conn));
            exit();
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