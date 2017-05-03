<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\PresentationModel;
use \Model\UserModel;

class PresentationController extends \W\Controller\Controller
{
    public function index()
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $presentation_manager = new PresentationModel(); //Instancie la classe pour générer mes articles en BDD
            $presentation = $presentation_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
            $this->show('presentation/index', ['presentation' => $presentation]); //Injecte la variable articles dans ma vue
        } else {
            echo "Vous n'êtes pas autorisé à accéder à cette section";
        }
    }

    public function update($presentation_id)
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $presentation_manager = new PresentationModel();
            $presentation = $presentation_manager->find($presentation_id);

            if (!empty($_POST)) {
                $presentation_name = $_POST['presentation_name'];
                $presentation_description = $_POST['presentation_description'];

                if (!empty($_POST)) {
                    $presentation = $presentation_manager->update([
                        'presentation_name' => $presentation_name,
                        'presentation_description' => $presentation_description,
                    ], $presentation_id);
                    $this->redirectToRoute('presentation_view', ['id' => $presentation['presentation_id']]);
                }
            }
            $this->show('presentation/update', ['presentation' => $presentation]);
        } else {
            echo "Vous n'êtes pas autorisé à accéder à cette section";
        }
    }

    public function view($presentation_id){
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $presentation_manager = new PresentationModel();
            $presentation = $presentation_manager->find($presentation_id);
            $this->show('presentation/view', ['presentation' => $presentation]);
        } else {
            echo "Vous n'êtes pas autorisé à accéder à cette section";
        }
    }

    
}
