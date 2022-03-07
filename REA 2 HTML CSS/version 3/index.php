<?php
require_once "App/app.php";
App::AutoLoader();

if (empty($_GET['page'])) {
    require "views\MPC_view_accueil.php";
} else {
    $Recipe_page_controller = new Recipe_page_controller;
    switch ($_GET['page']) {
        case "accueil":
            require "views\MPC_view_accueil.php";
            break;
        case 'recipeAll':
            $Recipe_page_controller->afficher_recipe_page_all();
            break;
        case "recette":
            $Recipe_page_controller->afficher_recipe_page();
            break;
        case "frigo":
            $Controller_frigo->afficher_model_frigo();
            break;
      
    }
}
