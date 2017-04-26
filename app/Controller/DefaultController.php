<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
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
