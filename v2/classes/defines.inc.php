<?php

try {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "equestreproject_test";

    // connect to DB
    $db = new PDO("mysql:host=$server;dbname=$dbname", "$username", "$password");
} catch (PDOException $e) {
    //throw $th;
}
require("personne.class.php");
require("cavalier.class.php");
require("cheval.class.php");
require("robe.class.php");
require("pension.class.php");
require("tarif.class.php");
require("inscription.class.php");
require("users.class.php");
require("typePension.class.php");





$oCavalier = new Cavalier("", "", "", "", "", "", "", 0, "");
$oCheval = new Cheval("", "", 0, 0);
$oRobe = new Robe(0, "");
$oPension = new Pension("", 0, "", "", "");
$oTarif = new Tarif("", 0);
$oInscription = new Inscription("", 0, 0, 0);
$oUsers = new Users("", "", 0, 0);
$oTypePension = new TypePension("");

