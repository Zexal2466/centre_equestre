<?php

class Signe
{
    private $ID_Personne;
    private $ID_Pension;

    public function __construct($idPers, $idPens)
    {
        $this->ID_Personne = $idPers;
        $this->ID_Pension = $idPens;
    }


    /**
     * Get the value of ID_Pension
     */
    public function getID_Pension()
    {
        return $this->ID_Pension;
    }

    /**
     * Set the value of ID_Pension
     *
     * @return  self
     */
    public function setID_Pension($ID_Pension)
    {
        $this->ID_Pension = $ID_Pension;

        return $this;
    }

    /**
     * Get the value of ID_Personne
     */
    public function getID_Personne()
    {
        return $this->ID_Personne;
    }

    /**
     * Set the value of ID_Personne
     *
     * @return  self
     */
    public function setID_Personne($ID_Personne)
    {
        $this->ID_Personne = $ID_Personne;

        return $this;
    }

    public function createSigne($idPers, $idPens)
    {
        global $db;
        $request = "INSERT INTO signe (ID_Personne, ID_Pension) VALUES(:idPers, :idPens)";
        $sql = $db->prepare($request);
        $sql->bindValue(':idPers', $idPers, PDO::PARAM_INT);
        $sql->bindValue(':idPens', $idPens, PDO::PARAM_INT);
        try {
            return $sql->execute();
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function updateSigne($idPers, $idPens)
    {
        global $db;
        $request = "UPDATE signe SET ID_Personne =:idPers WHERE ID_Pension = :idPens";
        $sql = $db->prepare($request);
        $sql->bindValue(':idPers', $idPers, PDO::PARAM_INT);
        $sql->bindValue(':idPens', $idPens, PDO::PARAM_INT);
        try {
            return $sql->execute();
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function findByIdSigne($idS)
    {
        global $db;
        $request = "SELECT PE.ID_Personne, PE.nom, PE.prenom
        FROM signe S 
        INNER JOIN pension P ON S.ID_Pension = P.ID_Pension
        INNER JOIN personne PE ON S.ID_Personne = PE.ID_Personne
        WHERE S.ID_Personne = :id";
        $sql = $db->prepare($request);
        $sql->bindValue(':id', $idS, PDO::PARAM_INT);
        try {
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }
}
