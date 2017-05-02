<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\DisplayModel;
use \Model\UserModel;


class DisplayController extends Controller
{
	public function index(){
		$this->allowTo('2');
		$display_manager = new DisplayModel();
		$this->show('display/index');
	}

}
 ?>
