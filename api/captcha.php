<?php
$captchaGen = rand(0, 8);

$json = json_encode(array(
    "client" => array(
        'captcha' => $captchaGen
    )
));

echo $json;
