<?php

class Pension
{
    private $libellePension;
    private $tarifPension;
    private $dateDebut;
    private $dateFin;

    public function __construct($libP, $tarP, $dD, $dF)
    {
        $this->libellePension = $libP;
        $this->tarifPension = $tarP;
        $this->dateDebut = $dD;
        $this->dateFin = $dF;
    }

    /**
     * Get the value of libellePension
     */
    public function getLibellePension()
    {
        return $this->libellePension;
    }

    /**
     * Set the value of libellePension
     *
     * @return  self
     */
    public function setLibellePension($libP)
    {
        $this->libellePension = $libP;

        return $this;
    }

    /**
     * Get the value of tarifPension
     */
    public function getTarifPension()
    {
        return $this->tarifPension;
    }

    /**
     * Set the value of tarifPension
     *
     * @return  self
     */
    public function setTarifPension($tarP)
    {
        $this->tarifPension = $tarP;

        return $this;
    }

    /**
     * Get the value of dateDebut
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */
    public function setDateDebut($dD)
    {
        $this->dateDebut = $dD;

        return $this;
    }

    /**
     * Get the value of dateFin
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     *
     * @return  self
     */
    public function setDateFin($dF)
    {
        $this->dateFin = $dF;

        return $this;
    }
    private $errmessage = 'Une erreur est survenue : ';

    public function create(string $libP, float $tarP, string $dD, string $dF)
    {
        global $db;
        $request = "INSERT INTO pension (libellePension, tarifPension, dateDebut, dateFin, actif) VALUES(:libP, :tarP, :dD, :dF, 1)";
        $sql = $db->prepare($request);
        $sql->bindValue(':libP', $libP, PDO::PARAM_STR);
        $sql->bindValue(':tarP', $tarP, PDO::PARAM_INT);
        $sql->bindValue(':dD', $dD, PDO::PARAM_STR);
        $sql->bindValue(':dF', $dF, PDO::PARAM_STR);
        try {
            return $sql->execute();
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function findAll()
    {
        global $db;
        $request = "SELECT * FROM pension WHERE actif='1'";
        $sql = $db->prepare($request);
        try {
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function findById($idP)
    {
        global $db;
        $request = "SELECT * FROM pension WHERE actif='1' AND ID_Pension =:idP";
        $sql = $db->prepare($request);
        $sql->bindValue(':idP', $idP, PDO::PARAM_INT);
        try {
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function updateById($idP, $libP, $tarP, $dD, $dF)
    {
        global $db;
        $request = "UPDATE pension SET libellePension = :libP, tarifPension = :tarP, dateDebut = :dD, dateFin = :dF WHERE ID_Pension = :idP";
        $sql = $db->prepare($request);
        $sql->bindValue(':idP', $idP, PDO::PARAM_INT);
        $sql->bindValue(':libP', $libP, PDO::PARAM_STR);
        $sql->bindValue(':tarP', $tarP, PDO::PARAM_INT);
        $sql->bindValue(':dD', $dD, PDO::PARAM_STR);
        $sql->bindValue(':dF', $dF, PDO::PARAM_STR);
        try {
            return $sql->execute();
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }

    public function deleteById($idP)
    {
        global $db;
        $request = "UPDATE pension SET actif = 0 WHERE ID_Pension = :idP";
        $sql = $db->prepare($request);
        $sql->bindValue(':idP', $idP, PDO::PARAM_INT);
        try {
            return $sql->execute();
        } catch (PDOException $e) {
            return $this->errmessage . $e->getMessage();
        }
    }
}
