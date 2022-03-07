<?php
class User_rights extends Model{
    
    private $id_user_rights;
    private $name_user_rights;
   
 

    public function __construct($id_user_rights,$name_user_rights){
        $this->id_user_rights = $id_user_rights;
        $this->name_user_rights = $name_user_rights;
          }

    public function getid_user_rights(){return $this->id_user_rights;}
    public function setid_user_rights($id_user_rights){$this->id_user_rights = $id_user_rights;}

    public function getname_user_rights(){return $this->name_user_rights;}
    public function setname_user_rights($name_user_rights){$this->name_user_rights = $name_user_rights;}

  }