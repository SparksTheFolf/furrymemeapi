<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$files = glob('../images/*');
if ($files) {
    $FOX_NUM = count($files);
    $random_fox_index = rand(1, $FOX_NUM);

    $link = 'https://s.wuffs.net/api'.$random_fox_index;
} else {
    $link = null;
}
$data = ['image' => $link, 'version' => '2022.0.4.15'];
echo json_encode($data);
