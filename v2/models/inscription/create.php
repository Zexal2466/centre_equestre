<a href="index.php">Liste</a>
<!-- Conteneur GRID principal -->
<div class="container-grid">
    <!-- Deuxième Conteneur GRID (Title + Photo) -->
    <div class="items items-photo">
        <!-- Div Title -->
        <div class="subItem-left-title">
            <p class="title_cav">AJOUTER UNE INSCRIPTION</p>
        </div>
        <!-- Div Photo -->
        <div class="subItem-left-photo">
            <img src="../../styles/css/assets/img/form/cavalier3.PNG" alt="">
        </div>
    </div>
    <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
        <div class="subItem-right-1">
            <div class="subItem-name">
                <label>Année</label>
                <input type="date" name="an">
            </div>
            <div class="subItem-name">
                <label>Cotisation FFE</label>
                <input type="text" name="cffe">
            </div>
        </div>
        <div class="subItem-right-3">
            <div class="subItem-name">
                <label>Cotisation Centre</label>
                <input type="text" name="cc">
            </div>
            <div class="subItem-name">
                <?php $personne = $oInscription->optionPersonne(); ?>
                <select name="idPersonne">
                    <optgroup>
                        <?php
                        foreach ($personne as $value) {
                            echo "<option value='" . $value['ID_Personne'] . "' >" . $value['nom'] . $value['prenom'] . "</option>";
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