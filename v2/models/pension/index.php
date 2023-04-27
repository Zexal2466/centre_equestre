<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ajouter une pension</title>
    <!-- Google fonts-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
    <link rel="stylesheet" href="../../styles/css/styleForm.css">
    <link rel="stylesheet" href="../../styles/css/img.css">
</head>

<body>

    <?php require('traitement.php') ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class='text-center'>Ajouter une pension</h1>
                <a href="create.php" class="">Ajouter une pension</a>
                <h1 class='text-center'>Liste des pensions</h1>
                <table class=" table table-striped table-dark w-75 mx-auto mb-5">
                    <thead>
                        <th>ID</th>
                        <th>Libelle</th>
                        <th>Tarifs</th>
                        <th>Début</th>
                        <th>Fin</th>
                        <th class='text-center w-25'>Actions</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($pensionFind as $value) {
                        ?>
                            <tr>
                                <td><?= $value['ID_Pension'] ?></td>
                                <td><?= $value['libellePension'] ?></td>
                                <td><?= $value['tarifPension'] ?></td>
                                <td><?= $value['dateDebut'] ?></td>
                                <td><?= $value['dateFin'] ?></td>
                                <td>
                                    <a class="btn-list" href="update.php?idP=<?= $value['ID_Pension'] ?>">Modifier</a>
                                </td>
                                <td>
                                    <a class="btn-list" href="index.php?DeleteById=<?= $value['ID_Pension'] ?>">Supprimer</a>
                                </td>
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
?>