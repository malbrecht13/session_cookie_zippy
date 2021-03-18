<?php 

$dsn = 'mysql:host=pxukqohrckdfo4ty.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=gvdsr24jhvu8j757';
$username = 'dzq33wn2lmpzso31';
$password = 'l3pzfll323cekhd8';

try {
    $db = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
    echo $e;
}

    try {
        $db = new PDO($dsn, $username, $password);
    } catch(PDOException $e) {
        echo $e;
    }

