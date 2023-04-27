<?php
$title = "inscription";
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
                <th>Nom du parcours</th>
                <th>Date du parcours</th>
                <th>Id du concours</th>
                <th>Nombre d'obstacle</th>
                <th>Niveau du parcours</th>
                
            </thead>


            <tbody>
                <?php
                foreach ($parcoursFind as $value) {
                ?>

                    <tr>
                    <td><?= $value['nom_parcours'] ?></td>
                        <td><?php $date = date_create($value['date']);
                            echo date_format($date, "Y") ?></td>
                        <td><?= $value['id_concours'] ?></td>
                        <td><?= $value['id_obstacle'] ?></td>
                        <td><?= $value['niveau'] ?></td>
                        <td class="td-btn">
                            <a href="update.php?idInscription=<?= $value['id_parcours'] ?>"><img src="https://img.icons8.com/ios/50/null/edit--v1.png" /></a>
                            <a href="index.php?DeleteById=<?= $value['id_parcours'] ?>"><img src="https://img.icons8.com/material-outlined/24/null/multiply--v1.png" /></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>


    </div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showResponsable">
    Ajouter un cours
</button>

<? require('../footerDashboard.php'); ?>