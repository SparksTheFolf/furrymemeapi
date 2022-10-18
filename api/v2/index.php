<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$FOX_NUM = 32;
$random_fox_index = rand(1, $FOX_NUM);

$image_path = 'https://s.wuffs.net/api'.$random_fox_index;
$qr = 'https://s.wuffs.net/api'.$random_fox_index.'.qr';
$link = 'https://github.com/SparksTheFolf/apiphotos/blob/Master/'.$random_fox_index.'.jpg';

$data = ['image' => $image_path,
        'rawLink' => $link,
        'qrCode' => $qr,
        'TXT' => 'Please use JSON decoder for api',
        'Version' => '2022.0.4.76'];
echo json_encode($data);
