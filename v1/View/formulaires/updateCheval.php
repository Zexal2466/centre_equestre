<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ajouter un cavalier</title>
    <!-- Google fonts-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
    <link rel="stylesheet" href="../../style/css/formulaires.css">
    <link rel="stylesheet" href="../../style/css/img.css">
</head>

<body>


    <?php

    require('../../Models/classes/Cheval.php');
    ?>
    <a href="formCheval.php">Créer</a>
    <a href="listeCheval.php">Liste</a>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">

                <h1 class='text-center'>Modifier un cheval</h1>
                <table class=" table table-striped table-dark w-75 mx-auto mb-5">
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
                        foreach ($cheFindId as $cheval) {
                        ?>
                            <tr>
                                <form action="updateCheval.php" method="POST">
                                    <td><?= $cheval['ID_Cheval'] ?></td>
                                    <td> <input type="text" class="updateForm"> <?= $cheval['nom_Cheval'] ?></input></td>
                                    <td><input type="text" class="updateForm"><?= $cheval['DateNaissance_Cheval'] ?></input></td>
                                    <td><input type="text" class="updateForm"> <?= $cheval['SIR'] ?></input></td>


                                </form>

                                <td><a class=" btn btn-info d-flex justify-content-center" href="updateCavalier.php?UpdateById=<?= $cavalier['ID_Personne'] ?>">U</a></td>
                                <td><a class=" btn btn-danger d-flex justify-content-center" href="listeCavalier.php?DeleteById=<?= $cavalier['ID_Personne'] ?>">D</a></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

<?php
