<?php
/*------------------------------
CREATION CLASS UTILISATEUR:
-------------------------------*/

    class User{

        /*------------------------------------------------------------
                                ATTRIBUTS
            -------------------------------------------------------------*/
            private $name_user;  // public = mot-clé qui permet d'accéder à cet élément depuis n'importe où
            private $first_name_user; // $variable qui sont des attributs
            private $email_user;
            private $pseudo_user; //
            private $pswd_user;
            
            /*------------------------------------------------------------
                                CONSTRUCTEUR
            -------------------------------------------------------------*/
        
            // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
            public function __construct($name_user, $first_name_user,$email_user,$pseudo_user, $pswd_user){ // ATTENTION, il y a un double underscore avant construct !!!!!
                //$nom est une variable juste pour la fonction __construct
                $this->name_user = $name_user;
                $this->first_name_user = $first_name_user;
                $this->email_user = $emailuser;
                $this->pseudo_user= $pseudo_user;
                $this->pswd_user = $pswd_user;
                
            }

        /*------------------------------------------------------------
                                GETTERS & SETTERS
            -------------------------------------------------------------*/

            // Get & Set de l'attribut $pseudo
            public function getPseudo(){
                return $this->pseudo_user;
            }
            public function setPseudo($newPseudo){
                $this->pseudo_user = $newPseudo;
            }
            // Get & Set de l'attribut $email
            public function getEmail(){
                return $this->email_user; 
            }
            public function setEmail($newEmail){
                $this->email_user = $newEmail; 
            }

             // Get & Set de l'attribut $first name
             public function getfirst_name_user(){
                return $this->first_name_user; 
            }
            public function setpswd_user($first_name_user){
                $this->first_name_user_ = $new_first_name_user; 
            }

            // Get & Set de l'attribut $pswd
            public function getPswd(){
                return $this->pswd;
            }
            public function setpswd_user($newpswd_user){
                $this->pswd_user_ = $newPswd_user; 
            }
        
            // Get & Set de l'attribut $name
            public function getname_user(){
                return $this->name_user;
            }
            public function setConf_name_user($newname_user){
                $this->name_user = $newname_user;
            }

    }

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS RECIPE PAGE:
-----------------------------------------------------------------------------------------------------*/

    class Recipe_page{

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $name_recipe_page;  
        private $url_recipe_page;
        private $date_recipe_page; 
        private $subject_recipe_page;
    
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($name_recipe_page, $url_recipe_page, $date_recipe_page, $subject_recipe_page){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->name= $name_recipe_page; //$nom est une variable juste pour la fonction __construct
            $this->url = $url_recipe_page;
            $this->date= $date_recipe_page;
            $this-> subject = $subject_recipe_page;              
      
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $name:
        public function getName(){
            return $this->name;
        }
        public function setName($newName){
            $this->name = $newName;
        }
         // Get & Set de l'attribut $url:
         public function getUrl(){
            return $this->url;
        }
        public function setUrl($newUrl){
            $this->url= $newUrl;
        }
       // Get & Set de l'attribut $date:
       public function getDate(){
        return $this->date;
        }
        public function setDate($newDate){
            $this->date= $newDate;
        }
        
        // Get & Set de l'attribut $subject:
        public function getSubject(){
            return $this->Subject;
        }
        public function setUrl($newSubject){
            $this->subject= $newSubject;
        }
    }
    
//-----------------------------------
// a finir de mettre à jour !!!
//---------------------------------------

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS COMMENTAIRES:
-----------------------------------------------------------------------------------------------------*/

class Commentaire {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $titre;  
        private $contenu;
    
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($titre, $contenu){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->titre= $titre; //$nom est une variable juste pour la fonction __construct
            $this->contenu = $contenu;             
      
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $titre:
        public function getTitre(){
            return $this->titre;
        }
        public function setTitre($newTitre){
            $this->titre = $newTitre;
        }
         // Get & Set de l'attribut $contenu:
         public function getContenu(){
            return $this->contenu;
        }
        public function setContenu($newContenu){
            $this->contenu = $newContenu;
        }
       
    }

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS DROITS:
-----------------------------------------------------------------------------------------------------*/

class Droit {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $nom;  
            
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($nom){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->nom= $nom; //$nom est une variable juste pour la fonction __construct          
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $titre:
        public function getNom(){
            return $this->nom;
        }
        public function setNom($newNom){
            $this->nom = $newNom;
        }
           
    }

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS EDITION:
-----------------------------------------------------------------------------------------------------*/

class Edition {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $nom;  
            
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($nom){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->nom= $nom; //$nom est une variable juste pour la fonction __construct          
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $titre:
        public function getNom(){
            return $this->nom;
        }
        public function setNom($newNom){
            $this->nom = $newNom;
        }
           
    }
/*-----------------------------------------------------------------------------------------------------
CREATION CLASS ETATS:
-----------------------------------------------------------------------------------------------------*/

class Etat {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $nom;  
            
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($nom){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->nom= $nom; //$nom est une variable juste pour la fonction __construct          
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $titre:
        public function getNom(){
            return $this->nom;
        }
        public function setNom($newNom){
            $this->nom = $newNom;
        }
           
    }

/*-----------------------------------------------------------------------------------------------------
CREATION CLASS PROFIL:
-----------------------------------------------------------------------------------------------------*/

class Profil {

    /*------------------------------------------------------------
                            ATTRIBUTS
        -------------------------------------------------------------*/
        private $nom;  
            
        /*------------------------------------------------------------
                            CONSTRUCTEUR
        -------------------------------------------------------------*/
    
        // constructeur (pour obliger l'utilisateur à rentrer des données spécifiques)
        public function __construct($nom){ // ATTENTION, il y a un double underscore avant construct !!!!!
            $this->nom= $nom; //$nom est une variable juste pour la fonction __construct          
        }

    /*------------------------------------------------------------
                            GETTERS & SETTERS
        -------------------------------------------------------------*/

        // Get & Set de l'attribut $titre:
        public function getNom(){
            return $this->nom;
        }
        public function setNom($newNom){
            $this->nom = $newNom;
        }
           
    }



?>