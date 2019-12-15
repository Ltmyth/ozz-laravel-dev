<?php

/*
 * sms config
 * 
 */
return [
    'username' => env('ASTALKING_USERNAME', 'sandbox'), // your application name on ASTalking dashboard
    'key' => env('ASTALKING_KEY', 'edc34ce3dbdc8c2d8aa8d2da5725079a702de848c2900ef154e307b75bca4e18'), // api key provided
    'sender_id' => env('ASTALKING_SENDERID', ''), // Sender ID or short code
    'enqueue' => env('ASTALKING_ENQUEUE', true) // true or false
];