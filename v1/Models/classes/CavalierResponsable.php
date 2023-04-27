<?php

require('Personne.php');
require('../../Models/pdo.php');

class CavalierResponsable extends Cavalier
{
    /**
     * Nom de la rue
     *
     * @var string
     */
    private $rue;

    /**
     * Le complément d'adresse
     *
     * @var string
     */
    private $complementAdresse;

    /**
     * Le code postal
     *
     * @var int
     */
    private $codePostal;

    /**
     * Le nom de la ville
     *
     * @var string
     */
    private $ville;

    // Constructeur
    public function __construct(string $n, string $p, string $dna, string $m, int $t, bool $a = true, string $ph, int $g, string $l, string $r, string $ca, int $cp, string $v)
    {
        Parent::__construct($n, $p, $dna, $m, $t, $a, $ph, $g, $l);
        $this->rue = $r;
        $this->complementAdresse = $cp;
        $this->codePostal = $ca;
        $this->ville = $v;
    }

    /**
     * Get le code postal
     *
     * @return  int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set le code postal
     *
     * @param  int  $codePostal  Le code postal
     *
     * @return  self
     */
    public function setCodePostal(int $codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get le nom de la ville
     *
     * @return  string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set le nom de la ville
     *
     * @param  string  $ville  Le nom de la ville
     *
     * @return  self
     */
    public function setVille(string $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get le complément d'adresse
     *
     * @return  string
     */
    public function getComplementAdresse()
    {
        return $this->complementAdresse;
    }

    /**
     * Set le complément d'adresse
     *
     * @param  string  $complementAdresse  Le complément d'adresse
     *
     * @return  self
     */
    public function setComplementAdresse(string $complementAdresse)
    {
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Get nom de la rue
     *
     * @return  string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set nom de la rue
     *
     * @param  string  $rue  Nom de la rue
     *
     * @return  self
     */
    public function setRue(string $rue)
    {
        $this->rue = $rue;

        return $this;
    }


/*     public function createResponsable($nom, $prenom, $dna, $mail, $telephone, $photo, $galop, $licence, $rue, $complementAdresse, $codePostal, $ville,)
    {   
        global $db;
        $request = "INSERT INTO personne (nom, prenom, dateNaissance, mail, telephone, photo, niveauGalop, numeroLicence, rue, complementAdrese, codePostal, ville, actif) VALUES(:nom, :prenom, :dateNaissance, :mail, :telephone, :photo, :niveauGalop, :numeroLicence, :rue, :complementAdrese, :codePostal, :ville 1)";
        $sql = $db->prepare($request);
        $sql->bindValue(':nom', $nom, PDO::PARAM_STR);
        $sql->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $sql->bindValue(':dateNaissance', $dna, PDO::PARAM_STR);
        $sql->bindValue(':mail', $mail, PDO::PARAM_STR);
        $sql->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        $sql->bindValue(':photo', $photo, PDO::PARAM_STR);
        $sql->bindValue(':niveauGalop', $galop, PDO::PARAM_INT);
        $sql->bindValue(':numeroLicence', $licence, PDO::PARAM_STR);
        $sql->bindValue(':rue', $rue, PDO::PARAM_STR);
        $sql->bindValue(':complementAdresse', $complementAdresse, PDO::PARAM_STR);
        $sql->bindValue(':codePostal', $codePostal, PDO::PARAM_INT);
        $sql->bindValue(':ville', $ville, PDO::PARAM_STR);
        $sql->execute();

        header('Location: ../../index.php');
    } */
    public function createResponsable($nom, $prenom, $dna, $mail, $telephone, $photo, $galop, $licence, $rue, $complementAdresse, $codePostal, $ville,)
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

        /*     $req = $db->prepare('INSERT INTO personne (photo) VALUES (?)');
        $req->execute([$file]); */

       // $request = "INSERT INTO personne (nom, prenom, dateNaissance, mail, telephone, photo, niveauGalop, numeroLicence, actif) VALUES(:nom, :prenom, :dateNaissance, :mail, :telephone, :photo, :niveauGalop, :numeroLicence, 1)";
        //global $db;
        $request = "INSERT INTO personne (nom, prenom, dateNaissance, mail, telephone, photo, niveauGalop, numeroLicence, rue, complementAdrese, codePostal, ville, actif) VALUES(:nom, :prenom, :dateNaissance, :mail, :telephone, :photo, :niveauGalop, :numeroLicence, :rue, :complementAdrese, :codePostal, :ville, 1)";
        $sql = $db->prepare($request);
        $sql->bindValue(':nom', $nom, PDO::PARAM_STR);
        $sql->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $sql->bindValue(':dateNaissance', $dna, PDO::PARAM_STR);
        $sql->bindValue(':mail', $mail, PDO::PARAM_STR);
        $sql->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        $sql->bindValue(':photo', $photo, PDO::PARAM_STR);
        $sql->bindValue(':niveauGalop', $galop, PDO::PARAM_INT);
        $sql->bindValue(':numeroLicence', $licence, PDO::PARAM_STR);
        $sql->bindValue(':rue', $rue, PDO::PARAM_STR);
        $sql->bindValue(':complementAdresse', $complementAdresse, PDO::PARAM_STR);
        $sql->bindValue(':codePostal', $codePostal, PDO::PARAM_INT);
        $sql->bindValue(':ville', $ville, PDO::PARAM_STR);
        $sql->execute();

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

    public function updateById1($id, $nom, $prenom, $dna, $mail, $telephone,$photo, $galop, $licence,$rue,$complementAdresse,$codePostal, $ville,)
    {
        global $db;
        $request = "UPDATE personne SET nom =:nom, prenom =:prenom, dateNaissance =:dateNaissance, mail =:mail, telephone =:telephone, niveauGalop =:niveauGalop, numeroLicence =:numeroLicence, rue =:rue, complementAdresse=:complementAdresse, codePoste=:codepostal, ville=:ville WHERE ID_Personne = :id";
        $sql = $db->prepare($request);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        $sql->bindValue(':nom', $nom, PDO::PARAM_STR);
        $sql->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $sql->bindValue(':dateNaissance', $dna, PDO::PARAM_STR);
        $sql->bindValue(':mail', $mail, PDO::PARAM_STR);
        $sql->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        $sql->bindValue(':photo', $photo, PDO::PARAM_STR);
        $sql->bindValue(':niveauGalop', $galop, PDO::PARAM_INT);
        $sql->bindValue(':numeroLicence', $licence, PDO::PARAM_STR);
        $sql->bindValue(':rue', $rue, PDO::PARAM_STR);
        $sql->bindValue(':complementAdresse', $complementAdresse, PDO::PARAM_STR);
        $sql->bindValue(':codePostal', $codePostal, PDO::PARAM_INT);
        $sql->bindValue(':ville', $ville, PDO::PARAM_STR);
        $sql->execute();
        
        try {
            $sql = $sql->execute();
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

$cav = new CavalierResponsable('','','','','',1,'',1,'','','',19100,'');
if (isset($_POST['submit'])) {
    $cavCreate = $cav->create($_POST['nom'], $_POST['prenom'], $_POST['dna'], $_POST['mail'], $_POST['telephone'], $_POST['photo'], $_POST['nvGalop'], $_POST['licence'],$_POST['rue'],$_POST['complemntAdresse'],$_POST['codePostal'],$_POST['ville']);
}

if (isset($_POST['Update'])) {

    $cavUpdate = $cav->updateById1($_POST['ID_Personne'],$_POST['nom'], $_POST['prenom'], $_POST['dna'], $_POST['mail'], $_POST['telephone'], $_POST['photo'], $_POST['nvGalop'], $_POST['licence'],$_POST['rue'],$_POST['complemntAdresse'],$_POST['codePostal'],$_POST['ville']);
}
$cavFind = $cav->findAll();

if (isset($_GET['DeleteById'])) {
    $cavDelete = $cav->deleteById($_GET['DeleteById']);
}

if (isset($_GET['UpdateById1'])) {
    $cavFindId = $cav->findById($_GET['UpdateById1']);
}

//$z = new CavalierResponsable ('','','','','',1,'',7,'','','',19100,'');
//$z = $z->createResponsable($_POST['nom'], $_POST['prenom'], $_POST['dna'], $_POST['mail'], $_POST['telephone'], $_POST['photo'], $_POST['nvGalop'], $_POST['licence'],$_POST['rue'],$_POST['complemntAdresse'],$_POST['codePostal'],$_POST['ville']);
