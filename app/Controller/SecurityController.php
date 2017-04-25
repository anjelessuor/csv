<?php
namespace Controller;
use \W\Controller\Controller;
use Model\UserModel;


class SecurityController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $authentification_manager = new \W\Security\AuthentificationModel();

            $user_id = $authentification_manager->isValidLoginInfo($username, $password);
            if ($user_id){ //Si le couple username/password est valide
                $user_manager = new UserModel();
                $user = $user_manager->find($user_id); //Récupère toutes les infos utilisateur
                $authentification_manager->logUserIn($user); //La connexion se fait
            }
        }
        $this->show('Security/login');
    }

    //Login de l'utilisateur
    public function register()
    {
        //Si formulaire n'est pas rempli
        $username = '';
        $email = '';
        $password = '';
        $cfpassword = '';
        $messages ='';

        //Traitement formulaire d'inscription
        if (!empty($_POST)){
            $username = trim($_POST['username']); //On peut se passer de addslashes grâce à PDO (requête préparée)
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cfpassword = $_POST['cfpassword'];

            $user_manager = new UserModel();
            $errors = []; //tableau vide
            //On vérifie si l'email et l'username existe en BDD
            if ($user_manager->emailExists($email) && $user_manager->usernameExists($username)){
                $errors['exists'] =  "L'email ou l'username exsitent."; //equivaut à array_push($array, $data)
            }
            if (empty($username) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['username'] =  "L'email ou l'username sont vides ou invalides.";
            }
            if ($password !== $cfpassword ) {
                $errors['password'] =  "Les mots de passe ne correspondent pas";
            }

            if (empty ($errors)) {
                //Instancier $auhentificationmodel qui facilite la gestion de l'auth. des usagers
                //Si il n'y a pas d'erreur on inscrit l'usager en BDD
                $authentification_manager = new \W\Security\AuthentificationModel;

                $user_manager->insert([
                    'username' => $username,
                    'email' => $email,
                    'password' => $authentification_manager->hashPassword($password),
                    'role' => 'admin'
                ]);
                $messages = ['success' => 'Vous êtes bien inscrit'];
                // $this->redirectToRoute('route'); //la fonction s'arrête
            } else {
                $messages = $errors;
            }
        }

        $this->show('Security/register', ['messages' => $messages, 'username' => $username, 'email' => $email]);
    }
    //Déconnexion de l'usager
    public function logout()
    {
        $authentification_manager = new \W\Security\AuthentificationModel();
        $authentification_manager->logUserOut(); //Déconnecte l'usager connecté
        $this->redirectToRoute('default_home');
    }
}
