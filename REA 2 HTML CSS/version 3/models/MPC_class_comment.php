<?php
class Comment extends Model
{

    private $id_comment;
    private $subject_comment;
    private $date_comment;

    public function __construct($id_comment, $subject_comment)
    {
        $this->id_comment = $id_comment;
        $this->subject_comment = $subject_comment;
    }

    public function getid_comment()
    {
        return $this->id_comment;
    }
    public function setid_comment($id_comment)
    {
        $this->id_comment = $id_comment;
    }

    public function getsubject_comment()
    {
        return $this->subject_comment;
    }
    public function setsubject_comment($subject_comment)
    {
        $this->subject_comment = $subject_comment;
    }

    public function getdate_comment()
    {
        return $this->date_comment;
    }
    public function setdate_comment($date_comment)
    {
        $this->date_comment = $date_comment;
    }

    /*-----------------------
                Méthodes
        ------------------------*/
    //Création d'un comment (insert)
    public function create_comment($bdd)
    {
        $subject = $this->subject_comment;
        $date = $this->date_comment;


        try {
            //requête ajout d'une recette
            $req = $bdd->prepare('INSERT INTO comment(subject_comment, date_comment) 
                VALUES (:subject_comment, :date_comment)');
            $req->execute([
                'subject_comment' => $subject,
                'date_comment' => $date
            ]);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    //Mise à jour d'un comment (update) 
    public function update_comment($bdd, $id)
    {
        $subject = $this->subject_comment;
        $date = $this->date_comment;

        try {
            //requête udpate d'un comment
            $req = $bdd->prepare('req');
            //éxécution de la requête SQL
            $req->execute([
                'subject_comment' => $subject,
                'date_comment' => $date
            ]);
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }
    //Suppression d'un comment (delete) 
    public function delete_comment($bdd, $id)
    {
        try {
            //requête delete d'un comment
            $req = $bdd->prepare('req');
            //éxécution de la requête SQL
            $req->execute([
                'id_comment' => $id
            ]);
        } catch (Exception $e) {
            //affichage d'une exception en cas d’erreur
            die('Erreur : ' . $e->getMessage());
        }
    }

    //Affichage d'un comment (select)

    public function select_comment($bdd)
    {
        $instruction = $this->subject_comment;
        try {
            //requête pour stocker le contenu de toute la table le 
            //contenu est stocké dans le tableau $reponse
            $reponse = $bdd->query('SELECT * FROM comment WHERE subject_comment = $subject');
            //parcours du résultat de la requête
            while ($donnees = $reponse->fetch()) {
                $id = $donnees['id_comment'];

                //return $donnees['subject_comment'];

                if ($reponse == $donnees['subject_comment']) {
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
}
