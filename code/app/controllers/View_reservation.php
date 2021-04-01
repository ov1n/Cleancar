<?php

    //include database class
    include_once './models/Customer.php';
    include_once './models/Reservation.php';
    include_once './models/Time_slot.php';
    include_once './models/Service_type.php';

    class View_Reservation extends Controller{


        public static function create_view($view_name,$role){
            //require_once("./views/$view_name.php");
            if($role==""){
                //no permission needed
                require_once("./views/$view_name.php");
            }
            else if($role=="loggedin"){

                if(Session::get("role")){
                    require_once("./views/$view_name.php");
                }
                
            }else if(Session::get("role")==$role){
                require_once("./views/customer/$view_name.php");
            }

            else{
                require_once("./views/error_403.php");
            }
        }

        //function to get reservation details of the current employee
        function get_reservations(){

            //create seperate db objects
            $cust=new Customer();      
            $service_type=new Service_type();
            $timeslot=new Time_slot();
            $res=new Reservation();

            //get uname from session
            $email=Session::get("uname");

            //get the cust id and last name
            $cust_id=$cust->get_custid($email);
            $last_name=$cust->get_lastname($email);

            //get the customers reservation details
            $reservation_details=$res->select_reservation($cust_id);
            require_once("./views/customer/view_reservation.php");

    
        }

    }

?>