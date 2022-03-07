<?php

class Accueil_page_controller{
    private $recipe_page;

    public function __construct(){
        $this->recipe_page = new Recipe_page;
        
    }

    public function afficher_recipe_page(){
        $recipe_page = $this->recipe_manager->get_recipe();
        require "views\MPC_view_article.php";
    }
}