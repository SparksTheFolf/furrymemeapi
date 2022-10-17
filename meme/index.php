<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$FOX_NUM = 14;
$random_fox_index = rand(1, $FOX_NUM);

    $link = 'https://s.wuffs.net/api'.$random_fox_index;
$fwd = NULL;

$data = ['image' => $fwd, 'version' => '2022.0.4.15', 'status' => 'Depreciated', 'msg' => 'Please use V2 of api => /api/v2'];
echo json_encode($data);
