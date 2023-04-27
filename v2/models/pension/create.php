<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ajouter UNE PENSION</title>
    <!-- Google fonts-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
    <link rel="stylesheet" href="../../styles/css/styleForm.css">
    <link rel="stylesheet" href="../../styles/css/img.css">
</head>

<body>
    <a href="index.php">Liste</a>
    <!-- Conteneur GRID principal -->
    <div class="container-grid">
        <!-- Deuxième Conteneur GRID (Title + Photo) -->
        <div class="items items-photo">
            <!-- Div Title -->
            <div class="subItem-left-title">
                <p class="title_cav">AJOUTER UNE PENSION</p>
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
                    <input type="text" name="libP">
                </div>
                <div class="subItem-name">
                    <label>Tarif</label>
                    <input type="text" name="tarP">
                </div>
            </div>
            <div class="subItem-right-2">
                <div class="subItem-name">
                    <label>Début</label>
                    <input type="date" name="dD">
                </div>
                <div class="subItem-name">
                    <label>Fin</label>
                    <input type="date" name="dF">
                </div>
            </div>
            <div class="subItem-right-6">
                <button class="btn btn-back btn-annuler" name="back">ANNULER</button>
                <button class="btn btn-next" name="submit">AJOUTER</button>
            </div>
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