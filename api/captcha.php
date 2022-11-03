<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


$captchaGen = rand(000000000, 888888888);

$json = json_encode(array(
    "client" => array(
        'captcha' => $captchaGen
    ),
    "server" => array(
        'dataServ' => date('Y-m-d H:i:s')
    )
));

echo $json;
