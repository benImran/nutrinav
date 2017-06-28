<?php
require_once "Connect.php";


class Inscription
{
    private $pass;
    private $confirme_pass;
    private $email;
    private $bdd;

    //On initialise le construct
    public function __construct($pass, $confirme_pass, $email)
    {

        // htmlentities convertit les caractères spéciaux en entités HTML pour la sécurité
        $email  = htmlentities($email);

        // le this est un pointeur
        $this->setPass($pass);
        $this->setConfirmePass($confirme_pass);
        $this->setEmail($email);
        $this->bdd = Connect::getPdo();
    }


    //on fait une fonction pour faire les verif
    public function verif()
    {
        $sql = "SELECT email FROM panel WHERE email = :email";
        $requete = $this->bdd->prepare($sql);
        $requete->execute([
            'email' => $this->email
        ]);

        $reponse = $requete->fetch();

        if($reponse != null)
        {
            return "L'adresse e-mail est déjà prise";
        }
        //avec strlen on calcul la taille de la string et avec la condition on lui demande que le pseudo soit entre 5 et 20 caractère
        if(strlen($this->pass) >= 5 && strlen($this->confirme_pass) <= 20)
        {
            $syntaxe = "#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#";

            //le preg_match effectue une recherche de correspondance
            if(preg_match($syntaxe,$this->email))
            {

                if($this->pass == $this->confirme_pass)
                {
                    return 'Votre compte viens d être créé';
                }
                else
                {
                    return "Le mot de passe doit être identique à la confirmation";
                }
            }
        }
            else{
                return"Le mot de passe doit contenir au moins 5 caractères";
            }

    }


    public function enregistrement()
    {

        $sql =  "INSERT INTO 
                     panel(pass, email) 
                     VALUES (:pass, :email)";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'pass'          => $this->pass,
            'email'         => $this->email
        ));

        return 1;
    }

    public function session()
    {
        $sql = "SELECT id FROM panel WHERE email = :email ";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array('email'=> $this->email));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['email'] = $this->email;

        return 1;
    }

//===========================getter et setter===================================

    // le getter sert à retourné une valeur
    public function getPass()
    {
        return $this->pass;
    }
    // le setter sert à charger la valeur dans la class
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getConfirmePass()
    {
        return $this->confirme_pass;
    }

    public function setConfirmePass($confirme_pass)
    {
        $this->confirme_pass = $confirme_pass;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
