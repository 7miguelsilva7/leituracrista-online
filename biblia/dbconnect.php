<?php
$whitelist = array('127.0.0.1', "::1");

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    // se online
    $host='localhost';
    $username='u378308740_biblia';
    $password='gogo1352';
    $db='u378308740_biblia';
}else{
    // Se localmente
    $host='localhost';
    $username='root';
    $password='';
    $db='biblia';
}

$PDO = new PDO( 'mysql:host=' . $host . ';dbname=' . $db, $username, $password);
?>