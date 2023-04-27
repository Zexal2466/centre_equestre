<?php
$title = "robe";
$typeFile = "index";
require('../headerDashboard.php'); ?>
<div id="createCav">
    <?php require('create.php'); ?>
</div>
<div id="showCav">
    <div class="container__table">
        <!--  <h1 class='text-center'>Liste des cavaliers</h1> -->
        <table>
            <thead>
                <th>Libelle</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                foreach ($robeFind as $value) {
                ?>
                    <tr>
                        <td><?= $value['libelleRobe'] ?></td>
                        <td class="td-btn">
                            <a href="update.php?idR=<?= $value['ID_Robe'] ?>"><img src="https://img.icons8.com/ios/50/null/edit--v1.png" /></a>
                            <a href="index.php?DeleteById=<?= $value['ID_Robe'] ?>"><img src="https://img.icons8.com/material-outlined/24/null/multiply--v1.png" /></a>
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