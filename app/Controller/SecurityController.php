<?php
namespace Controller;
use \W\Controller\Controller;
use Model\UserModel;

// a ajouter :
// si l'utilisateur loggé est 1 ou 2 lui donner les autorisations nécessaires
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

            } //$this->redirectToRoute('security_index');
        }
        $this->show('Security/login');
    }

    public function index(){
        //$this->allowTo('2');
        $user_manager = new UserModel();
        $users = $user_manager->findAll(); // récupère tous les articles en bdd (SELECT * FROM articles)
        $this->show('security/index', ['users' => $users]); // j'injecte la variable articles dans la vue
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
            $user_firstname = trim($_POST['user_firstname']);
            $user_lastname = trim($_POST['user_lastname']);
            $user_email = trim($_POST['user_email']);
            $user_password = trim($_POST['user_password']);
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

    public function edit($id){
        //$this->allowTo('admin');
        $user_manager = new UserModel();
        $users = $user_manager->find($id);

        if (!empty($_POST)) {
            $users_firstname = $_POST['users_firstname'];
            $users_lastname = $_POST['users_lastname'];
            $users_email = $_POST['users_email'];
            $users_status = $_POST['users_status'];
            $activities_3to5 = isset($_POST['activities_3to5']) ? $_POST['activities_3to5'] : 0;
            $activities_6to12 = isset($_POST['activities_6to12']) ? $_POST['activities_6to12'] : 0;
            $activities_12to16 = isset($_POST['activities_12to16']) ? $_POST['activities_12to16'] : 0;
            $activities_16to25 = isset($_POST['activities_16to25']) ? $_POST['activities_16to25'] : 0;
            $activities_adults = isset($_POST['activities_adults']) ? $_POST['activities_adults'] : 0;

            if (!empty($_POST)) {
                $activities = $activities_manager->update([
                    'activities_title' => $activities_title,
                    'activities_description' => $activities_description,
                    'activities_3to5' => $activities_3to5,
                    'activities_6to12' => $activities_6to12,
                    'activities_12to16' => $activities_12to16,
                    'activities_16to25' => $activities_16to25,
                    'activities_adults' => $activities_adults,
                ], $id); // Requête SQL pour mettre à jour un article
                $this->redirectToRoute('activities_view', ['id' => $activities['activities_id']]);
            }
        }
        $this->show('activities/edit', ['activities' => $activities]);
    }


    //Déconnexion de l'usager
    public function logout()
    {
        $authentification_manager = new \W\Security\AuthentificationModel();
        $authentification_manager->logUserOut(); //Déconnecte l'usager connecté
        $this->redirectToRoute('default_home');
    }
}
