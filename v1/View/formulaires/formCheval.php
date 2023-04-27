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
    <link rel="stylesheet" href="../../style/css/formulaires.css">
    <link rel="stylesheet" href="../../style/css/img.css">
</head>

<body>
    <a href="listeCheval.php">Liste</a>
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
                <img src="../../style/css/assets/img/form/cavalier3.PNG" alt="">
            </div>
        </div>


        <!-- action="../../Models/classes/Cavalier.php" -->
        <form class="items items-form" method="POST" action="../../Models/classes/Cheval.php" enctype="multipart/form-data">
            <div class="subItem-right-1">
                <div class="subItem-name">
                    <label>Nom</label>
                    <input type="text" name="nom">
                </div>
                <div class="subItem-name">
                    <label>Date de naissance</label>
                    <input type="text" name="dna">
                </div>
            </div>
            <div class="subItem-right-2">
                <div class="subItem-name">
                    <label>N° SIRE</label>
                    <input type="text" name="sire">
                </div>
                <div class="subItem-name">
                    <label>Photo</label>

                    <!-- Button trigger modal   -->
                    <button type="button" class="btn-ph modalTrigger" data-toggle="modal" data-target="#exampleModal">
                        Choisir une photo
                    </button>

                </div>
            </div>
            <div class="subItem-right-6">
                <button class="btn btn-back btn-annuler" name="back">ANNULER</button>
                <button class="btn btn-next" name="submit">AJOUTER</button>
            </div>


            <!--         <div>
            <container>
                <a type="button" class="btn btn-success" href="./View/formulaires/formCavalier.php">Ajouter un cavalier</a>
                <a type="button" class="btn btn-success" href="http://localhost/Centre-equestre/2.View/formulaires/ajouterresponsable.php">Ajouter un responsable</a>
            </container>
        </div>-->
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
                                    <input type="file" class="d-none" onchange="previewFiles()" id="inputUp" name="photo">
                                    <a class="mediaUp mr-4"><i class="material-icons mr-2" data-tippy="Ajouter une Photo" onclick="trgger('inputUp')">perm_media</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-12 ml-auto mr-auto preview"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://unpkg.com/popper.js@1'></script>
    <script src='https://unpkg.com/tippy.js@4'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js'></script>

    <script src="../../style/js/img.js"></script>


</body>