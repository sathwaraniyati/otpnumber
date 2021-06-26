<?php

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;


$sid = 'AC77ee6ed35da186bcf2565b3ab01c6ca5';

$token = '4de79fb7165c1cbebabaa1d0cfc71442';

$client = new Client($sid, $token);


$client->messages->create(

    '+918487831021',
    [
        
        'from' => '+919033107025',
        
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    ]
);