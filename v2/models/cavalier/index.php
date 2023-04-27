<?php
$title = "cavalier";
$typeFile = "index";
require('../headerDashboard.php') ?>

<div id="createCav">
    <?php require('create.php'); ?>
</div>
<div id="showCav">
    <div class="container__table">
        <!--  <h1 class='text-center'>Liste des cavaliers</h1> -->
        <table>
            <thead>
                <th></th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Naissance</th>
                <th>Mail</th>
                <th>Téléphone</th>
                <th>Niveau Galop</th>
                <th>Licence</th>
                <th></th>
            </thead>


            <tbody>
                <?php
                /* Tous les cavaliers */
                foreach ($cavFind as $value) {
                ?>
                    <tr>
                        <td>
                            <img src='../../styles/uploadimg/<?= $value['photo'] ?>' class="listPhoto">
                        </td>
                        <td>
                            <p class="td-p1-nom"><?= $value['nom'] ?></p>

                        </td>
                        <td>
                            <p><?= $value['prenom'] ?></p>
                        </td>
                        <td>
                            <p><?php $date = date_create($value['dateNaissance']);
                                echo date_format($date, "d/m/Y") ?></p>
                        </td>
                        <td>
                            <p><?= $value['mail'] ?></p>
                        </td>
                        <td>
                            <p><?= $value['telephone'] ?></p>
                        </td>
                        <td><?= $value['niveauGalop'] ?></td>
                        <td><?= $value['numeroLicence'] ?></td>
                        <td class=" td-btn">
                            <a href="update.php?id=<?= $value['ID_Personne'] ?>"><img src="https://img.icons8.com/ios/50/null/edit--v1.png" /></a>
                            <a href="index.php?DeleteById=<?= $value['ID_Personne'] ?>"><img src="https://img.icons8.com/material-outlined/24/null/multiply--v1.png" /></a>
                            <?php if ($value['ID_Responsable'] <> NULL) { ?>
                                <?php $respValue = $oCavalier->findResp($value['ID_Responsable']);
                                foreach ($respValue as $valueR) {
                                ?>
                                    <button class="btn btn-resp" data-toggle="modal" data-target="#showResponsable<?= $value['ID_Responsable'] ?>">Responsable</button>
                                    <div class="modal fade" id="showResponsable<?= $value['ID_Responsable'] ?>" tabindex="-1" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Responsable de <?= $value['prenom'] ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modalResponsable">
                                                    <div class="modal__1">
                                                        <p class="modal_title">Nom</p>
                                                        <p><?= $valueR['prenom'] ?></p>
                                                    </div>
                                                    <div class="modal__1">
                                                        <p class="modal_title">Prénom</p>
                                                        <p><?= $valueR['nom'] ?></p>
                                                    </div>
                                                    <div class="modal__1">
                                                        <p class="modal_title">Age</p>
                                                        <p><?php $date = date_create($valueR['dateNaissance']);
                                                            echo date_format($date, "d/m/Y") ?></p>
                                                    </div>
                                                    <div class="modal__1">
                                                        <p class="modal_title">Téléphone</p>
                                                        <p><?= $valueR['telephone'] ?></p>
                                                    </div>
                                                    <div class="modal__2">
                                                        <p class="modal_title">Mail</p>
                                                        <p><?= $valueR['mail'] ?></p>
                                                    </div>
                                                    <div class="modal__2">
                                                        <p class="modal_title">Rue</p>
                                                        <p><?= $valueR['rue'] ?></p>
                                                    </div>
                                                    <div class="modal__1">
                                                        <p class="modal_title">Ville</p>
                                                        <p><?= $valueR['ville'] ?></p>
                                                    </div>
                                                    <div class="modal__1">
                                                        <p class="modal_title">Code Postal</p>
                                                        <p><?= $valueR['codePostal'] ?></p>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                            <?php
                                }
                            }
                            ?>
                        </td>
                    <?php
                }
                    ?>
                    </tr>
            </tbody>
        </table>


    </div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showResponsable">
    Ajouter un cours
</button>


<? require('../footerDashboard.php'); ?>