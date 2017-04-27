<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\PresentationModel;

class PresentationController extends \W\Controller\Controller
{
    public function index()
    {
        // $this->allowTo('2'); //Instancie uniquement les admin a acceder à cette page
        $presentation_manager = new PresentationModel(); //Instancie la classe pour générer mes articles en BDD
        $presentation = $presentation_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
        $this->show('presentation/index', ['presentation' => $presentation]); //Injecte la variable articles dans ma vue
    }

    public function update($presentation_id)
    {
        $presentation_manager = new PresentationModel();
        $presentation = $presentation_manager->find($presentation_id);
            if (!empty($_POST)) {
                $presentation_description = $_POST['presentation_description'];
                if (!empty($presentation_name) && !empty($presentation_description)) {
                    $presentation = $presentation_manager->update([
                        'presentation_description' => $presentation_description,
                    ], $presentation_id);
                }
            }
        $this->show('presentation/update', ['presentation' => $presentation]);
    }
}
