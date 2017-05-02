<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\PresentationModel;

class PresentationController extends \W\Controller\Controller
{
    public function index()
    {
        $this->allowTo('1'); //Instancie uniquement les admin a acceder à cette page
        $presentation_manager = new PresentationModel(); //Instancie la classe pour générer mes articles en BDD
        $presentation = $presentation_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
        $this->show('presentation/index', ['presentation' => $presentation]); //Injecte la variable articles dans ma vue
    }

    public function update($presentation_id)
    {
        $this->allowTo('1'); //Instancie uniquement les admin a acceder à cette page
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
                }
            }
        $this->show('presentation/update', ['presentation' => $presentation]);
    }
}
