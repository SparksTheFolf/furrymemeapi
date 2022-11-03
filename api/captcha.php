<?php
$captchaGen = rand(0, 8);

$json = json_encode(array(
    "client" => array(
        'image' => $captchaGen
    ),
    "server" => array(
        'dataServ' => date('Y-m-d H:i:s')
    )
));

echo $json;
