<?php
require('../../classes/defines.inc.php');


$tarifFind = $oTarif->findAll();

if (isset($_POST['submit'])) {
    $tarifCreate = $oTarif->create($_POST['libT'], $_POST['pM']);
    header("Location: index.php");
}

if (isset($_GET['idT'])) {
    $tarifFindId = $oTarif->findById($_GET['idT']);
}

if (isset($_POST['Update'])) {
    $tarifUpdate = $oTarif->updateById($_POST['ID_Tarif'], $_POST['libT'], $_POST['pM']);
    header("Location: index.php");
}

if (isset($_GET['DeleteById'])) {
    $tarifDelete = $oTarif->deleteById($_GET['DeleteById']);
    header("Location: index.php");
}

if (isset($_POST['back'])) {
    header("Location: index.php");
}
