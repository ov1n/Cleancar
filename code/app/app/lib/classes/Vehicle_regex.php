<?php

// this class contains a small utility which returns respective vehicle type from number plate number
// courtesy of Department of Motor Traffic
    class Vehicle_regex {

        function validate($number){

            //regex libraries
            $categories = array(
                '([K][A-Z][-][\d]{4})'=>'Motor Car',
                '([C][A-Z][A-Z][-][\d]{4})'=>'Motor Car',
                '([L][A-U][-][\d]{4})'=>'Motor Lorry',
                '([M][A-U][-][\d]{4})'=>'Motor Bike',
                '([B][A-U][A-U][-][\d]{4})'=>'Motor Bike',
                '([U][A-U][-][\d]{4})'=>'Motor Bike',
                '([P][A-Y][-][\d]{4})'=>'Dual Purpose'
            );

            foreach($categories as $key=> $value){
                if(preg_match($key, $number)){

                    return($value);
                    break;
                }
            }
        }
    }