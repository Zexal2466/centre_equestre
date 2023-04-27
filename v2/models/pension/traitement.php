<?php
require('../../classes/defines.inc.php');


$pensionFind = $oPension->findAll();

if (isset($_POST['submit'])) {
    $pensionCreate = $oPension->create($_POST['libP'], $_POST['tarP'], $_POST['dD'], $_POST['dF']);
    header("Location: index.php");
}

if (isset($_GET['idP'])) {
    $pensionFindId = $oPension->findById($_GET['idP']);
}

if (isset($_POST['Update'])) {
    $pensionUpdate = $oPension->updateById($_POST['ID_Pension'], $_POST['libP'], $_POST['tarP'], $_POST['dD'], $_POST['dF']);
    header("Location: index.php");
}

if (isset($_GET['DeleteById'])) {
    $pensionDelete = $oPension->deleteById($_GET['DeleteById']);
    header("Location: index.php");
}

if (isset($_POST['back'])) {
    header("Location: index.php");
}
