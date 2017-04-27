<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\AgesModel;

class AgesController extends \W\Controller\Controller
{
    public function index()
    {
        // $this->allowTo('2'); //Instancie uniquement les admin a acceder à cette page
        $ages_manager = new AgesModel(); //Instancie la classe pour générer mes articles en BDD
        $ages = $ages_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
        $this->show('ages/index', ['ages' => $ages]); //Injecte la variable articles dans ma vue
    }

    public function update($ages_id)
    {
        $ages_manager = new AgesModel();
        $age = $ages_manager->find($ages_id);
            if (!empty($_POST)) {
                $ages_description = $_POST['ages_description'];
                if (!empty($ages_name) && !empty($ages_description)) {
                    $ages = $ages_manager->update([
                        'ages_description' => $ages_description,
                    ], $ages_id);
                }
            }
        $this->show('ages/update', ['age' => $age]);
    }
}
