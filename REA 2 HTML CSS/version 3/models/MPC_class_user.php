<?php
class User extends Model
{
    /*-----------------------
                Attributs
        ------------------------*/
    private $id_user;
    private $name_user;
    private $first_name_user;
    private $pseudo_user;
    private $mail_user;
    private $password_user;

    /*-----------------------
                constructeur
        ------------------------*/
    //constructeur (vide)
    public function __construct()
    {
    }

    /*-----------------------
            getter and setter
        ------------------------*/
    //getter id
    public function getIdUser()
    {
        return $this->id_User;
    }
    //set id
    public function setIdUser($newId)
    {
        $this->id_user = $newId;
    }
    //getter name
    public function getNameUser()
    {
        return $this->name_user;
    }
    //set name
    public function setNameUser($newName)
    {
        $this->name_user = $newName;
    }
    //getter first_name
    public function getFirstNameUser()
    {
        return $this->first_name_user;
    }
    //set first_name
    public function setFirstNameUser($newFirstName)
    {
        $this->first_name_user = $newFirstName;
    }
    //getter pseudo_user
    public function getPseudoUser()
    {
        return $this->pseudo_user;
    }
    //set pseudo_user
    public function setPseudoUser($newPseudoUser)
    {
        $this->pseudo_user = $newPseudoUser;
    }

    //getter mail
    public function getMailUser()
    {
        return $this->mail_user;
    }
    //set mail
    public function setMailUser($newMail)
    {
        $this->mail_user = $newMail;
    }
    //getter password
    public function getPasswordUser()
    {
        return $this->password_user;
    }
    //set password
    public function setPasswordUser($newPassword)
    {
        $this->password_user = $newPassword;
    }
    /*-----------------------
                Méthodes
        ------------------------*/
    //Création d'un user (insert)
    public function createUser($bdd)
    {
        $nom = $this->name_user;
        $prenom = $this->first_name_user;
        $pseudo = $this->pseudo_user;
        $mail = $this->mail_user;
        $mdp = $this->password_user;
        try {
            //requête ajout d'un utilisateur
            $req = $bdd->prepare('INSERT INTO user(name_user, first_name_user, pseudo_user, mail_user, password_user) 
                VALUES (:name_user, :first_name_user, :pseudo_user, :mail_user, :password_user)');
            //éxécution de la requête SQL
            $req->execute(array(
                'name_user' => $nom,
                'first_name_user' => $prenom,
                'mail_user' => $mail,
                'pseudo_user' => $pseudo,
                'password_user' => $mdp,
            ));
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }
    //Mise à jour d'un user (update) en cours de dev
    public function updateUser($bdd, $id)
    {
        $nom = $this->name_user;
        $prenom = $this->first_name_user;
        $pseudo = $this->pseudo_user;
        $mail = $this->mail_user;
        $mdp = $this->password_user;
        try {
            //requête udpate d'un user
            $req = $bdd->prepare('req');
            //éxécution de la requête SQL
            $req->execute(array(
                'name_user' => $nom,
                'first_name_user' => $prenom,
                'pseudo_user' => $pseudo,
                'mail_user' => $mail,
                'mdp_user' => $mdp,
            ));
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }
    //Suppression d'un user (delete) 
    public function deleteUser($bdd, $id)
    {
        try {
            //requête delete d'un user
            $req = $bdd->prepare('req');
            //éxécution de la requête SQL
            $req->execute(array(
                'id_user' => $id,
            ));
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }
    //Affichage d'un user (select)
    //Affichage de tous les user (select)
    //connexion
    public function connectUser($bdd)
    {
        $mail = $this->mail_user;
        $password = md5($this->password_user);
        try {
            //requête pour stocker le contenu de toute la table le contenu est stocké dans le tableau $reponse
            $reponse = $bdd->query('SELECT * FROM user WHERE mail_user = "' . $mail . '" AND password_user = 
                "' . $password . '" LIMIT 1');
            //parcours du résultat de la requête
            while ($donnees = $reponse->fetch()) {
                $id = $donnees['id_user'];
                //return $donnees['pswd_user'];
                if ($mail == $donnees['mail_user'] and $password == $donnees['password_user']) {
                    //retourne true si il existe
                    return true;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }
    //get id (user)
    public function connectUser2($bdd)
    {
        $mail = $this->mail_user;
        $password = md5($this->password_user);
        try {
            //requête pour stocker le contenu de toute la table le contenu est stocké dans le tableau $reponse
            $reponse = $bdd->query('SELECT * FROM user WHERE mail_user = "' . $mail . '" AND password_user = 
                "' . $password . '" LIMIT 1');
            //parcours du résultat de la requête
            while ($donnees = $reponse->fetch()) {
                //return $donnees['mdp_user'];
                if ($mail == $donnees['mail_user'] and $password == $donnees['password_user']) {
                    $id = $donnees['id_user'];
                    //retourne true si il existe
                    return $id;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }
    //generate super globale
    public function generateSuperGlob()
    {
        $_SESSION['connected'] = true;
        $_SESSION['mail_user'] = $this->mail_user;
    }
}
