<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\AgesModel;
use \Model\UserModel;

class AgesController extends \W\Controller\Controller
{
    public function index()
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $ages_manager = new AgesModel(); //Instancie la classe pour générer mes articles en BDD
            $ages = $ages_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
            $this->show('ages/index', ['ages' => $ages]); //Injecte la variable articles dans ma vue
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
    }
    //Page de création des articles
    public function update($ages_id)
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $messages = '';

            $ages_manager = new AgesModel();
            $ages = $ages_manager->find($ages_id);

            if (!empty($_POST)) {
                $ages_name = $_POST['ages_name'];
                $ages_description = $_POST['ages_description'];
                $errors = []; //tableau vide

                if (empty($ages_name) || strlen($ages_name) < 3) {
                    $errors['ages_name'] =  "Le nom est vide ou invalide (3 caratères minimum).";
                }
                if (empty($ages_description) || strlen($ages_description) < 3) {
                    $errors['ages_description'] =  "La description est vide ou invalide (3 caratères minimum).";
                }

                if (empty($errors)) {
                    $ages = $ages_manager->update([
                        'ages_name' => $ages_name,
                        'ages_description' => $ages_description,
                    ], $ages_id); //Requête de mise à jour
                    $this->redirectToRoute('ages_view', ['ages_id' => $ages['ages_id']]);
                } else {
					$messages = $errors;
				}
            }
            $this->show('ages/update', ['ages' => $ages, 'messages' => $messages]);
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
    }

    public function view($ages_id){
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $ages_manager = new AgesModel();
            $ages = $ages_manager->find($ages_id);
            $this->show('ages/view', ['ages' => $ages]);
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
    }
}
