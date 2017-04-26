<?php
namespace Controller;
use \W\Controller\Controller;
use Model\UserModel;


class SecurityController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $authentification_manager = new \W\Security\AuthentificationModel();

            $user_id = $authentification_manager->isValidLoginInfo($user_email, $user_password);

            if ($user_id){ //Si le couple username/password est valide
                $user_manager = new UserModel();
                $user = $user_manager->find($user_id); //Récupère toutes les infos utilisateur
                $authentification_manager->logUserIn($user); //La connexion se fait
                //$this->redirectToRoute('security_register');
            }
        }
        $this->show('Security/login');
    }

    //Login de l'utilisateur
    public function register()
    {
        //Si formulaire n'est pas rempli
        $user_firstname = '';
        $user_lastname = '';
        $user_email = '';
        $user_password = '';
        $user_cfpassword = '';
        $messages = '';

        $user_manager = new UserModel();
        //Traitement formulaire d'inscription
        if (!empty($_POST)){
            $user_firstname = $_POST['user_firstname'];
            $user_lastname = $_POST['user_lastname'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_cfpassword = trim($_POST['user_cfpassword']);

            $errors = []; //tableau vide
            //On vérifie si l'email existe en BDD
            if ($user_manager->emailExists($user_email)){
                $errors['exists'] =  "L'email existe déjà."; //equivaut à array_push($array, $data)
            }
            if (empty($user_email) || !filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                $errors['user_email'] =  "L'email est vide ou invalide.";
            }
            if ($user_password !== $user_cfpassword ) {
                $errors['user_password'] =  "Les mots de passe ne correspondent pas";
            }

            if (empty ($errors)) {
                //Instancier $auhentificationmodel qui facilite la gestion de l'auth. des usagers
                //Si il n'y a pas d'erreur on inscrit l'usager en BDD
                $authentification_manager = new \W\Security\AuthentificationModel();

                $user_manager->insert([
                    'user_firstname' => $user_firstname,
                    'user_lastname' => $user_lastname,
                    'user_email' => $user_email,
                    'user_password' => $authentification_manager->hashPassword($user_password),
                    'user_status' => '0'
                ]);
                $messages = ['success' => 'Vous êtes bien inscrit'];
                // $this->redirectToRoute('route'); //la fonction s'arrête
            } else {
                $messages = $errors;
            }
        }
        //$this->redirectToRoute('nom_de_la_route');
        $this->show('Security/register', ['messages' => $messages, 'user_email' => $user_email, 'user_password' => $user_password]);
    }
    //Déconnexion de l'usager
    public function logout()
    {
        $authentification_manager = new \W\Security\AuthentificationModel();
        $authentification_manager->logUserOut(); //Déconnecte l'usager connecté
        $this->redirectToRoute('default_home');
    }
}
