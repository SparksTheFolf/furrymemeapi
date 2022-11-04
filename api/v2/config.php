<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'php');
define('DB_PASSWORD', 'Myfourkids2022!');
define('DB_NAME', 'php');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>