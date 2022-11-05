<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'php');
define('DB_PASSWORD', 'Myfourkids2022!');
define('DB_NAME', 'meme');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<html>
<head>
    <title>BOI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <body>
        WHY R U TRYING TO HACK ME, Plus I'm not even using this anymore, or am I, Plus I can see your IP anyways. :)
</body>
</head>