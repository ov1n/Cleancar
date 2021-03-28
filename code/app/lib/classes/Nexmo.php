<?php


require_once './sms/vendor/autoload.php';
class Nexmo
{
    public function nexmo_sms($mobile, $body)
    {

        $basic  = new \Nexmo\Client\Credentials\Basic('0353f110', 'JF8NYtMksA6wFs5H');
        $client = new \Nexmo\Client($basic);


        $message = $client->message()->send([
            'to' => '94783441665',
            'from' => 'CleanCar',
            'text' => "$body"
        ]);
    }
}