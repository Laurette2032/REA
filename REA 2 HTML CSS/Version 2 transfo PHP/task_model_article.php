
<?php

// $name_user="";
// $first_name_user="";
// $login_user="";
// $pswd_user="";


// requete avec formulaire conditionné aux réponses 

// if($name_user == null) {
//     echo '<p>Veuillez saisir un nom</p>';
// } elseif ($first_name_user == null) {
//     echo '<p>Veuillez saisir un prénom</p>';
// } elseif ($login_user == null) {
//     echo '<p>Veuillez saisir un identifiant</p>';
// }elseif ($password_user == null) {
//     echo '<p>Veuillez saisir un mot de passe</p>';
// } else {
//     $bdd = new PDO('mysql:host=localhost;dbname=task','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    
//     $bdd->exec("set names utf8");
    
    try {
        $req = $bdd->prepare('INSERT INTO user (name_user, first_name_user, login_user, pswd_user) VALUES ( :name_user, :first_name_user, :login_user, :pswd_user)');
        $req->bindParam(":name_user", $name_user);
        $req->bindParam(":first_name_user", $first_name_user);
        $req->bindParam(":login_user", $login_user);
        $req->bindParam(":pswd_user", $password_user);
        $req->execute();

        $res = $bdd->prepare('SELECT * FROM user');
        $res->execute();
        while($donnees=$res->fetch()){   
            echo '<p><span>"'.$donnees['name_user'].'"</span><span>"'.$donnees['first_name_user'].'"</span><span>"'.$donnees['login_user'].'"</span><span>"'.$donnees['pswd_user'].'"</span></p>';
        };


    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }


?>
