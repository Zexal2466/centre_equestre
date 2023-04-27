<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ajouter un membre</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../style/css/style.css" rel="stylesheet" />
    <link href="../../style/css/formulaire.css" rel="stylesheet" />
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="text-center mt-5 mb-5">
            <h1>Ajouter un cavalier</h1>
        </div>
        <form action="./Models/Model" method="POST">
            <div class="row">
                <div class="mb-3 col-4">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom">

                </div>
                <div class="mb-3 ms-3 col-4">
                    <label class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
                </div>
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="dateNaissance">
            </div>

            <div class="row">
                <div class="mb-3 col-4">
                    <label class="form-label">Mail</label>
                    <input type="email" class="form-control" name="mail">
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" name="telephone">
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">Photo</label>
                    <input type="tel" class="form-control" name="photo">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-4">
                    <label class="form-label">Numéro de licence FFE</label>
                    <input type="text" class="form-control" name="numeroFFE">
                </div>
                <div class="mb col-5">


                    <div class='galop-container'>

                        <div class='pets-weight'>
                            <label>Niveau de galop</label>
                            <div class='radio-container'>

                                <input checked='' id='nvGalop-1' name='nvGalop' type='radio' value='1'>
                                <label for='nvGalop-1'>1</label>

                                <input id='nvGalop-2' name='nvGalop' type='radio' value='2'>
                                <label for='nvGalop-2'>2</label>

                                <input id='nvGalop-3' name='nvGalop' type='radio' value='3'>
                                <label for='nvGalop-3'>3</label>

                                <input id='nvGalop-4' name='nvGalop' type='radio' value='4'>
                                <label for='nvGalop-4'>4</label>

                                <input id='nvGalop-5' name='nvGalop' type='radio' value='5'>
                                <label for='nvGalop-5'>5</label>

                                <input id='nvGalop-6' name='nvGalop' type='radio' value='6'>
                                <label for='nvGalop-6'>6</label>

                                <input id='nvGalop-7' name='nvGalop' type='radio' value='7'>
                                <label for='nvGalop-7'>7</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="create">Ajouter le cavalier</button>
        </form>
    </div>
</body>