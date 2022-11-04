<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$FOX_NUM = 32;
$notFound = http_response_code(521);
$noQuery = http_response_code(400);

if($_GET['q'] == ''){

    $json = json_encode(array(
        "client" => array(
            'error' => 'No query was provided',
            'code' => $noQuery
        )
    ));


}elseif
(is_numeric($_GET['q']) and $_GET['q'] <= $FOX_NUM) {
    $random_fox_index = $_GET['q'];
    $serverVersion = '2022.0.5.1';
    $releaseVersion = '2022.1.0.0';


    $qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
    $link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg?raw=true';
   # $pagecontents = file_get_contents('https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/txt/'.$random_fox_index.'.txt');

    $json = json_encode(array(
        "client" => array(
            'rawLink' => $link,
            'qrCode' => $qr#,
           # 'aboutMeme' => $pagecontents
        ),
        "data" => array(
            'dataServ' => 'https://api.wuffs.net/api/data'
        )
    ));

}
elseif ($_GET['q'] == 'random' or $_GET['q'] == 'rand' or $_GET['q'] == 'r') {
    $random_fox_index = rand(1, $FOX_NUM);
    $serverVersion = '2022.0.5.1';
    $releaseVersion = '2022.1.0.0';


    $qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
    $link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg?raw=true';
 #   $pagecontents = file_get_contents('https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/txt/'.$random_fox_index.'.txt'); # or die("NULL /// No about file found");


    $json = json_encode(array(
        "client" => array(
            'rawLink' => $link,
            'qrCode' => $qr#,
           # 'aboutMeme' => $pagecontents
        ),
        "data" => array(
            'dataServ' => 'https://api.wuffs.net/api/data'
        )
    ));

} else {
    $json = json_encode(array(
        "client" => array(
            'error' => 'API query not found or Invalid meme input',
            'code' => '404',
        )
    ));

}
echo $json;


