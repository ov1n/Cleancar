<?php

    //include Emp_Leave class
    include './models/Emp_leave.php';
    include './models/Service_employee.php';

    class EmployeeLeaveList extends Controller{

        public static function create_view($view_name,$role){

            //create employee leave object
            $leave=new Emp_leave();
            $array=$leave->get_pending();
            //var_dump($array);

            if(Session::get("role")==$role){
                require_once("./views/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

      public static function update_leave_status($view_name, $role)
    {

        // require_once './lib/sms/vendor/autoload.php';
        // $basic  = new \Nexmo\Client\Credentials\Basic('0353f110', 'JF8NYtMksA6wFs5H');
        // $client = new \Nexmo\Client($basic);

        $emp_id = base64_decode($_GET['emp_id']);
        $leave_date = base64_decode($_GET['leave_date']);
        $leave_status = $_GET['leave_status'];
        $leave_type = base64_decode($_GET['leave_type']);

        //create employee leave object
        $leave = new Emp_leave();
        $leave->update_leaves_status($emp_id, $leave_date, $leave_status, $leave_type);

        $emp = new Service_employee();
        // $uname = session::get("uname");
        $details = $emp->get_emp_data($emp_id);
        $first_name = $details['first_name'];
        $intial = $first_name[0];

        $employee_name = strtoupper($intial . "." . $details['last_name']);


        //employee mobile number
        $mobile = $details['mobile_tel_no'];

        if ($leave_status == 'Accepted') {
            $body = 'Dear Mr/Mrs ' . $employee_name . ' your leave on ' . $leave_date . ' has been Accepted.';
        } else {
            $body = 'Dear Mr/Mrs ' . $employee_name . ' your leave on ' . $leave_date . ' has been Rejected.';
        }

        // $message = $client->message()->send([
        //     'to' => '94783441665',
        //     'from' => 'CleanCar',
        //     'text' => "$body"
        // ]);

        //var_dump($array);
        $array = $leave->get_pending();
        // $array = NULL;
        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

     public static function leave_cancel($view_name, $role)
    {
        $leave = new Emp_leave();
        $array = $leave->get_accepted_leaves();

        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

    public static function delete_leaves($view_name, $role)
    {
        // require_once './lib/sms/vendor/autoload.php';
        // $basic  = new \Nexmo\Client\Credentials\Basic('0353f110', 'JF8NYtMksA6wFs5H');
        // $client = new \Nexmo\Client($basic);


        $leave = new Emp_leave();
        $leave_date = base64_decode($_GET['leave_date']);
        $employeeid = base64_decode($_GET['emp_id']);
        $leave_status = 'Rejected';
        $leave_type = base64_decode($_GET['type']);
        $update = $leave->update_cancel_leaves_status($employeeid, $leave_date, $leave_status, $leave_type);
        $array = $leave->get_accepted_leaves();

        $emp = new Service_employee();
        // employee name create with initials
        $details = $emp->get_emp_data($employeeid);
        $first_name = $details['first_name'];
        $intial = $first_name[0];
        $employee_name = strtoupper($intial . "." . $details['last_name']);

        //body of the SMS
        $body = 'Dear Mr/Mrs ' . $employee_name . ' your leave on ' . $leave_date . ' has been Canceled due to unavoidable reason.';


        //employee mobile number
        $mobile = $details['mobile_tel_no'];

        // $message = $client->message()->send([
        //     'to' => '94783441665',
        //     'from' => 'CleanCar',
        //     'text' => "$body"
        // ]);

        if (Session::get("role") == $role) {
            require_once("./views/$view_name.php");
        } else {
            require_once("./views/error_403.php");
        }
    }

        
    }

?>

