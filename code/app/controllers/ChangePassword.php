<?php
//include the models. once is a necessary 
include_once './models/Customer.php';
include_once './models/Receptionist.php';
include_once './models/Manager.php';
include_once './models/Service_employee.php';

//require_once './lib/classes/nexmo.php';
//require './lib/classes/Mailer.php';
class ChangePassword extends Controller
{


    // public static  function sms()
    // {
    //     
    // }
    static function authenticate()
    {

        //session_start();
        //echo($_SESSION["test"]);
        //set database objects to variables
        $cust = new Customer();
        $rec = new Receptionist();
        $man = new Manager();
        $emp = new Service_employee();

        // echo ($_POST['crrpassword']);

        //get post data 
        $unhashed_curr_pwd = $_POST['crrpassword'];
        $unhashed_con_pwd = $_POST['confirm_password'];
        //echo ($unhashed_curr_pwd);
        //hash the password
        // Original PHP code by Chirp Internet: www.chirp.com.au
        // Please acknowledge use of this code by including this header.

        //hash the password

        //$pwd=md5($unhashed);
        $curr_pwd = sha1($unhashed_curr_pwd);
        $con_pwd = sha1($unhashed_con_pwd);
        //echo ($curr_pwd);
        //echo ($con_pwd);
        //require_once './lib/sms/vendor/autoload.php';
        //$basic  = new \Nexmo\Client\Credentials\Basic('0353f110', 'JF8NYtMksA6wFs5H');
        //$client = new \Nexmo\Client($basic);

        $uname = session::get("uname");



        //var_dump($man);

        $name = session::get('log_name');
        $body = 'Dear Mr/Mrs ' . $name . ' Your Password has been changed!!';

        //customer
        if ($cust->check_credentials($uname, $curr_pwd)) {
            $cust->change_password($curr_pwd, $con_pwd);
            $cust_id = $cust->get_custid($uname);
            $res =  $cust->get_cust_data($cust_id);
            $mobile = $res['mobile_tel_no'];

        //     $message = $client->message()->send([
        //     'to' => '94783441665',
        //     'from' => 'CleanCar',
        //     'text' => "$body"
        // ]);

            // $mesg = new Nexmo();
            // $body = 'Your Password has been changed!!';
            // $mesg->nexmo_sms($mobile, $body);

            header("Location:login");

            //manager
        } else if ($man->check_credentials($uname, $curr_pwd)) {

            $man->change_password($curr_pwd, $con_pwd);

            $res = $man->get_man_data();
            $mobile = $res['mobile_tel_no'];

            //send sms to user



         //    $message = $client->message()->send([
         //    'to' => '94783441665',
         //    'from' => 'CleanCar',
         //    'text' => "$body"
         // ]);

            header("Location:login");

            //receptinist
        } else if ($rec->check_credentials($uname, $curr_pwd)) {

            $rec->change_password($curr_pwd, $con_pwd);
            $result = $rec->get_recep_data();
            $mobile = $result['mobile_tel_no'];


            // $message = $client->message()->send([
            // 'to' => '94783441665',
            // 'from' => 'CleanCar',
            // 'text' => "$body"
            // ]);


            header("Location:login");

            //employee
        } else if ($emp->check_credentials($uname, $curr_pwd)) {
            $emp->change_password($curr_pwd, $con_pwd);
            $employeeid = $emp->get_empid($uname);
            $res = $emp->get_employee($employeeid);
            $mobile = $res['mobile_tel_no'];

            // $message = $client->message()->send([
            // 'to' => '94783441665',
            // 'from' => 'CleanCar',
            // 'text' => "$body"
            // ]);
            // $mesg = new Nexmo();
            // $body = 'Your Password has been changed!!';
            // $mesg->nexmo_sms($mobile, $body);


            header("Location:login");
        } else {
            //redirect to home with message
            header("Location:change_password?mes='Incorrect_Password'");
            //set
            Session::set("changePassword", "Incorrect_Password");
        }
    }
}