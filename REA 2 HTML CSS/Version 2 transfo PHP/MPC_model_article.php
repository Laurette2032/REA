
<?php

// requete avec formulaire conditionné aux réponses 


    
    try {
        $req = $bdd->prepare('INSERT INTO user (name_user, first_name_user, email_user ,pseudo_user, pswd_user) VALUES ( :name_user, :first_name_user, :email_user, :pseudo_user, :pswd_user)');
        $req->bindParam(":name_user", $name_user);
        $req->bindParam(":first_name_user", $first_name_user);
        $req->bindParam(":email_user", $email_user);
        $req->bindParam(":pseudo_user", $pseudo_user);
        $req->bindParam(":pswd_user", $password_user);
        $req->execute();

        $res = $bdd->prepare('SELECT * FROM user');
        $res->execute();
        while($donnees=$res->fetch()){   
            echo '<p><span>"'.$donnees['name_user'].'"</span><span>"'.$donnees['first_name_user'].'"</span><span>"'.$donnees['email_user'].'"</span>span>"'.$donnees['pseudo_user'].'"</span><span>"'.$donnees['pswd_user'].'"</span></p>';
        };


    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }


?>
