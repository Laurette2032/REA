<?php

// include 

//ajout de la vue
include('MPC_vue_article.php');
//connexion à la BDD
include('MPC_task_connect.php');


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

?>