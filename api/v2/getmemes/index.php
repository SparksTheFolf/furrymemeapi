<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$files = glob('../images/*');

$FOX_NUM = 14;
$random_fox_index = rand(1, $FOX_NUM);

$image_path = 'https://s.wuffs.net/api'.$random_fox_index;

#$data = ['image' => $image_path, 'link' => $link];
$data = ['image' => $image_path];
echo json_encode($data);
