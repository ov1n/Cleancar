<?php

    //include database class
    include_once './models/Service_type.php';
    include_once './models/Time_slot.php';
    include_once './models/Reservation.php';
    include_once './models/Reservation_time_slot.php';
    include_once 'lib/classes/util/time_func.php';

    class Cancel_reservation extends Controller{

        function cancel($res_id){

            $reservation=new Reservation();
            $reservation_slot=new Reservation_time_slot();

            $reservation->cancel_reservation($res_id);
            $reservation_slot->delete_slots($res_id);

            //ON SUCCESS, send an email to customer address //
            $mail=new Mailer();
            $subject="Successful cancellation of reservation on ".$res_date.".";
            //Email body
            $body="<strong>Dear Mr./Mrs.".$_SESSION["details"]["last_name"].",</strong></br>
                    Your reservation for the above date has been cancelled successfully.</br>
                    The reservation details were as follows: </br>
                    Reservation ID:".$_SESSION["details"]["last_name"]."</br>
                    Vehicle No    :".$_SESSION["vehicle_num"]."</br>
                    Category      :".$_SESSION["vehicle_category"]."</br>
                    Service Type  :".$_SESSION["service_name"]."</br>
                    Date          :".$_SESSION["res_date"]."</br>
                    Time          :".$_SESSION["time"]."</br>
                    Duration      :".substr($_SESSION["duration"],1,1)." hours </br>
                    Price         : Rs.".$_SESSION["price"]."</br>
                    </br>
                    If this was not you please contact CleanCar at our hotline :011-2773411";

            //call function in class
            //$mail->mailto($subject,$_SESSION['details']['email'],$body);

            //SMS HERE
        }
    }

?>