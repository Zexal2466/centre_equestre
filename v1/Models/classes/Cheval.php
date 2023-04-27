<?php


require('../../Models/pdo.php');

class Cheval
{

        //Propriétés 

        /**
         * Nom du cheval
         *
         * @var string
         */
        private $nomCheval;

        /**
         * Date de naissance du cavalier
         * 
         * @var string
         */
        private $dateNaissance;

        /**
         * numéro du Sire du cheval
         *
         * @var string
         */
        private $numeroSire;

        /**
         * Photo du cheval
         * 
         * @var string
         * 
         */
        private $photo;


        /**
         * constructeur d'un Cheval
         *
         * @param string $nom
         * @param string $dna
         * @param string $numeroSire
         * @param string $photo
         */
        public function __construct(string $n, string $dna, string $si, string $ph)
        {
                $this->nom = $n;
                $this->dna = $dna;
                $this->sire = $si;
                $this->photo = $ph;
        }



        /**
         * Get nom du cheval
         *
         * @return  string
         */
        public function getNomCheval()
        {
                return $this->nomCheval;
        }

        /**
         * Set nom du cheval
         *
         * @param  string  $nomCheval  Nom du cheval
         *
         * @return  self
         */
        public function setNomCheval(string $nomCheval)
        {
                $this->nomCheval = $nomCheval;

                return $this;
        }

        /**
         * Get date de naissance du cavalier
         *
         * @return  string
         */
        public function getDateNaissance()
        {
                return $this->dateNaissance;
        }

        /**
         * Set date de naissance du cavalier
         *
         * @param  string  $dateNaissance  Date de naissance du cavalier
         *
         * @return  self
         */
        public function setDateNaissance(string $dateNaissance)
        {
                $this->dateNaissance = $dateNaissance;

                return $this;
        }

        /**
         * Get numéro du Sire du cheval
         *
         * @return  string
         */
        public function getNumeroSire()
        {
                return $this->numeroSire;
        }

        /**
         * Set numéro du Sire du cheval
         *
         * @param  string  $numeroSire  numéro du Sire du cheval
         *
         * @return  self
         */
        public function setNumeroSire(string $numeroSire)
        {
                $this->numeroSire = $numeroSire;

                return $this;
        }

        /**
         * Get photo du cheval
         *
         * @return  string
         */
        public function getPhoto()
        {
                return $this->photo;
        }

        /**
         * Set photo du cheval
         *
         * @param  string  $photo  Photo du cheval
         *
         * @return  self
         */
        public function setPhoto(string $photo)
        {
                $this->photo = $photo;

                return $this;
        }

        public function findAll()
        {
                global $db;
                $request = "SELECT * FROM cheval WHERE actif='1'";
                $sql = $db->prepare($request);
                try {
                        $sql->execute();
                        return $sql->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                        return $this->errmessage . $e->getMessage();
                }
        }

        const errmessage = "Une erreur s'est produite, signalez la à l'administrateur \n";

        public function create($nomCheval, $dateNaissance, $numeroSire)
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

                $request = "INSERT INTO cheval (nom_Cheval, DateNaissance_Cheval, SIR, actif) VALUES(:nom, :dateNaissance, :SIR, 1)";
                $sql = $db->prepare($request);
                $sql->bindValue(':nom', $nomCheval, PDO::PARAM_STR);
                $sql->bindValue(':DateNaissance_Cheval', $dateNaissance, PDO::PARAM_STR);
                $sql->bindValue(':SIR', $numeroSire, PDO::PARAM_STR);
                try {
                        $sql->execute();
                        header("Location: ../../View/formulaires/formCavalier.php");
                        return true;
                } catch (PDOException $e) {
                        return $this->errmessage . $e->getMessage();
                }
                die();
        }

        public function findById($id)
        {
                global $db;
                $request = "SELECT * FROM cheval WHERE actif='1' AND ID_Cheval =:id";
                $sql = $db->prepare($request);
                $sql->bindValue(':id', $id, PDO::PARAM_INT);
                try {
                        $sql->execute();
                        return $sql->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                        return $this->errmessage . $e->getMessage();
                }
        }

        public function updateById($id, $nom, $dna, $sire)
        {
                global $db;
                $request = "UPDATE cheval SET nom_Cheval =:nom, DateNaissance_Cheval =:dna, , SIR =:sire WHERE ID_Personne = :id";
                $sql = $db->prepare($request);
                $sql->bindValue(':id', $id, PDO::PARAM_INT);
                $sql->bindValue(':nom', $nom, PDO::PARAM_STR);
                $sql->bindValue(':dateNaissance', $dna, PDO::PARAM_STR);
                $sql->bindValue(':sire', $sire, PDO::PARAM_STR);
                /*     $sql->bindValue(':photo', $file, PDO::PARAM_STR); */

                try {
                        $sql = $sql->execute();
                } catch (PDOException $e) {
                        return $this->errmessage . $e->getMessage();
                }
        }
}

$cheval = new Cheval('', '', '', '');
if (isset($_POST['submit'])) {
        $chevCreate = $cheval->create($_POST['nom'], $_POST['dna'], $_POST['sire']);
}

$chevaux = $cheval->findAll();

if (isset($_POST['UpdateById'])) {

        $chevUpdate = $cheval->updateById($_GET['UpdateById'], $_POST['nom'], $_POST['dna'], $_POST['sire']);
}

$cheFindId = $cheval->findById($_GET['UpdateById']);
