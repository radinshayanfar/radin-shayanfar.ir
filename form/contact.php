<?php

require_once('../vendor/autoload.php');
require_once('TelegramAPI.php');

use GuzzleHttp\Client;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


function recaptcha_verify($secret, $recaptcha_resp) {
    $client = new Client();
    $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
        'form_params' => [
            'secret' => $secret,
            'response' => $recaptcha_resp,
            'remoteip' => $_SERVER['REMOTE_ADDR'],
        ]
    ]);
    $response = json_decode($response->getBody());
    return $response->success;
}


$success = recaptcha_verify($_ENV['RECAPTCHA_SECRET_KEY'], $_POST['g-recaptcha-response']);

/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
// $from = 'Demo contact form <YOUR_EMAIL@DOMAIN.COM>';

// an email address that will receive the email with the output of the form
// $sendTo = 'Demo contact form <YOUR_EMAIL@DOMAIN.COM>';

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('InputName' => 'Name', 'InputEmail' => 'email', 'InputSubject' => 'subject', 'InputMessage' => 'Message'); 

// message that will be displayed when everything is OK :)
$okMessage = 'Your message successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{
    if (! $success)
        throw new Exception('reCAPTCHA not successful');

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "You have a new message from your contact form\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    // $headers = array('Content-Type: text/plain; charset="UTF-8";',
    //     'From: ' . $from,
    //     'Reply-To: ' . $from,
    //     'Return-Path: ' . $from,
    // );
    
    // Send message
    $api = new TelegramAPI($_ENV['TOKEN']);
    $resp = array('chat_id' => $_ENV['MY_CHAT_ID'], 'text' => $emailText);
    $api->postSend('sendMessage', $resp);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
