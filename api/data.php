<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

$serverVersion = '2022.0.6.3';
$releaseVersion = '2022.1.0.0';
$FOX_NUM = 32;
$rqKEY = $_GET['key'];
$pagecontents = file_get_contents('https://wuffs.net/.well-known/security.txt'); # or die("NULL /// No about file found");


if($rqKEY == 'bm9sYW4gdHJhcHAgQWJjMTIzbm9sYW50MTA4Iw=='){

$json = json_encode(array(
    "serverData" => array(
        'serverVersion' => $serverVersion,
        'releaseVersion' => $releaseVersion,
        'currentMemesCount' => $FOX_NUM,
        'currentAPI' => 'v2',
        'requestedTime' => date('Y-m-d H:i:s'),
        'locale' => "en-US"
    ),
    "securityTxt" => array(
        'contents' => $pagecontents,
        'link' => 'https://wuffs.net/.well-known/security.txt'
    )
));

echo $json;
}else{
    $json = json_encode(array(
        "client" => array(
            'error' => 'No Master API key was provided',
            'code' => '400'
        )
    ));

    echo $json;
}