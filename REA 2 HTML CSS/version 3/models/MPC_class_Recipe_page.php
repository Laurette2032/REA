<?php
class Recipe_page extends Model
{
    /*-----------------------
                Attributs
        ------------------------*/
    private $id_recipe_page;
    private $name_recipe_page;
    private $date_recipe_page;
    private $description_recipe_page;
    private $instruction_recipe_page;

    /*-----------------------
            getter and setter
        ------------------------*/
    //getter id
    public function getIdrecipe_page()
    {
        return $this->id_recipe_page;
    }
    //set id
    public function setIdrecipe_page($newId)
    {
        $this->id_recipe_page = $newId;
    }
    //getter name
    public function getName_recipe_page()
    {
        return $this->name_recipe_page;
    }
    //set name
    public function setName_recipe_page($newName)
    {
        $this->name_recipe_page = $newName;
    }
    //getter date
    public function getDate_recipe_page()
    {
        return $this->date_recipe_page;
    }
    //set date
    public function setdate_recipe_page($new_date_recipe_page)
    {
        $this->date_recipe_page = $new_date_recipe_page;
    }
    //getter description_recipe_page
    public function getdescriptionrecipe_page()
    {
        return $this->description_recipe_page;
    }
    //set description_recipe_page
    public function setdescriptionrecipe_page($new_description_recipe_page)
    {
        $this->description_recipe_page = $new_description_recipe_page;
    }

    //getter instruction
    public function getinstructionrecipe_page()
    {
        return $this->instruction_recipe_page;
    }
    //set instruction
    public function setinstructionrecipe_page($newinstruction)
    {
        $this->instruction_recipe_page = $newinstruction;
    }

    /*-----------------------
                Méthodes
        ------------------------*/
    //Création d'un recipe_page (insert)
    public function create_recipe_page()
    {
        $name = $this->name_recipe_page;
        $date = $this->date_recipe_page;
        $description = $this->description_recipe_page;
        $instruction = $this->instruction_recipe_page;

        try {
            $bdd = self::getBdd();
            //requête ajout d'une recette
            $req = $bdd->prepare('INSERT INTO recipe_page(name_recipe_page, date_recipe_page, description_recipe_page, instruction_recipe_page) 
                VALUES (:name_recipe_page, :date_recipe_page, :description_recipe_page, :instruction_recipe_page)');
            $req->execute([
                'name_recipe_page' => $name,
                'date_recipe_page' => $date,
                'instruction_recipe_page' => $instruction,
                'description_recipe_page' => $description
            ]);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    //Mise à jour d'un recipe_page (update) 
    public function update_recipe_page($bdd, $id)
    {
        $name = $this->name_recipe_page;
        $date = $this->date_recipe_page;
        $description = $this->description_recipe_page;
        $instruction = $this->instruction_recipe_page;
        try {
            //requête udpate d'un recipe_page
            $req = $bdd->prepare('req');
            //éxécution de la requête SQL
            $req->execute([
                'name_recipe_page' => $name,
                'date_recipe_page' => $date,
                'description_recipe_page' => $description,
                'instruction_recipe_page' => $instruction,
            ]);
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }
    //Suppression d'un recipe_page (delete) 
    public function delete_recipe_page($bdd, $id)
    {
        try {
            //requête delete d'un recipe_page
            $req = $bdd->prepare('req');
            //éxécution de la requête SQL
            $req->execute([
                'id_recipe_page' => $id,
            ]);
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }

    //Affichage d'un recipe_page (select)
    public function select_recipe_page()
    {
        $instruction = $this->name_recipe_page;
        try {
            $bdd = self::getBdd();
            //requête pour stocker le contenu de toute la table le 
            //contenu est stocké dans le tableau $reponse
            $reponse = $bdd->query('SELECT * FROM recipe_page WHERE name_recipe_page = $name');

            //parcours du résultat de la requête
            while ($donnees = $reponse->fetch()) {
                $id = $donnees['id_recipe_page'];

                //return $donnees['name_recipe_page'];
                if ($reponse == $donnees['name_recipe_page']) {
                    //retourne true si il existe
                    return true;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }
}
