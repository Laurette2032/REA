<?php

include_once ("../models/A_model.class.php");

// fonction de la classe
function Appel_frigo(){
     $data = [];
    try {
        $bdd = self::getBdd();
        //requête pour stocker le contenu de toute la table le 
        //contenu est stocké dans le tableau $reponse
        $reponse = $bdd->query(
            'SELECT *
            FROM recipe_page
            WHERE ingredient1 AND ingredient2  
        ;');

        //parcours du résultat de la requête
        while ($donnees = $reponse->fetch()) {
            $data[] = $donnees;
        }
    } catch (Exception $e) {
        //affichage d'une exception en cas d’erreur
        die('Erreur : ' . $e->getMessage());
    }
    return $data;
};