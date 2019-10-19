<?php
$whitelist = array('127.0.0.1', "::1");

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    $host='sql112.main-hosting.eu';
}else{
    $host='localhost';

}

$username='u378308740_db';
$password='gogo1352';
$db='u378308740_db';
$PDO = new PDO( 'mysql:host=' . $host . ';dbname=' . $db, $username, $password);
?>