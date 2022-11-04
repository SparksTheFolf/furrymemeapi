<?php
require_once "config.php";
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$FOX_NUM = 32;
$notFound = http_response_code(521);
#$noQuery = http_response_code(400);
$request = $_GET['q'];
$rqKEY = $_GET['key'];
$serverVersion = '2022.0.5.1';
$releaseVersion = '2022.1.0.0';

#Example request: https://api.wuffs.net/api/v2/?q=r&key=bm9sYW4gdHJhcHAgQWJjMTIzbm9sYW50MTA4Iw==


if(empty($rqKEY)){
    $json = json_encode(array(
        "client" => array(
            'error' => 'No API key was provided',
            'code' => '400'
        )
    ));

    echo $json;
}

else{

    
$result = mysqli_query('SELECT * FROM users WHERE apikey =?');
if ($result) {
  if (mysqli_num_rows($result) > 0) {
if($request == ''){

        $json = json_encode(array(
            "client" => array(
                'error' => 'No query was provided',
                'code' => '404'
            )
        ));

        echo $json;

}
if(is_numeric($request) and $request <= $FOX_NUM) {
    $random_fox_index = rand(1, $FOX_NUM);
    $random_fox_index = $request;


    $qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
    $link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg?raw=true';
    $pagecontents = file_get_contents('https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/txt/'.$random_fox_index.'.txt');

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
if ($request == 'random' or $request == 'rand' or $request == 'r') {
    $random_fox_index = rand(1, $FOX_NUM);


    $qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
    $link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg?raw=true';
    $pagecontents = file_get_contents('https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/txt/'.$random_fox_index.'.txt');

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
}else{
    $json = json_encode(array(
        "client" => array(
            'error' => 'Invalid API key',
            'code' => '401'
        )
    ));

    echo $json;
}
}
}