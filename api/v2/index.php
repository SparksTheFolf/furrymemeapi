<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$FOX_NUM = 32;
$notFound = http_response_code(521);
#$noQuery = http_response_code(400);
$request = $_GET['q'];
$random_fox_index = $request;
$serverVersion = '2022.0.5.1';
$releaseVersion = '2022.1.0.0';
$pagecontents = file_get_contents('https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/txt/'.$random_fox_index.'.txt');
$random_fox_index = rand(1, $FOX_NUM);


if($request == ''){

    $json = json_encode(array(
        "client" => array(
            'error' => 'No query was provided',
            'code' => '404'
        )
    ));

    echo $json;
}elseif
(is_numeric($request) and $request <= $FOX_NUM) {


    $qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
    $link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg?raw=true';

    $json = json_encode(array(
        "client" => array(
            'rawLink' => $link,
            'qrCode' => $qr,
            'aboutMeme' => $pagecontents
        ),
        "data" => array(
            'dataServ' => 'https://api.wuffs.net/api/data'
        )
    ));

    echo $json;

}
elseif ($request == 'random' or $request == 'rand' or $request == 'r') {


    $qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
    $link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg?raw=true';


    $json = json_encode(array(
        "client" => array(
            'rawLink' => $link,
            'qrCode' => $qr,
           'aboutMeme' => $pagecontents
        ),
        "data" => array(
            'dataServ' => 'https://api.wuffs.net/api/data'
        )
    ));

    echo $json;

}
else {
    $json = json_encode(array(
        "client" => array(
            'error' => 'API query not found or Invalid meme input',
            'code' => '404',
        )
    ));

    echo $json;

}

