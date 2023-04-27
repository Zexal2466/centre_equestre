<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ajouter un <?php if (isset($title)) {
                            echo $title;
                        } ?></title>
    <!-- Google fonts-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
    <link rel="stylesheet" href="../../styles/css/styleForm.css">
    <link rel="stylesheet" href="../../styles/css/img.css">
    <?php if ($title == "cours") { ?>
        <link href='<?= $dir; ?>packages/core/main.css' rel='stylesheet' />
        <link href='<?= $dir; ?>packages/daygrid/main.css' rel='stylesheet' />
        <link href='<?= $dir; ?>packages/timegrid/main.css' rel='stylesheet' />
        <link href='<?= $dir; ?>packages/list/main.css' rel='stylesheet' />
        <link href='<?= $dir; ?>packages/bootstrap/css/bootstrap.css' rel='stylesheet' />
        <link href="<?= $dir; ?>packages/jqueryui/custom-theme/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
        <link href='<?= $dir; ?>packages/datepicker/datepicker.css' rel='stylesheet' />
        <link href='<?= $dir; ?>packages/colorpicker/bootstrap-colorpicker.min.css' rel='stylesheet' />
        <link href='<?= $dir; ?>style.css' rel='stylesheet' />
    <?php } ?>
</head>

<?php
if ($title != 'cours') {
    require('traitement.php');
}
?>

<body>

    <nav class="side-nav">
        <div class="wrapper">
            <h1>DASHBOARD</h1>
            <a class="container-1 container-dash <?php if ($title == 'cavalier') {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    } ?>" href="<?php if ($title == 'cavalier') {
                                                                    echo '';
                                                                } else {
                                                                    echo '../cavalier/index.php';
                                                                } ?>">

                <div class="nav-bloc logo-1"><img src="../../styles/images/casque.png" /></div>
                <div class="nav-bloc n-1">
                    Cavalier
                </div>
            </a>
            <a class="container-2 container-dash <?php if ($title == 'cheval') {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    } ?>" href="<?php if ($title == 'cheval') {
                                                                    echo '';
                                                                } else {
                                                                    echo '../cheval/index.php';
                                                                } ?>">
                <div class="nav-bloc logo-1"><img src="../../styles/images/cheval.png" /></div>
                <div class="nav-bloc n-1">
                    Cheval
                </div>
            </a>
            <a class="container-3 container-dash <?php if ($title == 'robe') {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    } ?>" href="<?php if ($title == 'robe') {
                                                                    echo '';
                                                                } else {
                                                                    echo '../robe/index.php';
                                                                } ?>">
                <div class="nav-bloc logo-1"><img src="../../styles/images/robe.png" /></div>
                <div class="nav-bloc n-1">
                    Robe
                </div>
            </a>
            <a class="container-4 container-dash <?php if ($title == 'cours') {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    } ?>" href="<?php if ($title == 'cours') {
                                                                    echo '';
                                                                } else {
                                                                    echo '../cours/index.php';
                                                                } ?>">
                <div class="nav-bloc logo-1"><img src="../../styles/images/livre.png" /></div>
                <div class="nav-bloc n-1">
                    Cours
                </div>
            </a>
            <a class="container-5 container-dash <?php if ($title == 'pension') {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    } ?>" href="<?php if ($title == 'pension') {
                                                                    echo '';
                                                                } else {
                                                                    echo '../pension/index.php';
                                                                } ?>">
                <div class="nav-bloc logo-1"><img src="../../styles/images/pension.png" /></div>
                <div class="nav-bloc n-1">
                    Pension
                </div>
            </a>
            <a class="container-6 container-dash <?php if ($title == 'inscription') {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    } ?>" href="<?php if ($title == 'inscription') {
                                                                    echo '';
                                                                } else {
                                                                    echo '../inscription/index.php';
                                                                } ?>">
                <div class="nav-bloc logo-1"><img src="../../styles/images/inscription.png" /></div>
                <div class="nav-bloc n-1">
                    Inscription
                </div>
            </a>
            <!-- <a class="container-8 container-dash <?php if ($title == 'robe') {
                                                            echo 'active';
                                                        } else {
                                                            echo '';
                                                        } ?>" href="<?php if ($title == 'robe') {
                                                                        echo '';
                                                                    } else {
                                                                        echo '../robe/index.php';
                                                                    } ?>">
            <div class="nav-bloc logo-1"><img src="../../styles/images/livre.png" /></div>
            <div class="nav-bloc n-1">
                Robe
            </div>
        </a> -->
            <!-- <a class="container-9 container-dash <?php if ($title == 'robe') {
                                                            echo 'active';
                                                        } else {
                                                            echo '';
                                                        } ?>" href="<?php if ($title == 'robe') {
                                                                        echo '';
                                                                    } else {
                                                                        echo '../robe/index.php';
                                                                    } ?>">
            <div class="nav-bloc logo-1"><img src="../../styles/images/livre.png" /></div>
            <div class="nav-bloc n-1">
                Robe
            </div>
        </a> -->
            <a class="container-7 container-dash <?php if ($title == 'users') {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    } ?>" href="<?php if ($title == 'users') {
                                                                    echo '';
                                                                } else {
                                                                    echo '../users/index.php';
                                                                } ?>">
                <div class="nav-bloc logo-1"><img src="../../styles/images/livre.png" /></div>
                <div class="nav-bloc n-1">
                    Utilisateur
                </div>
            </a>

        </div>
    </nav>

    <!--     <div class="container__nav">
        <div class="container__nav--banner">
            <h2><?= $title ?></h2>
        </div>
        <?php
        if ($typeFile == "index" && $title != "cours") {
        ?>
            <div class="container__nav--action">
                <button id="btnCreateCav" class="btn-list__cav">Ajouter un <?= $title ?></button>
            </div>
        <?php
        } else if ($typeFile == "update" && $title != "cours") {
        ?>
            <div class="container__nav--action">
                <a href="index.php" class="btn-list__cav">Afficher les <?= $title ?></a>
            </div>
        <?php
        }
        ?>
    </div>
 
        
    </nav> -->
</body>
<script src="../../styles/js/toggle.js"></script>
<script src="../../styles/js/image.js"></script>

<!-- JQUERY BALISE css -->
<link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.css">
<link rel="stylesheet" href="jquery.css">
<!-- JQUERY BALISE css -->
<!-- JQUERY BALISE js -->
<script src="jquery-ui-1.13.2.custom/external/jquery/jquery.js"></script>
<script src="jquery-ui-1.13.2.custom/jquery-ui.js"></script>
<!-- JQUERY BALISE js-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://unpkg.com/popper.js@1'></script>
<script src='https://unpkg.com/tippy.js@4'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js'></script>


</html>