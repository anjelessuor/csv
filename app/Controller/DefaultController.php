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

	public function about()
	{
		$this->show('section/qui-sommes-nous');
	}

	public function enfance1()
	{
		$this->show('section/enfance-3-5');
	}

	public function enfance2()
	{
		$this->show('section/enfance-6-12');
	}

	public function enfance3()
	{
		$this->show('section/enfance-12-16');
	}

	public function jeunes()
	{
		$this->show('section/jeunes');
	}

	public function family()
	{
		$this->show('section/adultes-et-famille');
	}

	public function events()
	{
		$events_manager = new EventsModel(); //Instancie la classe pour générer mes articles en BDD
		$events = $events_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
		$this->show('section/events', ['events' => $events]);
	}

	public function contact()
	{
		$this->show('default/contact');
	}
}
