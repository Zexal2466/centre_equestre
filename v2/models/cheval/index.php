<?php $title = "cheval";
require('../headerDashboard.php') ?>

<div class="container__nav">
    <div class="container__nav--banner">
        <h2>CHEVAL</h2>
    </div>
    <div class="container__nav--action">
        <button id="btnCreateCav" class="btn-list__cav">Ajouter un cheval</button>
    </div>

</div>
<div id="createCav">
    <?php require('create.php'); ?>
</div>
<div id="showCav">
    <div class="container__table">
        <!--  <h1 class='text-center'>Liste des cavaliers</h1> -->
        <table>
            <thead>
                <th>Nom</th>
                <th>Naissance</th>
                <th>SIR</th>
                <th>Robe</th>
                <th></th>
            </thead>


            <tbody>
                <?php
                foreach ($chevFind as $value) {
                ?>

                    <tr>
                        <td><?= $value['nom_Cheval'] ?></td>
                        <td><?php $date = date_create($value['DateNaissance_Cheval']);
                            echo date_format($date, "d/m/Y") ?></td>
                        <td><?= $value['SIR'] ?></td>
                        <td><?= $value['libelleRobe'] ?></td>
                        <td class="td-btn">
                            <a href="update.php?idC=<?= $value['ID_Cheval'] ?>"><img src="https://img.icons8.com/ios/50/null/edit--v1.png" /></a>
                            <a href="index.php?DeleteById=<?= $value['ID_Cheval'] ?>"><img src="https://img.icons8.com/material-outlined/24/null/multiply--v1.png" /></a>
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