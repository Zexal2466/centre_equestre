<a href="index.php">Liste</a>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<meta charset="utf-8"/>
<!-- Conteneur GRID principal -->
<div class="container-grid">
    <!-- Deuxième Conteneur GRID (Title + Photo) -->
    <div class="items items-photo">
        <!-- Div Title -->
        <div class="subItem-left-title">
            <p class="title_cav">AJOUTER UN UTILISATEUR</p>
        </div>
        <!-- Div Photo -->
        <div class="subItem-left-photo">
            <img src="../../styles/css/assets/img/form/cavalier3.PNG" alt="">
        </div>
    </div>
    <form class="items items-form" method="POST" action="traitement.php" enctype="multipart/form-data">
        <div class="subItem-right-1">
            <div class="subItem-name">
                <label>Email</label>
                <?php $mail = $oUsers->optionUtilisateur();?>
                <select name="mail">
                    <optgroup>
                        <?php
                        foreach ($mail as $value) {
                            echo "<option value='" . $value['mail'] . "' >" . $value['mail'] ."</option>";
                        }
                        ?>
                    </optgroup>
                </select>
            </div>
            <div class="subItem-name">
                <label>Nom et Prenom</label>
                <?php $utilisateur = $oUsers->optionUtilisateur();?>
                <select name="idPersonne">
                    <optgroup>
                        <?php
                        foreach ($utilisateur as $value2) {
                            echo "<option value='" . $value2['ID_Personne'] . "' >" . $value2['nom'] . $value2['prenom']."</option>";
                        }
                        ?>
                    </optgroup>
                </select>
            </div>
            <div class="subItem-name">
                <label>Rôle</label>
                <?php $role = $oUsers->optionRole();?>
            <select name="role">
                    <optgroup>
                        <?php
                        foreach ($role as $value3) {
                            echo "<option value='" . $value3['ID_Role'] .  "' >" .  $value3['libRole'] ."</option>";
                        }
                        ?>
                    </optgroup>
                    
            </select>
            <div class="subItem-right-6">
                    <button class="btn btn-next" name="submit">AJOUTER</button>
                </div>
                <div class="subItem-name">
  
                <label>Voici le mot de passe 
                <?php
                    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890/*-+&@$!?#£';
                    $pass = array(); 
                    $combLen = strlen($comb) - 1; 
                    for ($i = 0; $i < 12; $i++) {
                        $n = rand(0, $combLen);
                        $pass[] = $comb[$n];
                        }
                    //print(implode($pass)); 
                            ?>

                    
                </label>
                <input type="text" value="<?php echo utf8_encode((implode($pass))); ?>" name="mdp" />
                <input type="button" value="Nouveau mot de passe " id="refresh" />
                <script>
                    $('#refresh').on('click', function() {
                     location.reload();
                    });
                </script> 

            </div>
                


            </div>
<!--            <?php
                $to = 'LKM@gmail.com';
                $subject="Mot de passe de connexion";
                $message="voici votre mot de passe". "<?php require('create.php') ?>";
                $from = 'toto@email.com';

                // Envoi d'email
                if(mail($to, $subject, $message)){
                    echo 'Votre message a été envoyé avec succès!';
                } else{
                    echo 'Envoie impossible';
                }
            ?> -->
        
        </div>
</div>
