<?php

use App\Core\Form;

require('Db.php');
require('Model.php');
require('Form.php');

class users extends Model
{
    protected $id;
    protected $email;
    protected $password;

    public function __construct()
    {
        $this->table = 'users';
    }

    public function findOneByEmail(string $email): self
    {
        global $db;
        $req = "SELECT * FROM users WHERE email = '$email'";
        $stmt = $db->prepare($req);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }

    public function register()
    {
        if (Form::validate($_POST, ['email', 'password'])) {
            //formulaire valide
            $email = strip_tags($_POST['email']);
            $pass = password_hash($_POST['password'], PASSWORD_ARGON2I);

            $user = new Users;
            $user->setEmail($email);
            $user->setPassword($pass);
            $user->create($user);
        }

        $form = new Form;

        $form->debutForm()
            ->ajoutLableFor('email', 'E-mail :')
            ->ajoutInput('email', 'email', ['id' => 'email', 'class' => 'form-control'])
            ->ajoutLableFor('pass', 'Mot de passe :')
            ->ajoutInput('password', 'password', ['id' => 'pass', 'class' => 'form-control'])
            ->ajoutBouton('M\'inscrire', ['type' => 'submit', 'class' => 'btn btn-primary'])
            ->finForm();

        header('Location: ../../index.php');
    }



    public function setSession()
    {
        $_SESSION['user'] = [
            'id' => $this->id,
            'email' => $this->email
        ];
    }


    public function requete(string $sql, array $attributs = null)
    {
        // On récupère l'instance de Db 
        $this->db = Db::getInstance();

        // On vérifie si on a des attributs
        if ($attributs !== null) {
            // Requête préparée
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;
        } else {
            // Requête simple
            return $this->db->query($sql);
        }
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
