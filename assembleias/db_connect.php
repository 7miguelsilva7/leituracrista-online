<?php

$whitelist = array('127.0.0.1', "::1");

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){

    $dbHost= 'localhost';
    $dbName= 'u378308740_db';
    $dbPassword="gogo1352";
    $dbUserName="u378308740_db";

}else{
    
    $dbHost='sql112.main-hosting.eu';
    // conexão LOCAL
    $dbName='u378308740_db';
    $dbPassword="gogo1352";
    $dbUserName="u378308740_db";
}

// Create database connection
$connMysqli = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
mysqli_set_charset($connMysqli,"utf8");

// Check connection
if ($connMysqli->connect_error) {
    die("Connection failed: " . $connMysqli->connect_error);
}