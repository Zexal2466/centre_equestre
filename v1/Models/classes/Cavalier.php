<?php

require('Personne.php');
require('../../Models/pdo.php');


/**
 * Personne Cavalier (hérite de Personne)
 */
class Cavalier extends Personne
{
    //Propriétés 

    /**
     * lien de la photo du cavalier
     *
     * @var string
     */
    private $photo;

    /**
     * nombre de galop du cavalier
     *
     * @var int
     */
    private $niveauGalop;

    /**
     * numéro de la licence FFE du cavalier
     *
     * @var string
     */
    private $numeroLicence;

    /**
     * constructeur d'un Cavalier
     *
     * @param string $nom
     * @param string $prenom
     * @param string $dna
     * @param string $mail
     * @param integer $tel
     * @param boolean $actif
     * @param integer $photo
     * @param string $galop
     * @param string $licence
     */
    public function __construct(string $n, string $p, string $dna, string $m, int $t, bool $a = true, string $ph, int $g, string $l)
    {
        // On transfère les informations nécessaires au constructeur de Cavalier
        parent::__construct($n, $p, $dna, $m, $t, $a);
        $this->photo = $ph;
        $this->niveauGalop = $g;
        $this->numeroLicence = $l;
    }


    /**
     * Get lien de la photo du cavalier
     *
     * @return  string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set lien de la photo du cavalier
     *
     * @param  string  $photo  lien de la photo du cavalier
     *
     * @return  self
     */
    public function setPhoto(string $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get nombre de galop du cavalier
     *
     * @return  int
     */
    public function getNiveauGalop()
    {
        return $this->niveauGalop;
    }

    /**
     * Set nombre de galop du cavalier
     *
     * @param  int  $niveauGalop  nombre de galop du cavalier
     *
     * @return  self
     */
    public function setniveauGalop(int $galop)
    {
        $this->niveauGalop = $galop;

        return $this;
    }

    /**
     * Get numéro de la licence FFE du cavalier
     *
     * @return  string
     */
    public function getnumeroLicence()
    {
        return $this->numeroLicence;
    }

    /**
     * Set numéro de la licence FFE du cavalier
     *
     * @param  string  $numeroLicence  numéro de la licence FFE du cavalier
     *
     * @return  self
     */
    public function setnumeroLicence(string $numeroLicence): self
    {
        $this->numeroLicence = $numeroLicence;

        return $this;
    }

    const errmessage = "Une erreur s'est produite, signalez la à l'administrateur \n";


    public function create($nom, $prenom, $dna, $mail, $telephone, $photo, $galop, $licence)
    {
        global $db;

        // Traitement des images 
        $dir_name = "../../UploadImg/";

        /* if (isset($_POST['submit'])) { */

        $tmpName = $_FILES['photo']['tmp_name'];
        $name = $_FILES['photo']['name'];
        $size = $_FILES['photo']['size'];
        $error = $_FILES['photo']['error'];

        $tabExtension = explode('.', $name);
        $extension = strtolower(end($tabExtension));

        $format = ['jpg', 'png', 'jpeg', 'gif'];
        $maxSize = 4000000;

        if (in_array($extension, $format) && $size <= $maxSize && $error == 0) {
            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $file = $uniqueName . "." . $extension;
            //$file = 5f586bf96dcd38.73540086.jpg
            move_uploaded_file($tmpName, $dir_name . $file);
        } else {
            echo "Mauvaise extension ou taille trop grande";
        }


        $request = "INSERT INTO personne (nom, prenom, dateNaissance, mail, telephone, photo, niveauGalop, numeroLicence, actif) VALUES(:nom, :prenom, :dateNaissance, :mail, :telephone, :photo, :niveauGalop, :numeroLicence, 1)";
        $sql = $db->prepare($request);
        $sql->bindValue(':nom', $nom, PDO::PARAM_STR);
        $sql->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $sql->bindValue(':dateNaissance', $dna, PDO::PARAM_STR);
        $sql->bindValue(':mail', $mail, PDO::PARAM_STR);
        $sql->bindValue(':photo', $file, PDO::PARAM_STR);
        $sql->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        $sql->bindValue(':niveauGalop', $galop, PDO::PARAM_INT);
        $sql->bindValue(':numeroLicence', $licence, PDO::PARAM_STR);

        try {
            $sql->execute();
            header("Location: ../../View/formulaires/formCavalier.php");
            return true;
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
        die();
    }

    public function findAll()
    {
        global $db;
        $request = "SELECT * FROM personne WHERE actif='1'";
        $sql = $db->prepare($request);
        try {
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function findById($id)
    {
        global $db;
        $request = "SELECT * FROM personne WHERE actif='1' AND ID_Personne =:id";
        $sql = $db->prepare($request);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        try {
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function updateById($id, $nom, $prenom, $dna, $mail, $telephone, $file, $galop, $licence)
    {
        global $db;

        // Traitement des images 
        $dir_name = "../../UploadImg/";

        /* if (isset($_POST['submit'])) { */

        $tmpName = $_FILES['photo']['tmp_name'];
        $name = $_FILES['photo']['name'];
        $size = $_FILES['photo']['size'];
        $error = $_FILES['photo']['error'];

        $tabExtension = explode('.', $name);
        $extension = strtolower(end($tabExtension));

        $format = ['jpg', 'png', 'jpeg', 'gif'];
        $maxSize = 4000000;

        if (in_array($extension, $format) && $size <= $maxSize && $error == 0) {
            $uniqueName = uniqid('', true);
            //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
            $file = $uniqueName . "." . $extension;
            //$file = 5f586bf96dcd38.73540086.jpg
            move_uploaded_file($tmpName, $dir_name . $file);
        } else {
            echo "Mauvaise extension ou taille trop grande";
        }

        $request = "UPDATE personne SET nom =:nom, prenom =:prenom, dateNaissance =:dateNaissance, mail =:mail, telephone =:telephone, photo =:photo, niveauGalop =:niveauGalop, numeroLicence =:numeroLicence WHERE ID_Personne = :id";
        $sql = $db->prepare($request);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        $sql->bindValue(':nom', $nom, PDO::PARAM_STR);
        $sql->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $sql->bindValue(':dateNaissance', $dna, PDO::PARAM_STR);
        $sql->bindValue(':mail', $mail, PDO::PARAM_STR);
        $sql->bindValue(':photo', $file, PDO::PARAM_STR);
        $sql->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        $sql->bindValue(':niveauGalop', $galop, PDO::PARAM_INT);
        $sql->bindValue(':numeroLicence', $licence, PDO::PARAM_STR);
        try {
            return $sql = $sql->execute();
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function deleteById($id)
    {
        global $db;
        $request = "UPDATE personne SET actif = 0 WHERE ID_Personne = :id";
        $sql = $db->prepare($request);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        try {
            $sql = $sql->execute();
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }
}
if (isset($_POST['back'])) {
    header("Location: ../../View/formulaires/listeCavalier.php");
}

$cav = new Cavalier('', '', '', '', 0, '', '', 1, '');
if (isset($_POST['submit'])) {
    $cavCreate = $cav->create($_POST['nom'], $_POST['prenom'], $_POST['dna'], $_POST['mail'], $_POST['telephone'], $_FILES['photo'], $_POST['nvGalop'], $_POST['licence']);
    header("Location: ../../View/formulaires/listeCavalier.php");
}

if (isset($_POST['Update'])) {
    $cavUpdate = $cav->updateById($_POST['ID_Personne'], $_POST['nom'], $_POST['prenom'], $_POST['dna'], $_POST['mail'], $_POST['telephone'], $_FILES['photo'], $_POST['nvGalop'], $_POST['licence']);
    header("Location: ../../View/formulaires/listeCavalier.php");
}
$cavFind = $cav->findAll();

if (isset($_GET['DeleteById'])) {
    $cavDelete = $cav->deleteById($_GET['DeleteById']);
    header("Location: ../../View/formulaires/listeCavalier.php");
}

if (isset($_GET['UpdateById'])) {
    $cavFindId = $cav->findById($_GET['UpdateById']);
}


/* 
REQUETE ID Responsable
SELECT CAV.nom, CAV.prenom
FROM personne cav LEFT JOIN
PersonneResp
ON CAV.idResp = Resp.idpers
*/