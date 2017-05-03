<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\SchoolModel;
use \Model\UserModel;

class SchoolController extends Controller
{
	// page qui liste les activités
	public function index(){
		$user_manager = new UserModel();
		$user = $this->getUser();
		if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
			$school = $school_manager->findAllByAge(); // récupère tous les articles en bdd (SELECT * FROM articles)
			$this->show('school/index', ['school' => $school]); // j'injecte la variable articles dans la vue
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}

	// page de création des activités
	public function create()
	{
		$user_manager = new UserModel();
		$user = $this->getUser();
		if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$messages = '';

			if (!empty($_POST)) {
				$school_title = $_POST['school_title'];
				$school_description = $_POST['school_description'];
				$school_3to5 = isset($_POST['school_3to5']) ? $_POST['school_3to5'] : 0;
				$school_6to12 = isset($_POST['school_6to12']) ? $_POST['school_6to12'] : 0;
				$school_12to16 = isset($_POST['school_12to16']) ? $_POST['school_12to16'] : 0;
				$school_16to25 = isset($_POST['school_16to25']) ? $_POST['school_16to25'] : 0;
				$school_adults = isset($_POST['school_adults']) ? $_POST['school_adults'] : 0;
				$errors = []; //tableau vide

				if (empty($school_title) || strlen($school_title) < 3) {
					$errors['school_title'] =  "Le titre est vide ou invalide (3 caratères minimum).";
				}
				if (empty($school_description) || strlen($school_description) < 3) {
					$errors['school_description'] =  "La description est vide ou invalide (3 caratères minimum).";
				}

				$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
				if (empty($errors)) {
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
				} else {
					$messages = $errors;
				}
			}
			$this->show('school/create', ['messages' => $messages]);
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}

	public function delete($id){
		$user_manager = new UserModel();
		$user = $this->getUser();
		if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
			$school_manager->delete($id); // supprime l'article de la base de données
			$this->redirectToRoute('school_index'); // Après suppression je redirige l'utilisateur vers la liste des articles
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}

	public function view($id){
		$user_manager = new UserModel();
		$user = $this->getUser();
		if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$school_manager = new SchoolModel(); // instancie la class pour gérer les articles en bdd
			$school = $school_manager->find($id);
			$this->show('school/view', ['school' => $school]);
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
				$errors = []; //tableau vide

				if (empty($school_title) || strlen($school_title) < 3) {
					$errors['school_title'] =  "Le titre est vide ou invalide (3 caratères minimum).";
				}
				if (empty($school_description) || strlen($school_description) < 3) {
					$errors['school_description'] =  "La description est vide ou invalide (3 caratères minimum).";
				}

				if (empty($errors)) {
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
				} else {
					$messages = $errors;
				}
			}
			$this->show('school/edit', ['messages' => $messages, 'school' => $school]);
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
        }
	}
}
 ?>
