<?php
class Photo extends Model
{

    private $id_photo;
    private $name_photo;
    private $url_photo;


    public function __construct($id_photo, $name_photo, $url_photo)
    {
        $this->id_photo = $id_photo;
        $this->name_photo = $name_photo;
        $this->url_photo = $url_photo;
    }

    public function getid_photo()
    {
        return $this->id_photo;
    }
    public function setid_photo($id_photo)
    {
        $this->id_photo = $id_photo;
    }

    public function getname_photo()
    {
        return $this->name_photo;
    }
    public function setname_photo($name_photo)
    {
        $this->name_photo = $name_photo;
    }


    public function geturl_photo()
    {
        return $this->url_photo;
    }
    public function seturl_photo($url_photo)
    {
        $this->url_photo = $url_photo;
    }


    //Création d'un photo (insert)
    public function create_photo($bdd)
    {
        $name = $this->name_photo;
        $url = $this->url_photo;

        try {
            //requête ajout d'une recette
            $req = $bdd->prepare('INSERT INTO photo(name_photo, url_photo) 
                    VALUES (:name_photo, :url_photo)');
            $req->execute([
                'name_photo' => $name,
                'url_photo' => $url,
            ]);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
