<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

$serverVersion = '2022.0.5.1';
$releaseVersion = '2022.1.0.0';

$json = json_encode(array(
    "data" => array(
        'serverVersion' => $serverVersion,
        'releaseVersion' => $releaseVersion,
        'requestedTime' => date('Y-m-d H:i:s'),
        'locale' => "en-US"
    )
));