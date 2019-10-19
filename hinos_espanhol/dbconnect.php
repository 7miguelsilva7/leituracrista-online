<?php
$whitelist = array('127.0.0.1', "::1");

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    $host='localhost';
}else{
    $host='sql112.main-hosting.eu';
}

$username='u378308740_db';
$password='gogo1352';
$db='u378308740_db';
$PDO = new PDO( 'mysql:host=' . $host . ';dbname=' . $db, $username, $password);
?>