<?php
require("trait.php")
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Upload Image</title>
</head>

<body>
    <div class="text-center mt-5">
        <h1 class="fs-4">Ajouter une image :</h1>
        <form action="trait.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="  submit" name="uploader">Uploader</button>
        </form>
        <h1 class="fs-4">Lister les images : </h1>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <button type="submit" name="list">Afficher</button>
            <button type="submit" name="delete">Supprimer les images</button>
        </form>
        <?php
        if (isset($_POST['list'])) {
            $req = $db->query('SELECT id, name FROM file');
            while ($data = $req->fetch()) {
                echo "<img src='./upload/" . $data['name'] . "' width='300px' ><br>";
        ?>
        <?php
            }
        } else {
            echo "Aucune image à afficher";
        }
        if (isset($_POST['delete'])) {
            $req = $db->query('DELETE FROM file');
        }
        ?>

    </div>
</body>

</html>