<?php

class Category extends Model
{

    /*-----------------------
                Attributs
        ------------------------*/


    private $id;
    private $name_category;

    /*-----------------------
                constructeur
        ------------------------*/

    public function __construct($id, $name_category)
    {
        $this->id = $id;
        $this->name_category = $name_category;
    }


    /*-----------------------
                    getter and setter
        ------------------------*/

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getname_category()
    {
        return $this->name_category;
    }
    public function setname_category($name_category)
    {
        $this->name_ingredient = $name_category;
    }


    /*-----------------------
                Méthodes
        ------------------------*/

    public function read_category()
    {
        // stockage dans variable de la préparation de la requête
        $vartemp = $this->connect->query('SELECT * FROM ' . $this->table . '');
        // je retourne le résultat
        return $vartemp;
    }


    //select

    public function select_category($bdd)
    {
        // stockage dans variable de la préparation de la requête
        $vartemp = $this->connect->query('SELECT * FROM ' . $this->table . ' WHERE name_category = ' . $this->name_category . '');
        // je retourne le résultat
        return $vartemp;
    }


    // create

    public function create_category($bdd)
    {
        $name_category = $this->name_category;

        try {
            //requête ajout d'un utilisateur
            $requete = $bdd->prepare('INSERT INTO category(name_category) 
            VALUES (:name_category)');
            // execution de la requete
            $requete->execute([
                'name_category' => $name_category
            ]);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    // update

    public function update_category($bdd, $id)
    {
        $name_category = $this->name_category;

        try {
            $requete = $bdd->prepare('requete');
            $requete->execute([
                'name_category' => $name_category
            ]);
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
}
