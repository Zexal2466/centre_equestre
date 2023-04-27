<?php

class Horse
{
    private $horseId;
    private $horseName;
    private $horseBirth;
    private $horseSire;
    private $photoHorse;


    public function __construct($id, $nc, $b, $si, $ph)
    {
        $this->id = $id;
        $this->name = $nc;
        $this->birth = $b;
        $this->sire = $si;
        $this->photo = $ph;
    }
    public function getID()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDna()
    {
        return $this->birth;
    }
    public function getSire()
    {
        return $this->sire;
    }
    public function getPhoto()
    {
        return $this->photo;
    }

    public function setID($id)
    {
        $this->id = $id;
    }
    public function setName($nc)
    {
        $this->name = $nc;
    }
    public function setDna($b)
    {
        $this->birth = $b;
    }
    public function setSire($si)
    {
        $this->sire = $si;
    }
    public function setPhoto($ph)
    {
        $this->photo = $ph;
    }
}

$horse = new Horse("1", "Jolly Jumper", "12/03/2014", "000000000", "");
echo $horse->getName();
echo "<br/>";
echo $horse->getId();
