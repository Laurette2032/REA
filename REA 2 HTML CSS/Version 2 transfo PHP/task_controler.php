<?php

// include 

//ajout de la vue
include('task_vue_article.php');
//connexion à la BDD
include('task_connect.php');


// requete complexe 

if (isset($_POST["name_user"])&& 
    isset($_POST["first_name_user"])&& 
    isset($_POST["login_user"])&& 
    isset($_POST["pswd_user"])){ 
    
    // on affecte 

$name_user=$_POST["name_user"];
$first_name_user=$_POST["first_name_user"];
$login_user=$_POST["login_user"];
$password_user=$_POST["pswd_user"];

include('task_model_article.php');
}


// // requete select pour afficher les comptes utilisateurs

// $req = $bdd->prepare('SELECT * FROM user where name_user= :name_user');
// $req->execute(array('name_user' => iconv("UTF-8", "ISO-8859-1//TRANSLIT",$name_user),));
// while ($donnees = $reponse->fetch()){echo '<p>'.$donnees['name_user'].'</p>';}


?>