<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\EventsModel;
use \Model\AgesModel;
use \Model\ActivitiesModel;
use \Model\HolidaysActivitiesModel;
use \Model\DocumentsModel;
use \Model\PartnersModel;
use \Model\PresentationModel;
use \Model\SchoolModel;


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
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();
		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();
		$this->show('section/enfance-3-5', [
			'ages' => $ages[0]["ages_description"],
			'activities' => $activities,
			'h_activities' => $h_activities,
			]);
	}

	public function enfance2()
	{
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();
		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();
		$this->show('section/enfance-6-12', [
			'ages' => $ages[1]["ages_description"],
			'activities' => $activities,
			'h_activities' => $h_activities,
			]);
	}

	public function enfance3()
	{
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();
		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();
		$this->show('section/enfance-12-16', [
			'ages' => $ages[2]["ages_description"],
			'activities' => $activities,
			'h_activities' => $h_activities,
			]);
	}

	public function jeunes()
	{
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();
		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();
		$this->show('section/jeunes', [
			'ages' => $ages[3]["ages_description"],
			'activities' => $activities,
			'h_activities' => $h_activities,
			]);
	}

	public function family()
	{
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();
		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();
		$activities_manager = new ActivitiesModel(); 
		$activities = $activities_manager->findAll();
		$this->show('section/adultes-et-famille', [
			'ages' => $ages[4]["ages_description"],
			'activities' => $activities,
			]);
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
