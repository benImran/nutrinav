<?php
require_once "Connect.php";

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 01/05/2017
 * Time: 18:43
 */
class Connexion
{

    //attribut privée

    /**
     * @return mixed
     */
    private $email;
    private $pass;
    private $bdd;

    public function __construct($email, $pass)
    {
        $this->setEmail($email);
        $this->setPass($pass);
        $this->bdd = Connect::getPdo();

    }

    public function verif()
    {
        $sql = "SELECT
                 email,
                 pass
                 FROM
                 panel
                 WHERE
                 email = :email";

        $requete = $this->bdd->prepare($sql);

        $requete->execute([
            'email' => $this->email

        ]);

        $reponse= $requete->fetch();
        if($reponse)
        {
            if(($_POST['pass']) === $reponse['pass'])
            {
                return "ok";
            }
            else
            {
                return "Mot de passe incorrect";
            }
        }
        else
        {
            return "Le pseudo est inexistant";
        }

    }

    public function session()
    {
        $requete = $this->bdd->prepare("SELECT id FROM panel WHERE email = :email ");
        $requete->execute(array('email'=> $this->email));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['email'] = $this->email;

        return 1;
    }
    /*===============================getter et setter================================*/
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
