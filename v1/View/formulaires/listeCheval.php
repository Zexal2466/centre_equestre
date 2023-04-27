<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
    <link rel="stylesheet" href="../../style/css/formulaires.css">
    <link rel="stylesheet" href="../../style/css/img.css">
    <title>Chevaux</title>
</head>


<?php

require('../../Models/classes/Cheval.php');
?>
<a href="formCheval.php">Créer</a>

<body>
    <div class="container ">
        <h1>Liste des chevaux</h1>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>SIRE</th>

                <th class='text-center w-25'>Modifier</th>
                <th class='text-center w-25'>Supprimer</th>
            </thead>

            <tbody>
                <?php
                foreach ($chevaux as $cheval) {
                ?>
                    <tr>
                        <td><?= $cheval['ID_Cheval'] ?></td>
                        <td><?= $cheval['nom_Cheval'] ?></td>
                        <td><?= $cheval['DateNaissance_Cheval'] ?></td>
                        <td><?= $cheval['SIR'] ?></td>
                        <td><a class=" btn btn-info d-flex justify-content-center" href="updateCheval.php?UpdateById=<?= $cheval['ID_Cheval'] ?>">U</a></td>
                        <td><a class=" btn btn-danger d-flex justify-content-center" href="listeCheval.php?DeleteById=<?= $cheval['ID_Cheval'] ?>">D</a></td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>