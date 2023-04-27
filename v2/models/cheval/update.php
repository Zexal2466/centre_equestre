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
    <link rel="stylesheet" href="../../styles/css/styleForm.css">
    <link rel="stylesheet" href="../../styles/css/img.css">
</head>

<?php
require('traitement.php');
?>
<?php
foreach ($chevFindId as $value) {

?>
    <!-- Conteneur GRID principal -->
    <div class="container-grid">
        <!-- Deuxième Conteneur GRID (Title + Photo) -->
        <div class="items items-photo">
            <!-- Div Title -->
            <div class="subItem-left-title">
                <p class="title_cav">MODIFIER UN CHEVAL</p>
            </div>
            <!-- Div Photo -->
            <div class="subItem-left-photo">
                <img src="../../styles/css/assets/img/form/cavalier3.PNG" alt="">
            </div>
        </div>

        <!-- action="../../Models/classes/Cavalier.php" -->
        <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
            <div class="subItem-right-1">
                <input type="text" name="ID_Cheval" class="inputID" value="<?= $value['ID_Cheval'] ?>">
                <div class="subItem-name">
                    <label>Nom</label>
                    <input type="text" name="nomC" value="<?= $value['nom_Cheval'] ?>">
                </div>
                <div class="subItem-name">
                    <label>Date de naissance</label>
                    <input type="date" name="dnaC" value="<?= $value['DateNaissance_Cheval'] ?>">
                </div>
            </div>
            <div class="subItem-right-3">
                <div class="subItem-name">
                    <label>Sir</label>
                    <input type="text" name="sir" value="<?= $value['SIR'] ?>">
                </div>
                <div class="subItem-name">
                    <?php
                    $robe = $oRobe->findAll();

                    ?>
                    <label>Robe</label>
                    <select name="idRobe" class="dropdown--robe">
                        <?php foreach ($robe as $value2) {
                            $idRobe = $value2['ID_Robe'];
                        ?>
                            <optgroup>
                            <?php if ($idRobe == $value['ID_Robe']) {
                                $selected = "selected=''";
                            } else {
                                $selected = "";
                            }
                            echo "<option " . $selected . " value='" . $value2['ID_Robe'] . "' >" . $value2['libelleRobe'] . "</option>";
                        }
                            ?>
                            </optgroup>
                    </select>
                </div>
            </div>

            <div class="subItem-right-6">
                <button class="btn btn-next" name="Update">SAUVEGARDER</button>
            </div>
        </form>
    </div>
<?php  } ?>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://unpkg.com/popper.js@1'></script>
<script src='https://unpkg.com/tippy.js@4'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js'></script>
<script src="../../styles/js/img.js"></script>
</body>