<?php
class Ingredient extends Model
{

    private $id;
    private $name_ingredient;


    public function __construct($id, $name_ingredient)
    {
        $this->id = $id;
        $this->name_ingredient = $name_ingredient;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getname_ingredient()
    {
        return $this->name_ingredient;
    }
    public function setname_ingredient($name_ingredient)
    {
        $this->name_ingredient = $name_ingredient;
    }



    /*-----------------------
                Méthodes
        ------------------------*/
    public function read_ingredient()
    {
        // stockage dans variable de la préparation de la requête
        $vartemp = $this->connect->query('SELECT * FROM ' . $this->table . '');
        // je retourne le résultat
        return $vartemp;
    }


    //select
    public function select_ingredient($bdd)
    {
        // stockage dans variable de la préparation de la requête
        $vartemp = $this->connect->query(
            'SELECT * FROM ' .
                $this->table . ' WHERE name_ingredient = ' . $this->name_ingredient . ''
        );

        // je retourne le résultat
        return $vartemp;
    }


    // create

    public function create_ingredient($bdd)
    {
        $name_ingredient = $this->name_ingredient;

        try {
            //requête ajout d'un utilisateur
            $requete = $bdd->prepare(
                'INSERT INTO ingredient(name_ingredient) 
                    VALUES (:name_ingredient)'
            );
            // execution de la requete
            $requete->execute([
                'name_ingredient' => $name_ingredient
            ]);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    // update

    public function update_ingredient($bdd, $id)
    {
        $name_ingredient = $this->name_ingredient;

        try {
            $requete = $bdd->prepare('requete');
            $requete->execute([
                'name_ingredient' => $name_ingredient
            ]);
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
}
