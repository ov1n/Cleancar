<?php

    //include employee class
    include './models/Invoice.php';

    class Invoice_bill extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create employee object
            $bill=new Invoice();
            $array=$bill->get_bill_details();
            //var_dump($array);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        static function add_new(){

            $bill=new Invoice();
            
            //get each field from form
            $reservation_id=$_POST['reservation_id'];
            $vehicle_no=$_POST['veh_Number'];
            $vehicle_model=$_POST['veh_Model'];
            $customer_name=$_POST['name'];
            $contact_no=$_POST['contact_number'];
            $net_amount=$_POST['net_amount'];

            //get date of today for registered date
            $today=date('Y-m-d');


            //the built in insert function of model is called here
            $key_array=array("reservation_id","vehicle_no","vehicle_model","customer_name","contact_no","net_amount","bill_date");
            $values_array=array("$reservation_id","$vehicle_no","$vehicle_model","$customer_name","$contact_no","$net_amount",$today);

            //insert data using the base model function
            $bill->insert('invoice',$key_array,$values_array);

            $invoice_no = $bill->get_invoice_number();

            require("Library/fpdf.php");

            $pdf = new FPDF('p', 'mm', 'A5');
            $pdf -> AddPage();

            $pdf->Image('public/images/4444.png',10,10,40,20,'png');
            $pdf -> SetFont('Times','BU','24');
            $pdf -> cell(120, 10, "CleanCar", 0 ,1,'R');
            $pdf -> SetFont('Helvetica','UI','14');
            $pdf -> cell(115, 8, "Sales Invoice", 0 ,1,'R');

            $pdf ->Ln(6);

            $pdf -> SetFont('Times','','14');
            $pdf -> cell(28, 10, "Invoice No :-", 0 ,0,'L');
            $pdf -> cell(60, 10, $invoice_no , 0 ,0,'L');
            $pdf -> cell(20, 10, "Date :-", 0 ,0,'R');
            $pdf -> cell(30, 10, $today , 0 ,1,'L');

            $pdf ->Ln(6);


            $x = $pdf -> GetX();
            $y = $pdf -> GetY();
            $pdf ->Line( $x, $y, $x+128, $y );
            $pdf ->Ln(3);

            $pdf -> SetFont('Times','','12');
            $pdf -> cell(30, 10, "Customer Name", 0 ,0,'L');
            $pdf -> cell(5, 10, ":-", 0 ,0,'L');
            $pdf -> cell(40, 10, $customer_name, 0 ,1,'L');

            $pdf -> cell(30, 10, "Contact Number", 0 ,0,'L');
            $pdf -> cell(5, 10, ":-", 0 ,0,'L');
            $pdf -> cell(40, 10, $contact_no, 0 ,1,'L');

            $pdf -> cell(30, 10, "Vehicle Model", 0 ,0,'L');
            $pdf -> cell(5, 10, ":-", 0 ,0,'L');
            $pdf -> cell(40, 10, $vehicle_model, 0 ,1,'L');

            $pdf -> cell(30, 10, "Vehicle Number", 0 ,0,'L');
            $pdf -> cell(5, 10, ":-", 0 ,0,'L');
            $pdf -> cell(40, 10, $vehicle_no, 0 ,1,'L');

            $pdf ->Ln(3);
            $x = $pdf -> GetX();
            $y = $pdf -> GetY();
            $pdf ->Line( $x, $y, $x+128, $y );


            $pdf ->Ln(20);

            $pdf -> SetFont('Times','B','14');
            $pdf -> cell(60, 10, "Net Amount", 1 ,0,'C');
            $pdf -> cell(60, 10, $net_amount, 1 ,1,'L');

            $pdf -> OutPut();

        }

        public static function search($view_name, $role)
    {
        $search_key = $_POST['search'];
        $bill = new Invoice();
        $array = $bill->get_search_data($search_key);
        if ($array) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/$view_name.php");
            Session::set("serh_error", "search_error");
        }
    }

    }

?>