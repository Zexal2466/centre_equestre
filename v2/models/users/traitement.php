<?php
require('../../classes/defines.inc.php');
$usersFind = $oUsers->findAll();

if (isset($_POST['submit'])) {
    
     $usersCreate = $oUsers->create($_POST['mail'],$_POST['mdp'],$_POST['role'],$_POST['idPersonne']);
     header("Location: index.php");
}

if (isset($_GET['idConn'])) {
    $usersFindId = $oUsers->findById($_GET['idConn']);
    //var_dump($usersFindId);
}

if (isset($_POST['Update'])) {
    $usersUpdate = $oUsers->updateById($_POST['idConn'],$_POST['mail'], $_POST['mdp'], $_POST['role'], $_POST['idPersonne']);
    header("Location: index.php");
}

if (isset($_GET['DeleteById'])) {
    $usersDelete = $oUsers->deleteById($_GET['DeleteById']);
    header("Location: index.php");
}

if (isset($_POST['back'])) {
    header("Location: index.php");
}
?>