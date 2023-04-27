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
    <link rel="stylesheet" href="../../style/css/styleForm.css">
    <link rel="stylesheet" href="../../style/css/img.css">
</head>

<body>


    <?php

    require('../../Models/classes/Cavalier.php');
    ?>

    <a href="formCheval.php">Créer</a>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class='text-center'>Ajouter un cavalier</h1>
                <a href="formCavalier.php" class="">Ajouter un cavalier</a>
                <h1 class='text-center'>Liste des cavaliers</h1>
                <table class=" table table-striped table-dark w-75 mx-auto mb-5">
                    <thead>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Naissance</th>
                        <th>Mail</th>
                        <th>Téléphone</th>
                        <th>Galop</th>
                        <th>Licence</th>
                        <th>Photo</th>
                        <th class='text-center w-25'>Modifier</th>
                        <th class='text-center w-25'>Supprimer</th>
                    </thead>


                    <tbody>
                        <?php
                        foreach ($cavFind as $cavalier) {
                        ?>
                            <tr>
                                <td><?= $cavalier['ID_Personne'] ?></td>
                                <td><?= $cavalier['nom'] ?></td>
                                <td><?= $cavalier['prenom'] ?></td>
                                <td><?= $cavalier['dateNaissance'] ?></td>
                                <td><?= $cavalier['mail'] ?></td>
                                <td><?= $cavalier['telephone'] ?></td>
                                <td><?= $cavalier['niveauGalop'] ?></td>
                                <td><?= $cavalier['numeroLicence'] ?></td>
                                <td><?= "<img src='../../UploadImg/" . $cavalier['photo'] . "' class='listPhoto'>" ?></td>
                                <td><a class=" btn btn-info d-flex justify-content-center" href="updateCavalier.php?UpdateById=<?= $cavalier['ID_Personne'] ?>"></a></td>
                                <td><a class=" btn btn-danger d-flex justify-content-center" href="listeCavalier.php?DeleteById=<?= $cavalier['ID_Personne'] ?>"></a></td>

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