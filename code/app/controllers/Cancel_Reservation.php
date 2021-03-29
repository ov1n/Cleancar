<?php

    //include database class
    include_once './models/Service_type.php';
    include_once './models/Time_slot.php';
    include_once './models/Reservation.php';
    include_once './models/Reservation_time_slot.php';
    include_once 'lib/classes/util/time_func.php';

    class Cancel_reservation extends Controller{

        function cancel(){

            $reservation=new Reservation();
            $reservation_slot=new Reservation_time_slot();

            $res_id = $_POST['cancel_id'];
            
            $reservation->cancel_reservation($res_id);
            $reservation_slot->delete_slots($res_id);
            
            //$res_date = $_POST['cancel_date'];

            echo($res_id);
            //echo($res_date);
            print_r($_SESSION);

            //ON SUCCESS, send an email to customer address //
            $mail=new Mailer();
            //$subject="Successful cancellation of reservation on ".$res_date.".";
            //Email body
           
            //call function in class
            //$mail->mailto($subject,$_SESSION['details']['email'],$body);

            //SMS HERE

            Session::set("cancel", "cancel");

            //load customer view
            header("Location:view_reservation");
        }
    }

?>