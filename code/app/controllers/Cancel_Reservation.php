<?php

    //include classes
    include_once './models/Service_type.php';
    include_once './models/Time_slot.php';
    include_once './models/Reservation.php';
    include_once './models/Reservation_time_slot.php';
    include_once 'lib/classes/util/time_func.php';
    include_once 'lib/classes/Mailer.php';

    class Cancel_reservation extends Controller{

        function cancel(){

            $reservation=new Reservation();
            $reservation_slot=new Reservation_time_slot();

            $res_id = $_POST['cancel_id'];
            
            $reservation->cancel_reservation($res_id);
            $reservation_slot->delete_slots($res_id);

            //ON SUCCESS, send an email to customer address //
            $mail=new Mailer();
            $subject="Successful cancellation of reservation";
            //Email body
            $body="Dear Sir/Madam, Your reservation has been cancelled successfully.";
            //call function in class
            $mail->mailto($subject,$_SESSION['uname'],$body);
            Session::set("cancel", "cancel");

            //load customer view
            header("Location:view_reservation");
        }
    }

?>