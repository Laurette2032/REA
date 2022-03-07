<?php

class Recipe_page_controller
{
    private $recipe_page;
    private $Model;

    public function __construct()
    {
        $this->Model = new Model();
    }

    public function afficher_recipe_page()
    {
        $this->recipe_page = new Recipe_page;
        $this->recipe_page->select_recipe_page();
        $recipe_page = $this->recipe_manager->get_recipe();
        require "views\MPC_view_recipe.php";
    }

    public function afficher_recipe_page_all()
    {
        $recipeAll = $this->Model->select_recipe_page_all();
        require "views\MPC_view_recipe_all.php";
    }

    public function select_recipe_page_all()
    {
        $data = [];
        try {
            $bdd = self::getBdd();
            //requête pour stocker le contenu de toute la table le 
            //contenu est stocké dans le tableau $reponse
            $reponse = $bdd->query('SELECT * FROM recipe_page;');

            //parcours du résultat de la requête
            while ($donnees = $reponse->fetch()) {
                $data[] = $donnees;
            }
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
        return $data;
    }
}
