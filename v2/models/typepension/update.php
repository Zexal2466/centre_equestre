<?php
$title = "typepension";
$typeFile = "update";
require('../headerDashboard.php') ?>


<!-- Conteneur GRID principal -->
<div class="container-grid">
    <!-- Deuxième Conteneur GRID (Title + Photo) -->
    <div class="items items-photo">
        <!-- Div Title -->
        <div class="subItem-left-title">
            <p class="title_cav">MODIFIER UN TYPE DE PENSION</p>
        </div>
        <!-- Div Photo -->
        <div class="subItem-left-photo">
            <img src="../../styles/css/assets/img/form/cavalier3.PNG" alt="">
        </div>
    </div>
    <?php
    foreach ($findID as $value) {
    ?>
        <!-- action="../../Models/classes/Cavalier.php" -->
        <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
            <div class="subItem-right-1">
                <input type="text" name="id" class="inputID" value="<?= $value['ID_TP'] ?>">
                <div class="subItem-name">
                    <label>Libelle</label>
                    <input type="text" name="ltp" value="<?= $value['libelle_TP'] ?>">
                </div>
            </div>
            <div class="subItem-right-6">
                <button class="btn btn-next" name="Update">SAUVEGARDER</button>
            </div>
        </form>
</div>

<?php
    } ?>
</div>