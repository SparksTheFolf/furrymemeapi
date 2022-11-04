<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

$FOX_NUM = 32;
$random_fox_index = rand(1, $FOX_NUM);
$serverVersion = '2022.0.5.1';
$releaseVersion = '2022.1.0.0';


$image_path = 'https://s.wuffs.net/api'.$random_fox_index;
$qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
$link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg?raw=true';
$pagecontents = file_get_contents('https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/txt/'.$random_fox_index.'.txt'); # or die("NULL /// No about file found");


$json = json_encode(array(
    "client" => array(
        'image' => $image_path,
        'rawLink' => $link,
        'qrCode' => $qr,
        'aboutMeme' => $pagecontents
    ),
    "data" => array(
        'dataServ' => 'https://api.wuffs.net/api/data'
    )
));

echo $json;
echo $_GET['q'];  //Output: myquery

