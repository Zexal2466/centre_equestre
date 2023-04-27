<?php
$title = "users";
$typeFile = "update";
require('../headerDashboard.php');

?>
<!-- <a href="formCavalier.php">Créer</a> -->


<a href="index.php">Liste</a>
<!-- Conteneur GRID principal -->
<div class="container-grid">
    <!-- Deuxième Conteneur GRID (Title + Photo) -->
    <div class="items items-photo">
        <!-- Div Title -->
        <div class="subItem-left-title">
            <p class="title_cav">MODIFIER UN UTILISATEUR</p>
        </div>
        <!-- Div Photo -->
        <div class="subItem-left-photo">
            <img src="../../styles/css/assets/img/form/cavalier3.PNG" alt="">
        </div>
    </div>
    <?php
      /* $id=$_GET['idConn'];
    echo $id; */

    foreach ($UsersFindId3 as $value) {
        

        /* Récupérer le libelle robe dans le ChevFindID pour le comparer à la liste optionRobe et pour afficher avec selected='' le libelle correct */
    ?>

        <!-- action="../../Models/classes/Cavalier.php" -->
        <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
            <div class="subItem-right-1">
                <input type="text" name="idConn" class="inputID" value="<?= $value['ID_Conn'] ?>">
                <div class="subItem-name">
                    <label>Mail</label>
                    <input type="date" name="mail" value="<?= $value['mail_utilisateur'] ?>">
                </div>
                <div class="subItem-name">
                    <label>Mot de passe</label>
                    <input type="text" name="mdp" value="<?= $value['mot_de_passe'] ?>">
                </div>
            </div>
            <div class="subItem-right-3">
                <div class="subItem-name">
                    <label>Rôle</label>
                    <?php
                    $mail = $value['mail'];
                    $mail_uti = $oInscription->optionUtilisateur(); ?>
                    <select name="mail">
                        <optgroup>
                            <?php

                            foreach ($mail_uti as $value2) {
                            ?>

                                <option value="<?= $value2['mail'] ?>" <?php if ($value2['mail'] == $mail) {
                                                                                    echo "selected=''";
                                                                                } ?>> <?= $value2['mail'] ?> </option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                    
                </div>
                <div class="subItem-name">
                    <?php
                    $nomLib = $value['nom'];
                    $nom = $oUsers->optionUtilisateur(); ?>
                    <select name="idPersonne">
                        <optgroup>
                            <?php

                            foreach ($nom as $value2) {
                            ?>

                                <option value="<?= $value2['ID_Personne'] ?>" <?php if ($value2['nom'] == $nomLib) {
                                                                                    echo "selected=''";
                                                                                } ?>> <?= $value2['nom'] ?> </option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                </div>
                <div class="subItem-name">
                    <?php
                    $roleLib = $value['libRole'];
                    $role = $oUsers->optionRole(); ?>
                    <select name="role">
                        <optgroup>
                            <?php

                            foreach ($role as $value2) {
                            ?>

                                <option value="<?= $value2['ID_Role'] ?>" <?php if ($value2['nom'] == $roleLib) {
                                                                                    echo "selected=''";
                                                                                } ?>> <?= $value2['nom'] ?> </option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                </div>

                <div class="subItem-right-6">
                    <button class="btn btn-next" name="Update">SAUVEGARDER</button>
                </div>
        </form>
</div>

<?php
    } ?>
    
</div>