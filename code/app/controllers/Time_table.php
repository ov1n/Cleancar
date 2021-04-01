<?php

    //include employee class
    include './models/Timetable.php';
    include './models/Customer.php';
    class Time_table extends Controller{

        //overloading create view
        public static function create_view($view_name,$role){

            //create employee object
            $timetable=new Timetable();
            $array=$timetable->get_timetable();

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        //overloading create view
        public static function get_customer($view_name,$role){

            //create employee object
            $timetable=new Timetable();
            $reservation_id = $_GET['reservation_id'];
            $array=$timetable->get_cust($reservation_id);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        public static function send_delay_sms($view_name, $role)
       {
        $cust_id = $_POST['cust_id'];
        $reservation_id = $_POST['reservation_id'];
        $tel_no = $_POST['tp_no'];
        $delay_time = $_POST['delay_time'];

        $cust = new Customer();
        //customer name get
        $details =  $cust->get_cust_data($cust_id);
        $first_name = $details['first_name'];
        $intial = $first_name[0];

        $name = strtoupper($intial . "." . $details['last_name']);

        $body = 'Dear Mr/Mrs ' . $name . ' Your Reservation will be Delay ' . $delay_time . 'Minutes due to unavoidable reason';

        // require_once './lib/sms/vendor/autoload.php';
        // $basic  = new \Nexmo\Client\Credentials\Basic('0353f110', 'JF8NYtMksA6wFs5H');
        // $client = new \Nexmo\Client($basic);

        // $message = $client->message()->send([
        //     'to' => '94783441665',
        //     'from' => 'CleanCar',
        //     'text' => "$body"
        // ]);

        $timetable = new Timetable();
        $array = $timetable->get_timetable();

        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
       }

        //overloading create view
        public static function get_cust_and_vehi($view_name,$role){

            //create employee object
            $timetable=new Timetable();
            $cust_id = $_GET['cust_id'];
            $array=$timetable->get_reservation_details($cust_id);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }
        
        //overloading create view
        public static function get_bill_data($view_name,$role){

            //create employee object
            $timetable=new Timetable();
            $reservation_id = $_GET['reservation_id'];
            $array=$timetable->get_bill_details($reservation_id);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

    }

?>
