<?php
$captchaGen = rand(0, 8);

$json = json_encode(array(
        'captcha' => $captchaGen
));

echo $json;
