<?php


include '../../defines.inc.php';


class Model
{
    // Table de la base de données
    protected $table;

    // Instance de Db 
    private $db;


    //------------------------------------READ---------------------------------//

    /**
     * Récupération de l'ensemble de la table
     *
     * @return array
     */
    public function findAll()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table);
        return $query->fetchAll();
    }


    /**
     * Récupération de la tables avec condition WHERE
     *
     * @param array $criteres tableau associatif champs => valeur
     * @return array
     */
    public function findBy(array $criteres)
    {
        $champs = [];
        $valeurs = [];

        // On boucle pour éclater le tableau
        foreach ($criteres as $champ => $valeur) {
            // SELECT * FROM personnes WHERE actif = ? 
            // bindValue(1, valeur)
            $champs[] = "$champ = ?";
            $valeurs[] = $valeur;
        }
        // echo '<pre>';
        // var_dump($champs);
        // var_dump($valeurs);
        // echo '</pre>';

        //On transforme le tableau 'champs' en une chaine de caractères
        $liste_champs = implode(' AND ', $champs);
        echo $liste_champs;

        // On execute la requete
        return $this->requete('SELECT * FROM ' . $this->table . ' WHERE ' . $liste_champs, $valeurs)->fetchAll();
    }


    /**
     * Récupération d'une ligne selon idPersonne
     *
     * @param integer $id
     * @return array
     */
    public function find(int $id)
    {
        return $this->requete("SELECT * FROM $this->table WHERE idPersonne = $id")->fetch();
    }


    //------------------------------------CREATE---------------------------------//


    public function create(Model $model)
    { {
            $champs = [];
            $inter = [];
            $valeurs = [];

            // On boucle pour éclater le tableau
            foreach ($model as $champ => $valeur) {
                // INSERT INTO personnes (nom, prenom, dateNaissance) VALUES (?, ?, ?)
                if ($valeur != null && $champ != 'db' && $champ != 'table') {
                    $champs[] = $champ;
                    $inter[] = "?";
                    $valeurs[] = $valeur;
                }
            }

            //On transforme le tableau 'champs' en une chaine de caractères
            $liste_champs = implode(', ', $champs);
            $liste_inter = implode(', ', $inter);

            // On execute la requete
            return $this->requete('INSERT INTO ' . $this->table . ' (' . $liste_champs . ') 
            VALUES(' . $liste_inter . ')', $valeurs);
        }
    }


    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à la clé (key)
            // nom -> setNom
            $setter = 'set' . ucfirst($key);

            // On vérifie si le setter existe
            if (method_exists($this, $setter)) {
                // On appelle le setter
                $this->$setter($value);
            }
        }
        return $this;
    }



    //------------------------------------PREPARATION & EXECUTION DE LA REQUETE---------------------------------//

    public function requete(string $sql, array $attributs = null)
    {
        // On récupère l'instance de Db 
        $this->db = Db::getInstance();

        // On vérifie si on a des attributs
        if ($attributs !== null) {
            // Requête préparée
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;
        } else {
            // Requête simple
            return $this->db->query($sql);
        }
    }
}
