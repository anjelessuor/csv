<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\EventsModel;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$events_manager = new EventsModel(); //Instancie la classe pour générer mes articles en BDD
		$events = $events_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
		$this->show('default/home', ['events' => $events]);
	}

	public function login()
	{
		$this->show('Security/login');
	}
	public function register()
	{
		$this->show('Security/register');
	}

}
