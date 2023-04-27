<?php

// connexion PDO
include 'Db/Db.php';

// define database tables names
define('DB_TABLE_Personne', 'personne');
define('DB_TABLE_Cavalier', 'cavalier');
define('DB_TABLE_Cheval', 'cheval');
define('DB_TABLE_Cours', 'cours');
define('DB_TABLE_Inscription', 'inscription');
define('DB_TABLE_Participe', 'participe');
define('DB_TABLE_Pension', 'pension');
define('DB_TABLE_Responsable', 'responsable');
define('DB_TABLE_Robe', 'robe');
define('DB_TABLE_Tarifs', 'tarifs');
define('DB_TABLE_TypePension', 'typepension');



//define paths
define('DB_CLASS_DIR', 'Models/classes/');


// get main classes
include DB_CLASS_DIR . 'Cavalier.php';
include DB_CLASS_DIR . 'Cheval.php';
include DB_CLASS_DIR . 'CavalierResponsable.php';
include DB_CLASS_DIR . 'Cheval.php';
include DB_CLASS_DIR . 'Pension.php';
include DB_CLASS_DIR . 'Personne.php';
include DB_CLASS_DIR . 'Model.php';
//get main objects

$oCavalier = new Cavalier($n,  $p,  $dna,  $m,  $t, $a = true,  $ph,  $g,  $l);




/* // Connexion PDO
try {
    $server = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "equestrian_DB";

    // connect to DB
    $db = new PDO("mysql:host=$server;dbname=$dbname", "$username", "$password");
} catch (PDOException $e) {
    //throw $th;
}
 */