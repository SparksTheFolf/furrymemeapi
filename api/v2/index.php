<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');

$FOX_NUM = 32;
$random_fox_index = rand(1, $FOX_NUM);
$version = '2022.0.5.1';

$image_path = 'https://s.wuffs.net/api'.$random_fox_index;
$qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
$link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg?raw=true';
$pagecontents = file_get_contents("https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/txt/'.$random_fox_index.'.txt");


$data = ['image' => $image_path,
        'rawLink' => $link,
        'qrCode' => $qr,
        'about' => $pagecontents,
        'Version' => $version];

$json = json_encode(array(
    "client" => array(
        "build" => "1.0",
        "name" => "xxxxxx",
        "version" => "1.0"
    ),
    "protocolVersion" => 4,
    "data" => array(
        "distributorId" => "xxxx",
        "distributorPin" => "xxxx",
        "locale" => "en-US"
    )
));

echo $json;