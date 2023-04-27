    <a href="list.php">Liste</a>
    <!-- Conteneur GRID principal -->
    <div class="container-grid">
        <!-- Deuxième Conteneur GRID (Title + Photo) -->
        <div class="items items-photo">
            <!-- Div Title -->
            <div class="subItem-left-title">
                <p class="title_cav">AJOUTER UN TYPE DE PENSION</p>
            </div>
            <!-- Div Photo -->
            <div class="subItem-left-photo">
                <img src="../../styles/css/assets/img/form/cavalier3.PNG" alt="">
            </div>
        </div>
        <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
            <div class="subItem-right-1">
                <div class="subItem-name">
                    <label>Libelle</label>
                    <input type="text" name="ltp">
                </div>
            </div>
            <div class="subItem-right-6">
                <button class="btn btn-next" name="submit">AJOUTER</button>
            </div>
    </div>