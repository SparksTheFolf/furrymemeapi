<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$files = glob('../images/*');
if ($files) {
    $FOX_NUM = count($files);
    $random_fox_index = rand(1, $FOX_NUM);

    $image_path = 'https://api.wuffs.net/images/'.$random_fox_index.'.jpg';
}
echo json_encode(['image' => $image_path]);