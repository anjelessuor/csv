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
            echo "Vous n'êtes pas autorisé à accéder à cette section";
        }
    }
    //Page de création des articles
    public function update($ages_id)
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $ages_manager = new AgesModel();
            $ages = $ages_manager->find($ages_id);

            if (!empty($_POST)) {
                $ages_name = $_POST['ages_name'];
                $ages_description = $_POST['ages_description'];

                if (!empty($_POST)) {
                    $ages = $ages_manager->update([
                        'ages_name' => $ages_name,
                        'ages_description' => $ages_description,
                    ], $ages_id); //Requête de mise à jour
                    $this->redirectToRoute('ages_view', ['ages_id' => $ages['ages_id']]);
                }
            }
            $this->show('ages/update', ['ages' => $ages]);
        } else {
            echo "Vous n'êtes pas autorisé à accéder à cette section";
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
            echo "Vous n'êtes pas autorisé à accéder à cette section";
        }
    }
}
