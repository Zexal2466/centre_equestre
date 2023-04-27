<?php

class Users
{
    private $idConn;
    private $email;
    private $motDePasse;
    private $role;
    private $idPersonne;

    public function __construct($email,$mdp,$role,$idPersonne)
    {
        $this->email = $email;
        $this->motDePasse = $mdp;
        $this->role= $role;
        $this->idPersonne = $idPersonne;
        
    }


        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of mdp
         */ 
        public function getMotDPasse()
        {
                return  $this->motDePasse;
        }

        /**
         * Set the value of mdp
         *
         * @return  self
         */ 
        public function setMotDePasse($mdp)
        {
                $this->motDePasse = $mdp;

                return $this;
        }

        /**
         * Get the value of role
         */ 
        public function getRole()
        {
                return $this->role;
        }

        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setRole($role)
        {
                $this->role = $role;

                return $this;
        }

        /**
         * Get the value of idPersonne
         */ 
        public function getIdPersonne()
        {
                return $this->idPersonne;
        }

        /**
         * Set the value of idPersonne
         *
         * @return  self
         */ 
        public function setIdPersonne($idPersonne)
        {
                $this->idPersonne = $idPersonne;

                return $this;
        }
        
    private $errmessage = 'Une erreur est survenue : ';

        public function create($email, $mdp, $role, $idPersonne)
        {
            global $db;
            $request = "INSERT INTO users (mail_utilisateur, mot_de_passe, ID_Role, ID_personne, actif) VALUES(:email, :mdp,:role, :idPersonne, 1)";
            $sql = $db->prepare($request);
            $sql->bindValue(':email', $email, PDO::PARAM_STR);
            $sql->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $sql->bindValue(":role",$role,PDO::PARAM_INT);
            $sql->bindValue(':idPersonne', $idPersonne, PDO::PARAM_INT);
            try {
                return $sql->execute();
                echo 'aa';
                die();
            } catch (PDOException $e) {
                return $this->errmessage . $e->getMessage();
            }
        }
    
        public function findAll()
        {
            global $db;
            $request =
                "SELECT ID_Conn, mail_utilisateur, mot_de_passe, libRole, nom, prenom
                FROM users U
                INNER JOIN personne P ON U.ID_Personne = P.ID_Personne
                INNER JOIN role R ON U.ID_Role = R.ID_Role
                WHERE U.ID_Role='1'OR U.ID_Role='2'
                ORDER BY U.ID_Conn";
            $sql = $db->prepare($request);
            try {
                $sql->execute();
                return $sql->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return $this->errmessage . $e->getMessage();
            }
        }
    
        public function findById($idConn)
        {
            global $db;
            $request =
                "SELECT ID_Conn, mail_utilisateur, mot_de_passe, libRole, nom, prenom
                FROM users U
                INNER JOIN personne P ON U.ID_Personne = P.ID_Personne
                INNER JOIN role R ON U.ID_Role = R.ID_Role
                WHERE U.ID_Role='1'OR U.ID_Role='2'
                AND ID_Conn = :idConn";
    
            $sql = $db->prepare($request);
            $sql->bindValue(':idConn', $idConn, PDO::PARAM_INT);
            try {
                $sql->execute();
                return $sql->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return $this->errmessage . $e->getMessage();
            }
        }
            
        public function updateById($idConn, $email, $mdp, $role, $idPersonne)
        {
            global $db;
            $request = "UPDATE users SET mail_utilisateur = :email, mot_de_passe = :mdp, ID_Role = :role, ID_Personne = :idPersonne WHERE ID_Conn = :idConn";
            $sql = $db->prepare($request);
            $sql->bindValue(":idConn",$idConn, PDO::PARAM_INT);
            $sql->bindValue(':email', $email, PDO::PARAM_STR);
            $sql->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $sql->bindValue(':role', $role, PDO::PARAM_INT);
            $sql->bindValue(':idPersonne', $idPersonne, PDO::PARAM_INT);
            try {
                return $sql->execute();
            } catch (PDOException $e) {
                return $this->errmessage . $e->getMessage();
            }
        }
    
        public function deleteById($idConn)
        {
            global $db;
            $request = "UPDATE users SET actif = 0 WHERE ID_Conn= :idConn";
            $sql = $db->prepare($request);
            $sql->bindValue(':idConn', $idConn, PDO::PARAM_INT);
            try {
                return $sql->execute();
            } catch (PDOException $e) {
                return $this->errmessage . $e->getMessage();
            }
        }
    
        public function optionUtilisateur()
        {
            global $db;
            $request = "SELECT ID_Personne,mail, nom, prenom FROM personne WHERE actif = 1";
            $sql = $db->prepare($request);
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        public function optionRole()
        {
            global $db;
            $request = "SELECT ID_Role, libRole FROM role WHERE actif = 1";
            $sql = $db->prepare($request);
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
   

/*         public function optionPersonne()
        {
            global $db;
            $request = "SELECT ID_Personne, nom, prenom FROM personne WHERE actif = 1";
            $sql = $db->prepare($request);
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } */
}
    

