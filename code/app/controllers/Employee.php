<?php

    //include employee class
    include './models/Service_employee.php';
    //get mailer class to send registration emails to customers
    require './lib/classes/Mailer.php';

    class Employee extends Controller{
        //base controller just for extending
        //IN CASE OF OVERRIDE

        public function __construct(){
            //
        
        }
        //tis function for use to calculate a date of birth by using NIC no
        static function calculatedob($nic_no){

            //for old type of id number
            if(strlen($nic_no)==10){
                $dates = substr($nic_no, 0, 5);
                $yy = "19".substr($nic_no, 0, 2);
                // print_r($yy);
                $date_number = substr($nic_no, 2, 3);
                
                //get the no of date in the year for female's id number
                if($date_number>500){
                    $dayText=$date_number-500;
                }
                //get the no of date in the year for male's id number
                else{
                    $dayText=$date_number;
                }

               
            }

            //for new type of id number
            else{
                $dates = substr($nic_no, 0, 7);
                $yy = substr($nic_no, 0, 4);
                // print_r($yy);
                $date_number = substr($nic_no, 4, 3);

                //get the no of date in the year for female's id number
                if($date_number>500){
                    $dayText=$date_number-500;
                }

                //get the no of date in the year for male's id number
                else{
                    $dayText=$date_number;
                }
            }

            //get the date and month from dayText
            if ($dayText > 335) {
                $dd = $dayText - 335;
                $mm = 12;
            }
            else if ($dayText > 305) {
                $dd = $dayText - 305;
                $mm = 11;
            }
            else if ($dayText > 274) {
                $dd = $dayText - 274;
                $mm = 10;
            }
            else if ($dayText > 244) {
                $dd = $dayText - 244;
                $mm = 9;
            }
            else if ($dayText > 213) {
                $dd = $dayText - 213;
                $mm = 8;
            }
            else if ($dayText > 182) {
                $dd = $dayText - 182;
                $mm = 7;
            }
            else if ($dayText > 152) {
                $dd = $dayText - 152;
                $mm = 6;
            }
            else if ($dayText > 121) {
                $dd = $dayText - 121;
                $mm = 5;
            }
            else if ($dayText > 91) {
                $dd = $dayText - 91;
                $mm = 4;
            }
            else if ($dayText > 60) {
                $dd = $dayText - 60;
                $mm = 3;
            }
            else if ($dayText > 31) {
                $dd = $dayText - 31;
                $mm = 2;
            }
            else{
                $mm = 1;
                $dd = $dayText;
            }
            // print_r($mm);
            // print_r($dd);

            $bday = $yy . '-' . $mm . '-' . $dd;
            // print_r($bday);
            
            //pass the birthday of employee
            return $bday;

        }


        //this function is use to find the gender by usig NIC no
        static function find_gend($nic_no){
            //for old type of id number
            if(strlen($nic_no)==10){
                $gender = substr($nic_no, 2,3);
                if($gender>500){
                    //return gender
                    return 'Female';
                }
                else{
                    //return gender
                    return 'Male';
                }
            }

            //for new type of id number
            else{
                
                $gender = substr($nic_no, 4,3);
                if($gender>500){
                    //return gender
                    return 'Female';
                }
                else{
                    //return gender
                    return 'Male';
                }
            }
          }

        //get details from form and return to the Model to insert data
        static function register(){

            //create new Service_employee object
            $emp=new Service_employee();
            $test = new Employee();

            //get each field from form
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $nic_no=$_POST['nic'];
            $address=$_POST['address'];
            $e_mail=$_POST['email'];
            $unhashed=$_POST['password'];
            $mobile_tel_no=$_POST['mobile_tel_no'];
            $home_tel_no=$_POST['home_tel_no'];

            //to get the date of birth from NIC number
            $dob = $test->calculatedob($nic_no);
            //to get the gender from nic number
            $gender = $test->find_gend($nic_no);

            //hash password
            $password = sha1($unhashed);

            //Call the insert_record function to insert the data to database
            $emp->insert_record($first_name,$last_name,$address,$e_mail,$home_tel_no,$mobile_tel_no,$nic_no,$gender,$dob,$password);

            //ON SUCCESS, send an email to the employee asking him to change his password immediately
            $mail=new Mailer();

            $subject="Welcome to the Cleancar Family!";
            $body="<strong>Dear Mr./Mrs./Ms. $last_name,</strong></br> Welcome Cleancar Family!
                    Please change your password as soon as you login to the System which is </br>
                    $unhashed at the moment.";

            //call function in class
            $mail->mailto($subject,$e_mail,$body);
        }

        //get details from form and return to the Model to update data
        static function update(){

            //create new Service_employee object
            $emp=new Service_employee();
            $test = new Employee();

            //get each field from form
            $emp_id=$_POST['emp_id'];
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $nic_no=$_POST['nic'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $mobile_tel_no=$_POST['mobile_tel_no'];
            $home_tel_no=$_POST['home_tel_no'];

            //to get the date of birth from NIC number
            $dob = $test->calculatedob($nic_no);
            //to get the gender from nic number
            $gender = $test->find_gend($nic_no);

            //Call the update_record function to insert the data to database
            $emp->update_record($emp_id,$first_name,$last_name,$address,$email,$home_tel_no,$mobile_tel_no,$nic_no,$gender,$dob);
            // $emp=new Service_employee();
            // $array=$emp->get_employee($empid);
            // var_dump(Session::get("role"));
            // if (Session::get("role") == "receptionist"){
                
            //     //require_once("./views/view_employee_recep.php");
            //     //$test->view("view_employee_recep");
            // }
            // else{
            //     //var_dump($array);
            //     //require_once("./views/view_employee.php");
            //     //$test->view('view_employee');
            // }

            
        }

        public function view($view_name){

            $empid=$_GET['emp_id'];
            $emp=new Service_employee();
            $array=$emp->get_employee($empid);
            //var_dump($array);
            require_once("./views/$view_name.php");
        }
        
    }
?>