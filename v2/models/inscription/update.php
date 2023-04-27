<?php
$title = "inscription";
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
            <p class="title_cav">MODIFIER UNE INSCRIPTION</p>
        </div>
        <!-- Div Photo -->
        <div class="subItem-left-photo">
            <img src="../../styles/css/assets/img/form/cavalier3.PNG" alt="">
        </div>
    </div>
    <?php
    /*   $id=$_GET['idInscription'];
    echo $id; */

    foreach ($inscriptionFindId as $value) {

        /* Récupérer le libelle robe dans le ChevFindID pour le comparer à la liste optionRobe et pour afficher avec selected='' le libelle correct */
    ?>

        <!-- action="../../Models/classes/Cavalier.php" -->
        <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
            <div class="subItem-right-1">
                <input type="text" name="idInscription" class="inputID" value="<?= $value['ID_Inscription'] ?>">
                <div class="subItem-name">
                    <label>Année</label>
                    <input type="date" name="an" value="<?= $value['annee'] ?>">
                </div>
                <div class="subItem-name">
                    <label>Cotisation FFE</label>
                    <input type="text" name="cffe" value="<?= $value['CotisationFFE'] ?>">
                </div>
            </div>
            <div class="subItem-right-3">
                <div class="subItem-name">
                    <label>Cotisation Centre</label>
                    <input type="text" name="cc" value="<?= $value['CotisationCentre'] ?>">
                </div>
                <div class="subItem-name">
                    <?php
                    $nomLib = $value['nom'];
                    $nom = $oInscription->optionPersonne(); ?>
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

                <div class="subItem-right-6">
                    <button class="btn btn-next" name="Update">SAUVEGARDER</button>
                </div>
        </form>
</div>

<?php
    } ?>
</div>