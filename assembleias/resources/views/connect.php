<?php

$server="localhost";
$dbName="assembleias";
$dbUser="root";
$dbPass="";

$assemb = new mysqli($server, $dbUser, $dbPass, $dbName);
mysqli_set_charset($assemb,"utf8");

// Check connection
if ($assemb->connect_error) {
    die("Connection failed: " . $assemb->connect_error);
}
