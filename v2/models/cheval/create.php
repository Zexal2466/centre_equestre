<a href="list.php">Liste</a>
<!-- Conteneur GRID principal -->
<div class="container-grid">
    <!-- Deuxième Conteneur GRID (Title + Photo) -->
    <div class="items items-photo">
        <!-- Div Title -->
        <div class="subItem-left-title">
            <p class="title_cav">AJOUTER UN CHEVAL</p>
        </div>
        <!-- Div Photo -->
        <div class="subItem-left-photo">
            <img src="../../styles/css/assets/img/form/cavalier3.PNG" alt="">
        </div>
    </div>
    <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
        <div class="subItem-right-1">
            <div class="subItem-name">
                <label>Nom</label>
                <input type="text" name="nomC">
            </div>
            <div class="subItem-name">
                <label>Date Naissance</label>
                <input type="date" name="dnaC">
            </div>
        </div>
        <div class="subItem-right-3">
            <div class="subItem-name">
                <label>SIR</label>
                <input type="text" name="sir">
            </div>
            <div class="subItem-name">
                <?php
                $robe = $oRobe->findAll(); ?>
                <label>Robe</label>
                <select name="idRobe" class="dropdown--robe">
                    <optgroup>
                        <?php
                        foreach ($robe as $value) {
                            echo "<option value='" . $value['ID_Robe'] . "' >" . $value['libelleRobe'] . "</option>";
                        }
                        ?>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="subItem-right-6">
            <button class="btn btn-next" name="submit">AJOUTER</button>
        </div>
</div>