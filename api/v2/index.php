<?php
require_once "multi/bruh/config.php";
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$FOX_NUM = 32;
$notFound = http_response_code(521);
#$noQuery = http_response_code(400);
$request = $_GET['q'];
$rqKEY = $_GET['key'];
$serverVersion = '2022.0.5.1';
$releaseVersion = '2022.1.0.0';

#Example request: https://api.wuffs.net/api/v2/?q=r&user=bm9sYW4gdHJhcHAgQWJjMTIzbm9sYW50MTA4Iw==


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

    if($rqKEY == 'example'){
    
    
        $qr = 'https://s.wuffs.net/api2.qr';
        $link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/2.jpg?raw=true';
        $pagecontents = file_get_contents('https://raw.githubusercontent.com/SparksTheFolf/apiphotos/Master/txt/2.txt');
    
        $json = json_encode(array(
            "client" => array(
                'rawLink' => $link,
                'qrCode' => $qr,
                'aboutMeme' => $pagecontents
            ),
            "data" => array(
                'message' => 'This is just an example view of the API, to request full access please contact SparksTheFolf#3621 on Discord',
            )
        ));

        echo $json;


        
    }


        // Prepare a select statement
       $sql = "SELECT apikey FROM users WHERE apikey = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($rqKEY);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
        
    
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

}}
else{
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
}
