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
                    $this->redirectToRoute('display_index');
                } else {
                    echo "Vous ne pouvez pas vous connecter";
                }
            }
            $this->show('security/login');

    }

    public function index(){
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 2) {
            $user_manager = new UserModel();
            $users = $user_manager->findAll(); // récupère tous les articles en bdd (SELECT * FROM articles)
            $this->show('security/index', ['users' => $users]); // j'injecte la variable articles dans la vue
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
    }


    //Login de l'utilisateur
    public function register()
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 2) {
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

                if (strlen($user_password) < 5 ) {
                    $errors['user_passwordlenght'] =  "Le mot de passe est trop court (minimum 5 caractères)";
                }
                if ($user_password !== $user_cfpassword ) {
                    $errors['user_password'] =  "Les mots de passe ne correspondent pas";
                }

                if (empty ($errors)) {
                    //Instancier $auhentificationmodel qui facilite la gestion de l'auth. des usagers
                    //Si il n'y a pas d'erreur on inscrit l'usager en BDD
                    $authentification_manager = new \W\Security\AuthentificationModel();

                    $users = $user_manager->insert([
                        'user_firstname' => $user_firstname,
                        'user_lastname' => $user_lastname,
                        'user_email' => $user_email,
                        'user_password' => $authentification_manager->hashPassword($user_password),
                        'user_status' => '1',
                        ]);
                        $this->redirectToRoute('security_view', ['id' => $users['user_id']]);
                        $messages = ['success' => 'Vous êtes bien inscrit'];
                    } else {
                        $messages = $errors;
                    }
                }
                $this->show('security/register', ['messages' => $messages, 'user_email' => $user_email, 'user_password' => $user_password]);
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
    }


    public function edit($id){
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 2) {
            $messages = '';
            $user_manager = new UserModel();
            $users = $user_manager->find($id);
            if (!empty($_POST)) {
                $user_firstname = trim($_POST['user_firstname']);
                $user_lastname = trim($_POST['user_lastname']);
                $user_email = trim($_POST['user_email']);
                $errors = []; //tableau vide


                if (empty($user_firstname)) {
                    $errors['user_firstname'] =  "Le prénom est vide ou invalide.";
                }
                if (empty($user_lastname)) {
                    $errors['user_lastname'] =  "Le nom est vide ou invalide.";
                }
                if (empty($user_email) || !filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                    $errors['user_email'] =  "L'email est vide ou invalide.";
                }

                if (empty($errors)) {
                    $authentification_manager = new \W\Security\AuthentificationModel();
                    $user = $user_manager->update([
                        'user_firstname' => $user_firstname,
                        'user_lastname' => $user_lastname,
                        'user_email' => $user_email,
                    ], $id); // Requête SQL pour mettre à jour un article
                    $this->redirectToRoute('security_view', ['id' => $users['user_id']]);
                } else {
                    $messages = $errors;
                }
            }
            $this->show('security/edit', ['users' => $users, 'messages' => $messages]);
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
    }

    public function edituser($id){
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $messages = '';
            $user_manager = new UserModel();
            $users = $user_manager->find($id);

            if (!empty($_POST)) {
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
                if (empty($user_email) || !filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                    $errors['user_email'] =  "L'email est vide ou invalide.";
                }
                if ($user_password !== $user_cfpassword ) {
                    $errors['user_password'] =  "Les mots de passe ne correspondent pas";
                }
                if (strlen($user_password) < 5 ) {
                    $errors['user_passwordlenght'] =  "Le mot de passe est trop court (minimum 5 caractères)";
                }
                if (empty($errors)) {
                    $authentification_manager = new \W\Security\AuthentificationModel();

                    $user = $user_manager->update([
                        'user_firstname' => $user_firstname,
                        'user_lastname' => $user_lastname,
                        'user_email' => $user_email,
                        'user_password' => $authentification_manager->hashPassword($user_password),
                    ], $id); // Requête SQL pour mettre à jour un article
                    $this->redirectToRoute('security_view', ['id' => $users['user_id']]);
                } else {
                    $messages = $errors;
                }
            }
            $this->show('security/edituser', ['users' => $users, 'messages' => $messages]);
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }


    }

    public function view($id){
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $user_manager = new UserModel();
            $users = $user_manager->find($id);
            $this->show('security/view', ['users' => $users]); // j'injecte la variable articles dans la vue
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
	}

    //Déconnexion de l'usager
    public function logout()
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $authentification_manager = new \W\Security\AuthentificationModel();
            $authentification_manager->logUserOut(); //Déconnecte l'usager connecté
            $this->redirectToRoute('default_home');
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
    }

    public function delete($id){
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 2) {
            $user_manager = new UserModel();
            $user_manager->delete($id); // supprime l'article de la base de données
            $this->redirectToRoute('security_index'); // Après suppression je redirige l'utilisateur vers la liste des articles
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
	}
    //Mot de passe oublié
    public function forget()
    {
        $user_email = null;
        $user_manager = new UserModel();
        // $users = $user_manager->getUserByUsernameOrEmail($_POST['user_email']);
        if (!empty($_POST) && isset($_POST['forgetSend'])) { // On vérifie le 1er formulaire qui doit envoyer le mail avec un lien pour redéfinir le password
            $user_email = $_POST['user_email'];
            if ($users = $user_manager->getUserByUsernameOrEmail($_POST['user_email'])) {
                // Créer un token_forget et date_forget dans la bdd
                $token_forget = md5(time() . uniqid()); // Le token
                // echo strtotime(date('Y-m-d h:i:s') . ' +1 month');
                $date_forget = date('Y-m-d h:i:s', time() + 3600 * 24); // Date d'expiration du token
                // J'envoie le token et sa date d'expiration dans la bdd pour l'utilisateur
                $users = $user_manager->update([
                    'token_forget'=> $token_forget,
                    'date_forget' => $date_forget
                ], $users['user_id']);

                echo "Voici le lien vous permettant de redéfinir votre mot de passe : <a href='http://localhost/csv/public/security/forget?token=".$token_forget."'>http://localhost/csv/public/security/forget?token=".$token_forget."</a>";

            } else {
                echo 'L\'email n\'existe pas';
            }

        }

        if (!empty($_POST) && isset($_POST['forgetPassword'])) {
            $token = $_GET['token'];
            $user_password = $_POST['user_password'];
            $cfpassword = $_POST['cfpassword'];

            if ($user_manager->isValidToken($token)) {
                if ($user_password == $cfpassword) { // Je vérifie que les deux champs mot de passe soient identiques
                    $user_manager->changeUserPassword($this->getUser()['user_id'], $user_password);
                    // Renvoyer un mail
                }
            } else {
                echo "Le token a expiré ou n'existe pas.";
            }
        }
            $this->show('security/forget');
        }

        public function change(){

            $user_manager = new UserModel();
            $profil = $user_manager->find($this->getUser()['user_id']);
            $errors = [];
            $user_password  = null;
            $message   = null;

            // Traitement du formulaire pour changer le mot de passe
            if (isset($_POST['button-password'])) {
              $user_id = $profil['user_id'];
              $user_password   = trim($_POST['user_password']);
              $cfpassword = trim($_POST['cfpassword']);

              if ( $user_password != $cfpassword ) {
                $errors['user_password'] = "Les mots de passe ne correspondent pas";
              }

              // S'il n'y a pas d'erreurs on change le mot de passe de l'utilisateur
              if(empty($errors)) {
                $auth_manager = new \W\Security\AuthentificationModel();
                $user_manager->update(['user_password' => $auth_manager->hashPassword($user_password)], $id);

                $message = ["Vous etes bien inscris"];
              }
              else {
                $message = $errors;
              }

            }
        		$this->show('security/change');

            }

    }
