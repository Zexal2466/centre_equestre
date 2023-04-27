<?php

include '../../defines.inc.php';

class Pension
{
       //Propriétés 

       /**
        * Nom de la pension
        *
        * @var string
        */
       private $libellePension;

       /**
        * Tarif de la pension
        * 
        * @var string
        */
       private $tarifPension;

       /**
        * Date de début de la pension
        *
        * @var string
        */
       private $dateDebut;

       /**
        * Durée de la pension
        * 
        * @var string
        * 
        */
       private $duree;

       /**
        * constructeur d'un Cheval
        *
        * @param string $libellePension
        * @param string $tarifPensio
        * @param string $DateDebut
        * @param string $duree
        */
       public function __construct(string $lp, string $tp, string $dd, string $d)
       {
              $this->libellePension = $lp;
              $this->tarifPension = $tp;
              $this->dateDebut = $dd;
              $this->duree = $d;
       }


       /**
        * Get the value of lp
        */
       public function getLp()
       {
              return $this->lp;
       }

       /**
        * Set the value of lp
        *
        * @return  self
        */
       public function setLp($lp)
       {
              $this->lp = $lp;

              return $this;
       }

       /**
        * Get the value of tp
        */
       public function getTp()
       {
              return $this->tp;
       }

       /**
        * Set the value of tp
        *
        * @return  self
        */
       public function setTp($tp)
       {
              $this->tp = $tp;

              return $this;
       }

       /**
        * Get the value of dd
        */
       public function getDd()
       {
              return $this->dd;
       }

       /**
        * Set the value of dd
        *
        * @return  self
        */
       public function setDd($dd)
       {
              $this->dd = $dd;

              return $this;
       }

       /**
        * Get the value of d
        */
       public function getD()
       {
              return $this->d;
       }

       /**
        * Set the value of d
        *
        * @return  self
        */
       public function setD($d)
       {
              $this->d = $d;

              return $this;
       }
}
