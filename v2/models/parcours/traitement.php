<?php
require('../../classes/defines.inc.php');
var_dump($oParcours);
$parcoursFind = $oParcours->findAll();


if (isset($_POST['submit'])) {
    $parcoursCreate = $oParcours->create($_POST['nompa'], $_POST['dateP'], $_POST['idconcours'], $_POST['idobstacle'],$_POST['niveau']);
    header("Location: index.php");
}

if (isset($_GET['idInscription'])) {
    $inscriptparcoursFindionFindId = $oParcours->findById($_GET['idInscription']);
}

if (isset($_POST['Update'])) {
    $parcoursUpdate = $oParcours->updateById($_POST['id_parcours'],$_POST['nompa'], $_POST['dateP'], $_POST['idconcours'], $_POST['idobstacle'],$_POST['niveau']);
    header("Location: index.php");
}

if (isset($_GET['DeleteById'])) {
    $parcoursDelete = $oParcours->deleteById($_GET['DeleteById']);
    header("Location: index.php");
}

if (isset($_POST['back'])) {
    header("Location: index.php");
}
?>