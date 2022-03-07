<?php


//a reprendre sur le get recipe 
class Controller_frigo
{
    public function __construct(){
        $this->recipe_page = new Recipe_page;
    }

    public function afficher_model_frigo(){
        $frigo = $this->appel_frigo->getRecipe();
        require "views/view_frigo.php";
    }

    

}
