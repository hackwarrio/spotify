<?php 
    $server = "localhost";
    $user = "root";
    $passwors = "yTReRwtr1Gm42WOx";
    $database = "php_login_db";

    try {
        $con = new PDO("mysql:host=$server;dbname=$database;",$user,$passwors);
    } catch (PDOException $e) {
        die("Connected failed: ".$e->getMessage());
    }
?>   