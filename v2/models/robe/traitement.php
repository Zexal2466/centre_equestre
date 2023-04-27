<?php
require('../../classes/defines.inc.php');

if (isset($_POST['submit'])) {
    $robeCreate = $oRobe->create($_POST['libR']);
    header("Location: index.php");
}

if (isset($_GET['idR'])) {
    $robeFindId = $oRobe->findById($_GET['idR']);
}

if (isset($_POST['Update'])) {
    $robeUpdate = $oRobe->updateById($_POST['ID_Robe'], $_POST['libR']);
    header("Location: index.php");
}
$robeFind = $oRobe->findAll();

if (isset($_GET['DeleteById'])) {
    $robeDelete = $oRobe->deleteById($_GET['DeleteById']);
    header("Location: index.php");
}

if (isset($_POST['back'])) {
    header("Location: index.php");
}
