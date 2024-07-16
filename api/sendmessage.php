<?php

include '../Classes/Utilities.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$response = [];
$response['status_code_header'] = 'HTTP/1.1 404 Not Found';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {

    $formData = [
        'Email' => $_POST['email'],
        'First Name' => $_POST['firstName'],
        'Last Name' => $_POST['lastName'],
        'Interested Area' => $_POST['interestedArea'],
        'Message' => $_POST['message'],
    ];

    $resp = '';
    $util = new Utilities();
    $response['body'] = json_encode($util->sendEmail($formData));

    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    // $response['body'] = json_encode($resp);
}

header($response['status_code_header']);
if ($response['body']) {
    echo $response['body'];
}
