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

        //this function is use to find the gender by usig NIC no
        static function find_gend($nic_no){
            if(strlen($nic_no)==10){
                $gender = substr($nic_no, 2,3);
                if($gender>500){
                    return 'Female';
                }
                else{
                    return 'Male';
                }
            }
            else{
                $gender = substr($nic_no, 4,3);
                if($gender>500){
                    return 'Female';
                }
                else{
                    return 'Male';
                }
            }
          }

        static function register(){

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
            // $dob = calculatedob($nic_no);
            //to get the gender from nic number
            $gender = $test->find_gend($nic_no);

            print_r($gender);
            // echo $dob;
            // echo $gender;
            //hash password
            $password=md5($unhashed);
            
            //insert data
            $emp->insert_record($first_name,$last_name,$address,$e_mail,$home_tel_no,$mobile_tel_no,$nic_no,$gender,$password);

            //ON SUCCESS, send an email to the employee asking him to change his password immediately
            $mail=new Mailer();

            $subject="Welcome to the Cleancar Family!";
            $body="<strong>දයාබර $last_name මහත්මයා/මහත්මිය,</strong></br>අපි ඔබව සාදරයෙන් CleanCar පවුලට පිලිගනිමු!
                    Please change your password as soon as you login to the System which is </br>
                    $unhashed at the moment.";

            //call function in class
            $mail->mailto($subject,$e_mail,$body);
        }


        //tis function for use to calculate a date of birth by using NIC no
        function calculatedob($nic_no){
            $date = substr($nic_no, 0, 5);

            
        
            return $date;

        }

        
    }
?>