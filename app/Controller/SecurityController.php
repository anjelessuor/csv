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

            } $this->redirectToRoute('display_index');
        }
        $this->show('Security/login');
    }

    public function index(){
        $this->allowTo('2');
        $user_manager = new UserModel();
        $users = $user_manager->findAll(); // récupère tous les articles en bdd (SELECT * FROM articles)
        $this->show('security/index', ['users' => $users]); // j'injecte la variable articles dans la vue
    }


    //Login de l'utilisateur
    public function register()
    {   $this->allowTo('2');
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

            if (empty($user_firstname)) {
                $errors['user_firstname'] =  "Le prénom est vide ou invalide.";
            }
            if (empty($user_lastname)) {
                $errors['user_lastname'] =  "Le nom est vide ou invalide.";
            }
            //On vérifie si l'email existe en BDD
            if ($user_manager->emailExists($user_email) ){
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
        $this->allowTo('2');
        $user_manager = new UserModel();
        $users = $user_manager->find($id);

        if (!empty($_POST)) {
            $user_firstname = $_POST['user_firstname'];
            $user_lastname = $_POST['user_lastname'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_status = $_POST['user_status'];

            if (!empty($_POST)) {
                $authentification_manager = new \W\Security\AuthentificationModel();
                $user = $user_manager->update([
                    'user_firstname' => $user_firstname,
                    'user_lastname' => $user_lastname,
                    'user_email' => $user_email,
                    'user_password' => $authentification_manager->hashPassword($user_password),
                    'user_status' => $user_status,

                ], $id); // Requête SQL pour mettre à jour un article
                $this->redirectToRoute('security_view', ['id' => $users['user_id']]);
            }
        }
        $this->show('security/edit', ['users' => $users]);
    }

    public function view($id){
		$user_manager = new UserModel();
	    $users = $user_manager->find($id);
		$this->show('security/view', ['users' => $users]); // j'injecte la variable articles dans la vue
	}

    //Déconnexion de l'usager
    public function logout()
    {
        $authentification_manager = new \W\Security\AuthentificationModel();
        $authentification_manager->logUserOut(); //Déconnecte l'usager connecté
        $this->redirectToRoute('security_login');
    }
}
