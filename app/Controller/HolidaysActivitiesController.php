<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\HolidaysActivitiesModel;
use \Model\UserModel;


class HolidaysActivitiesController extends Controller
{
	// page qui liste les activités
	public function index(){
		$user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$h_activities_manager = new HolidaysActivitiesModel(); // instancie la class pour gérer les articles en bdd
			$h_activities = $h_activities_manager->findAllByAge(); // récupère tous les articles en bdd (SELECT * FROM articles)
			$this->show('h_activities/index', ['h_activities' => $h_activities]); // j'injecte la variable articles dans la vue
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}

	// page de création des activités
	public function create()
	{
		//var_dump($_POST);
		$user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$messages = '';
			if (!empty($_POST)) {
				$h_activities_title = $_POST['h_activities_title'];
				$h_activities_description = $_POST['h_activities_description'];
				$h_activities_price = $_POST['h_activities_price'];
				$h_activities_3to5 = isset($_POST['h_activities_3to5']) ? $_POST['h_activities_3to5'] : 0;
				$h_activities_6to12 = isset($_POST['h_activities_6to12']) ? $_POST['h_activities_6to12'] : 0;
				$h_activities_12to16 = isset($_POST['h_activities_12to16']) ? $_POST['h_activities_12to16'] : 0;
				$h_activities_16to25 = isset($_POST['h_activities_16to25']) ? $_POST['h_activities_16to25'] : 0;
				$h_activities_adults = isset($_POST['h_activities_adults']) ? $_POST['h_activities_adults'] : 0;
				$errors = []; //tableau vide

				if (empty($h_activities_title) || strlen($h_activities_title) < 3) {
					$errors['h_activities_title'] =  "Le titre est vide ou invalide (3 caratères minimum).";
				}
				if (empty($h_activities_description) || strlen($h_activities_description) < 3) {
					$errors['h_activities_description'] =  "La description est vide ou invalide (3 caratères minimum).";
				}
				if (empty($h_activities_price) || strlen($h_activities_price) < 3) {
					$errors['h_activities_price'] =  "Le prix est vide ou invalide (3 caratères minimum).";
				}

				$h_activities_manager = new HolidaysActivitiesModel(); // instancie la class pour gérer les articles en bdd
				if (empty($errors)) {
					$h_activities = $h_activities_manager->insert([
						'h_activities_title' => $h_activities_title,
						'h_activities_description' => $h_activities_description,
						'h_activities_price' => $h_activities_price,
						'h_activities_3to5' => $h_activities_3to5,
						'h_activities_6to12' => $h_activities_6to12,
						'h_activities_12to16' => $h_activities_12to16,
						'h_activities_16to25' => $h_activities_16to25,
						'h_activities_adults' => $h_activities_adults,
					]);
					$this->redirectToRoute('h_activities_view', ['id' => $h_activities['h_activities_id']]);
				} else {
					$messages = $errors;
				}
			}
			$this->show('h_activities/create', ['messages' => $messages]);
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}

	public function delete($id){
		$user_manager = new UserModel();
		$user = $this->getUser();
		if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$h_activities_manager = new HolidaysActivitiesModel(); // instancie la class pour gérer les articles en bdd
			$h_activities_manager->delete($id); // supprime l'article de la base de données
			$this->redirectToRoute('h_activities_index'); // Après suppression je redirige l'utilisateur vers la liste des articles
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}

	public function view($id){
		$user_manager = new UserModel();
		$user = $this->getUser();
		if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$h_activities_manager = new HolidaysActivitiesModel(); // instancie la class pour gérer les articles en bdd
			$h_activities = $h_activities_manager->find($id);
			$this->show('h_activities/view', ['h_activities' => $h_activities]);
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}

	public function edit($id){
		$user_manager = new UserModel();
		$user = $this->getUser();
		if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$messages = '';

			$h_activities_manager = new HolidaysActivitiesModel(); // instancie la class pour gérer les articles en bdd
			$h_activities = $h_activities_manager->find($id);

			if (!empty($_POST)) {
				$h_activities_title = $_POST['h_activities_title'];
				$h_activities_description = $_POST['h_activities_description'];
				$h_activities_price = $_POST['h_activities_price'];
				$h_activities_3to5 = isset($_POST['h_activities_3to5']) ? $_POST['h_activities_3to5'] : 0;
				$h_activities_6to12 = isset($_POST['h_activities_6to12']) ? $_POST['h_activities_6to12'] : 0;
				$h_activities_12to16 = isset($_POST['h_activities_12to16']) ? $_POST['h_activities_12to16'] : 0;
				$h_activities_16to25 = isset($_POST['h_activities_16to25']) ? $_POST['h_activities_16to25'] : 0;
				$h_activities_adults = isset($_POST['h_activities_adults']) ? $_POST['h_activities_adults'] : 0;
				$errors = []; //tableau vide

				if (empty($h_activities_title) || strlen($h_activities_title) < 3) {
					$errors['h_activities_title'] =  "Le titre est vide ou invalide (3 caratères minimum).";
				}
				if (empty($h_activities_description) || strlen($h_activities_description) < 3) {
					$errors['h_activities_description'] =  "La description est vide ou invalide (3 caratères minimum).";
				}
				if (empty($h_activities_price) || strlen($h_activities_price) < 3) {
					$errors['h_activities_price'] =  "Le prix est vide ou invalide (3 caratères minimum).";
				}

				if (empty($errors)) {
					$h_activities = $h_activities_manager->update([
						'h_activities_title' => $h_activities_title,
						'h_activities_description' => $h_activities_description,
						'h_activities_price' => $h_activities_price,
						'h_activities_3to5' => $h_activities_3to5,
						'h_activities_6to12' => $h_activities_6to12,
						'h_activities_12to16' => $h_activities_12to16,
						'h_activities_16to25' => $h_activities_16to25,
						'h_activities_adults' => $h_activities_adults,
					], $id); // Requête SQL pour mettre à jour un article
					$this->redirectToRoute('h_activities_view', ['id' => $h_activities['h_activities_id']]);
				} else {
					$messages = $errors;
				}
			}
			$this->show('h_activities/edit', ['messages' => $messages, 'h_activities' => $h_activities]);
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}
}
 ?>
