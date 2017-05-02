<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ActivitiesModel;


class ActivitiesController extends Controller
{
	// page qui liste les activités
	public function index(){
		$this->allowTo('2');
		$activities_manager = new ActivitiesModel(); // instancie la class pour gérer les articles en bdd
		$activities = $activities_manager->findAllByAge(); // récupère tous les articles en bdd (SELECT * FROM articles)
		$this->show('activities/index', ['activities' => $activities]); // j'injecte la variable articles dans la vue
	}

	// page de création des activités
	public function create()
	{
		//var_dump($_POST);
		//$this->allowTo('2');
		if (!empty($_POST)) {
			$activities_title = $_POST['activities_title'];
			$activities_description = $_POST['activities_description'];
            $activities_3to5 = isset($_POST['activities_3to5']) ? $_POST['activities_3to5'] : 0;
            $activities_6to12 = isset($_POST['activities_6to12']) ? $_POST['activities_6to12'] : 0;
            $activities_12to16 = isset($_POST['activities_12to16']) ? $_POST['activities_12to16'] : 0;
            $activities_16to25 = isset($_POST['activities_16to25']) ? $_POST['activities_16to25'] : 0;
            $activities_adults = isset($_POST['activities_adults']) ? $_POST['activities_adults'] : 0;

			$activities_manager = new ActivitiesModel(); // instancie la class pour gérer les articles en bdd
            if (!empty($activities_title) && !empty($activities_description)) {
				$activities = $activities_manager->insert([
					'activities_title' => $activities_title,
					'activities_description' => $activities_description,
                    'activities_3to5' => $activities_3to5,
                    'activities_6to12' => $activities_6to12,
                    'activities_12to16' => $activities_12to16,
                    'activities_16to25' => $activities_16to25,
                    'activities_adults' => $activities_adults,
				]);
                $this->redirectToRoute('activities_view', ['id' => $activities['activities_id']]);

			}

		}
		$this->show('activities/create');
	}

	public function delete($id){
		$this->allowTo('2');
		$activities_manager = new ActivitiesModel(); // instancie la class pour gérer les articles en bdd
		$activities_manager->delete($id); // supprime l'article de la base de données
		$this->redirectToRoute('activities_index'); // Après suppression je redirige l'utilisateur vers la liste des articles
	}

	public function view($id){
		$activities_manager = new ActivitiesModel(); // instancie la class pour gérer les articles en bdd
		$activities = $activities_manager->find($id);
		$this->show('activities/view', ['activities' => $activities]);
	}

	public function edit($id){
		$this->allowTo('2');
		$activities_manager = new ActivitiesModel(); // instancie la class pour gérer les articles en bdd
    	$activities = $activities_manager->find($id);

		if (!empty($_POST)) {
            $activities_title = $_POST['activities_title'];
			$activities_description = $_POST['activities_description'];
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
}
 ?>
