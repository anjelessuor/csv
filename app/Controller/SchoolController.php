<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\SchoolModel;


class SchoolController extends Controller
{
	// page qui liste les activités
	public function index(){
		//$this->allowTo('2');
		$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
		$school = $school_manager->findAllByAge(); // récupère tous les articles en bdd (SELECT * FROM articles)
		$this->show('school/index', ['school' => $school]); // j'injecte la variable articles dans la vue
	}

	// page de création des activités
	public function create()
	{
		//var_dump($_POST);
		//$this->allowTo('2');
		if (!empty($_POST)) {
			$school_title = $_POST['school_title'];
			$school_description = $_POST['school_description'];
            $school_3to5 = isset($_POST['school_3to5']) ? $_POST['school_3to5'] : 0;
            $school_6to12 = isset($_POST['school_6to12']) ? $_POST['school_6to12'] : 0;
            $school_12to16 = isset($_POST['school_12to16']) ? $_POST['school_12to16'] : 0;
            $school_16to25 = isset($_POST['school_16to25']) ? $_POST['school_16to25'] : 0;
            $school_adults = isset($_POST['school_adults']) ? $_POST['school_adults'] : 0;

			$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
            if (!empty($_POST)) {
				$school = $school_manager->insert([
					'school_title' => $school_title,
					'school_description' => $school_description,
                    'school_3to5' => $school_3to5,
                    'school_6to12' => $school_6to12,
                    'school_12to16' => $school_12to16,
                    'school_16to25' => $school_16to25,
                    'school_adults' => $school_adults,
				]);
                $this->redirectToRoute('school_view', ['id' => $school['school_id']]);

			}

		}
		$this->show('school/create');
	}

	public function delete($id){
		//$this->allowTo('2');
		$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
		$school_manager->delete($id); // supprime l'article de la base de données
		$this->redirectToRoute('school_index'); // Après suppression je redirige l'utilisateur vers la liste des articles
	}

	public function view($id){
		$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
		$school = $school_manager->find($id);
		$this->show('school/view', ['school' => $school]);
	}

	public function edit($id){
		//$this->allowTo('admin');
		$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
    		$school = $school_manager->find($id);

		if (!empty($_POST)) {
            $school_title = $_POST['school_title'];
			$school_description = $_POST['school_description'];
            $school_3to5 = isset($_POST['school_3to5']) ? $_POST['school_3to5'] : 0;
            $school_6to12 = isset($_POST['school_6to12']) ? $_POST['school_6to12'] : 0;
            $school_12to16 = isset($_POST['school_12to16']) ? $_POST['school_12to16'] : 0;
            $school_16to25 = isset($_POST['school_16to25']) ? $_POST['school_16to25'] : 0;
            $school_adults = isset($_POST['school_adults']) ? $_POST['school_adults'] : 0;

			if (!empty($_POST)) {
				$school = $school_manager->update([
                    'school_title' => $school_title,
                    'school_description' => $school_description,
                    'school_3to5' => $school_3to5,
                    'school_6to12' => $school_6to12,
                    'school_12to16' => $school_12to16,
                    'school_16to25' => $school_16to25,
                    'school_adults' => $school_adults,
				], $id); // Requête SQL pour mettre à jour un article
                $this->redirectToRoute('school_view', ['id' => $school['school_id']]);
			}
		}
		$this->show('school/edit', ['school' => $school]);
	}
}
 ?>
