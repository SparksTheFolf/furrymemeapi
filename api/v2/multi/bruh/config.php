<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../../../../../env/.env');
$dotenv->load();

$DB_SERVER = getenv('DBSERVER');
$DB_USERNAME = getenv('DBUSERNAME');
$DB_PASSWORD = getenv('DBPASSWORD');
$DB_NAME = getenv('DBNAME');

/* Attempt to connect to MySQL database */
$link = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
