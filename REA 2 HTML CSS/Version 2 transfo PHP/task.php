<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article1511</title>


</head>
<body>
   <form action="#" method="post">
<input type = "text" name = "name_user">
<input type = "text" name = "first_name_user">
<input type = "text" name = "login_user">
<input type = "text" name = "pswd_user">
<input type = "submit" value = "Ajouter">

<?php

$name_user="";
$first_name_user="";
$login_user="";
$pswd_user="";


// requete avec formulaire conditionné aux réponses 

if($name_user == null) {
    echo '<p>Veuillez saisir un nom</p>';
} elseif ($first_name_user == null) {
    echo '<p>Veuillez saisir un prénom</p>';
} elseif ($login_user == null) {
    echo '<p>Veuillez saisir un identifiant</p>';
}elseif ($password_user == null) {
    echo '<p>Veuillez saisir un mot de passe</p>';
} else {
    $bdd = new PDO('mysql:host=localhost;dbname=task','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    
    $bdd->exec("set names utf8");
    
    try {
        $req = $bdd->prepare('INSERT INTO user (name_user, first_name_user, login_user, password_user) VALUES ( :name_user, :first_name_user, :login_user, :password_user)');
        $req->bindParam(":name_user", $name_user);
        $req->bindParam(":first_name_user", $first_name_user);
        $req->bindParam(":login_user", $login_user);
        $req->bindParam(":password_user", $password_user);
        $req->execute();

        $req = $bdd->prepare('SELECT * from user');
        $req->execute();
        while($donnees=$req->fetch()){   
            echo '<p><span>"'.$donnees['name_user'].'"</span><span>"'.$donnees['first_name_user'].'"</span><span>"'.$donnees['login_user'].'"</span><span>"'.$donnees['password_user'].'"</span></p>';
        };


    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}


// requete complexe 

if (isset($_POST["name_user"])&& 
    isset($_POST["first_name_user"])&& 
    isset($_POST["login_user"])&& 
    isset($_POST["pswd_user"])){ 
    
    // on affecte 

$name_user=$_POST["name_user"];
$first_name_user=$_POST["first_name_user"];
$login_user=$_POST["login_user"];
$pswd_user=$_POST["pswd_user"];

}

//--connexion à la BDD que l'on isole dans uen variable $BDD

$bdd = new PDO('mysql:host=localhost;dbname=task', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$bdd->exec("set names utf8");


//-- requete simple

$bdd-> query('INSERT INTO user (name_user, first_name_user, login_user, pswd_user) VALUES ("'.$name_user.'", "'.$first_name_user.'","'.$login_user.'", "'.$pswd_user.'")');


// recuperation 
$recup = $bdd->query('SELECT * FROM user');
while ($donnees = $recup->fetch())
echo $donnees['name_user']. ' ' . $donnees['first_name_user']. ' ' . $donnees['login_user']. ' 
' . $donnees['pswd_user'];

//requete classique 

try { 
    $reponse = $bdd->query('SELECT * FROM user');

while ($donnees = $reponse->fetch()){
    echo '<p>'.$donnees['name_user'].'</p>';
    // echo '<p>'.$donnees['first_name_user'].'</p>';
    // echo '<p>'.$donnees['login_user'].'</p>';
    // echo '<p>'.$donnees['pswd_user'].'</p>'
    ;}
;}

catch(Exception $e){
die('Erreur : '.$e->getMessage());}


// requete select pour afficher les comptes utilisateurs

    $req = $bdd->prepare('SELECT * FROM user where name_user= :name_user');
    $req->execute(array('name_user' => iconv("UTF-8", "ISO-8859-1//TRANSLIT",$name_user),));
    while ($donnees = $reponse->fetch()){echo '<p>'.$donnees['name_user'].'</p>';}




?>

</body>
</html>