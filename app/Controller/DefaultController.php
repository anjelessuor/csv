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
use \Model\ConfigModel;


class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$config_manager = new ConfigModel();
		$config = $config_manager->findAll()[0];

		$events_manager = new EventsModel();
		$events = $events_manager->findAll();

		$presentation_manager = new PresentationModel();
		$presentation = $presentation_manager->findAll();


		$presentation_manager = new PresentationModel();
		$presentation = $presentation_manager->findAll();

		$documents_manager = new DocumentsModel();
		$documents = $documents_manager->findAll();

		$this->show('default/home', ['events' => $events, 'config' => $config, 'presentation'=> $presentation, 'documents' => $documents ]);



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
		$presentation_manager = new PresentationModel();
        $presentation = $presentation_manager->findAll();

		$partners_manager = new PartnersModel();
        $partners = $partners_manager->findAll();

		$this->show('section/qui-sommes-nous', [
			'presentation' => $presentation,
			'partners' => $partners,
		]);
	}

	public function enfance1()
	{
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();

		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();

		$activities_manager = new ActivitiesModel();
		$activities = $activities_manager->findAll();

		$events_manager = new EventsModel();
        $events = $events_manager->findAll();

		$school_manager = new SchoolModel();
		$school = $school_manager->findAll();

		$this->show('section/enfance-3-5', [
			'ages' => $ages[0]["ages_description"],
			'activities' => $activities,
			'h_activities' => $h_activities,
			'events' => $events,
			'school' => $school,
			]);
	}

	public function enfance2()
	{
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();

		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();

		$activities_manager = new ActivitiesModel();
		$activities = $activities_manager->findAll();

		$events_manager = new EventsModel();
        $events = $events_manager->findAll();

		$school_manager = new SchoolModel();
		$school = $school_manager->findAll();

		$this->show('section/enfance-6-12', [
			'ages' => $ages[1]["ages_description"],
			'activities' => $activities,
			'h_activities' => $h_activities,
			'events' => $events,
			'school' => $school,
			]);
	}

	public function enfance3()
	{
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();

		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();

		$activities_manager = new ActivitiesModel();
		$activities = $activities_manager->findAll();

		$events_manager = new EventsModel();
        $events = $events_manager->findAll();

		$school_manager = new SchoolModel();
		$school = $school_manager->findAll();

		$this->show('section/enfance-12-16', [
			'ages' => $ages[2]["ages_description"],
			'activities' => $activities,
			'h_activities' => $h_activities,
			'events' => $events,
			'school' => $school,
			]);
	}

	public function jeunes()
	{
		$ages_manager = new AgesModel();
		$ages = $ages_manager->findAll();

		$h_activities_manager = new HolidaysActivitiesModel();
		$h_activities = $h_activities_manager->findAll();

		$activities_manager = new ActivitiesModel();
		$activities = $activities_manager->findAll();

		$events_manager = new EventsModel();
        $events = $events_manager->findAll();

		$school_manager = new SchoolModel();
		$school = $school_manager->findAll();

		$this->show('section/jeunes', [
			'ages' => $ages[3]["ages_description"],
			'activities' => $activities,
			'h_activities' => $h_activities,
			'events' => $events,
			'school' => $school,
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

		$events_manager = new EventsModel();
        $events = $events_manager->findAll();

		$this->show('section/adultes-et-famille', [
			'ages' => $ages[4]["ages_description"],
			'activities' => $activities,
			'events' => $events,
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

	public function error()
	{
		$this->show('w_errors/404');
	}
}
