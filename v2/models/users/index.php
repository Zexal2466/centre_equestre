<?php $title = "users";
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
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Rôle</th>
                <th>Nom</th>
                <th>Prenom</th>
            </thead>


            <tbody>
                <?php
                foreach ($usersFind as $value) {
                ?>

                    <tr>
                        <td><?=($value['mail_utilisateur']);?></td>
                        <td><?= $value['mot_de_passe'] ?></td>
                        <td><?= $value['libRole'] ?></td>
                        <td><?= $value['nom'] ?></td>
                        <td><?= $value['prenom'] ?></td>
                        <td class="td-btn">
                            <a href="update.php?idConn=<?= $value['ID_Conn'] ?>"><img src="https://img.icons8.com/ios/50/null/edit--v1.png" /></a>
                            <a href="index.php?DeleteById=<?= $value['ID_Conn'] ?>"><img src="https://img.icons8.com/material-outlined/24/null/multiply--v1.png" /></a>
                        </td>
                        
                    </tr>
                <?php } ?>
            </tbody>

        </table>


    </div>
</div>


<? require('../footerDashboard.php'); ?>
