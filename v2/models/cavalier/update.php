<?php
$title = "cavalier";
$typeFile = "update";

require('../headerDashboard.php') ?>

<div class="pc-tab">

    <nav class="nav-tab">
        <ul>
            <li class="tab1">
                <label for="tab1">Cavalier</label>
            </li>
            <li class="tab2">
                <label for="tab2">Cours</label>
            </li>
            <li class="tab3">
                <label for="tab3">Tarif</label>
            </li>
            <li class="tab4">
                <label for="tab4">Inscription</label>
            </li>
            <li class="tab5">
                <label for="tab5">Cheval</label>
            </li>
            <li class="tab6">
                <label for="tab6">Robe</label>
            </li>
            <li class="tab7">
                <label for="tab7">Pension</label>
            </li>
        </ul>
    </nav>
    <section class="section-tab">
        <!-- Cavalier -->
        <div class="tab1">
            <?php
            foreach ($cavFindId as $cavalier) {
            ?>
        <div class="container-grid">
               <!-- action="../../Models/classes/Cavalier.php" -->
         <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
            <div class="subItem-right-1">
                <input type="text" name="ID_Personne" class="inputID" value="<?= $cavalier['ID_Personne'] ?>">
                <div class="subItem-name">
                    <label>Nom</label>
                    <input type="text" name="nom" value="<?= $cavalier['nom'] ?>">
                </div>
                <div class="subItem-name">
                    <label>Prénom</label>
                    <input type="text" name="prenom" value="<?= $cavalier['prenom'] ?>">
                </div>
            </div>
            <div class="subItem-right-2">
                <div class="subItem-name">
                    <label>Date de naissance</label>
                    <input type="date" name="dna" value="<?= $cavalier['dateNaissance'] ?>">
                </div>
                <div class="subItem-name">
                    <label>Photo</label>

                    <!-- Button trigger modal   -->
                    <button type="button" class="btn-ph modalTrigger" data-toggle="modal" data-target="#exampleModal">
                        Choisir une photo
                    </button>

                </div>
            </div>
            <div class="subItem-right-3">
                <div class="subItem-name">
                    <label>Email</label>
                    <input type="text" name="mail" value="<?= $cavalier['mail'] ?>">
                </div>
                <div class="subItem-name">
                    <label>Téléphone</label>
                    <input type="text" name="telephone" value="<?= $cavalier['telephone'] ?>">
                </div>
            </div>
            <div class="subItem-right-4">
                <label>Numéro Licence FFE</label>
                <input type="text" name="licence" value="<?= $cavalier['numeroLicence'] ?>">
            </div>
            <div class="subItem-right-5">
                <div class="subItem-name">
                    <label>Niveau de galop</label>
                    <div class='radio-container'>

                        <input <?php if ($cavalier['niveauGalop'] == 1) {
                                    echo "checked='1'";
                                } ?> id='nvGalop-1' name='nvGalop' type='radio' value='1'>
                        <label for='nvGalop-1'>1</label>

                        <input <?php if ($cavalier['niveauGalop'] == 2) {
                                    echo "checked='2'";
                                } ?>id='nvGalop-2' name='nvGalop' type='radio' value='2'>
                        <label for='nvGalop-2'>2</label>

                        <input <?php if ($cavalier['niveauGalop'] == 3) {
                                    echo "checked='3'";
                                } ?> id='nvGalop-3' name='nvGalop' type='radio' value='3'>
                        <label for='nvGalop-3'>3</label>

                        <input <?php if ($cavalier['niveauGalop'] == 4) {
                                    echo "checked='4'";
                                } ?> id='nvGalop-4' name='nvGalop' type='radio' value='4'>
                        <label for='nvGalop-4'>4</label>

                        <input <?php if ($cavalier['niveauGalop'] == 5) {
                                    echo "checked='5'";
                                } ?> id='nvGalop-5' name='nvGalop' type='radio' value='5'>
                        <label for='nvGalop-5'>5</label>

                        <input <?php if ($cavalier['niveauGalop'] == 6) {
                                    echo "checked='6'";
                                } ?> id='nvGalop-6' name='nvGalop' type='radio' value='6'>
                        <label for='nvGalop-6'>6</label>

                        <input <?php if ($cavalier['niveauGalop'] == 7) {
                                    echo "checked='7'";
                                } ?> id='nvGalop-7' name='nvGalop' type='radio' value='7'>
                        <label for='nvGalop-7'>7</label>
                    </div>
                </div>

                <div class="subItem-name">
                    <button class="btn btn-next" name="Update">ENREGISTRER</button>
                </div>

            </div>
            <!--             <div class="subItem-right-6">

                <button class="btn btn-next" name="Update">SAUVEGARDER</button>
               </div> -->
            </div
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="indicator"></div>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="media mb-3">

                    <div class="media-body">

                        <div class="position-relative">
                            <div class="position-relative">
                                <input type="file" class="d-none" onchange="previewFiles()" id="inputUp" name="photo" value="<?= $cavalier['photo'] ?>">
                                <a class="mediaUp mr-4"><i class="material-icons mr-2" data-tippy="Ajouter une Photo" onclick="trgger('inputUp')">perm_media</i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <?= "<img src='../../styles/uploadimg/" . $cavalier['photo'] . "' class='listPhoto-Update'>" ?>
                <div class="row col-md-12 ml-auto mr-auto preview"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    </form>
        <?php
            } ?>
        </div>
        <!-- Cours -->


</div>
</div>
</section>
</div>
<? require('../footerDashboard.php'); ?>
