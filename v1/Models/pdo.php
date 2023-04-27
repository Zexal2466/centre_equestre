<?php
try {
    $server = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "equestreproject";

    // connect to DB
    $db = new PDO("mysql:host=$server;dbname=$dbname", "$username", "$password");
} catch (PDOException $e) {
    //throw $th;
}
