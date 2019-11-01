<?php
$dbHost="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="assembleias";

// // Create database connection
$connMysqli = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
mysqli_set_charset($connMysqli,"utf8");

// Check connection
if ($connMysqli->connect_error) {
    die("Connection failed: " . $connMysqli->connect_error);
}