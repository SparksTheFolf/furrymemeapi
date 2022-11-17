<?php

use Dotenv\Dotenv;


$DB_SERVER = $_ENV('DBSERVER');
$DB_USERNAME = $_ENV('DBUSERNAME');
$DB_PASSWORD = $_ENV('DBPASSWORD');
$DB_NAME = $_ENV('DBNAME');

/* Attempt to connect to MySQL database */
$link = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

