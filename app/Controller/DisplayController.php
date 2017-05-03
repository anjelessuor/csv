<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\DisplayModel;
use \Model\UserModel;

class DisplayController extends Controller
{

	public function index(){
		$user_manager = new UserModel();
		$user = $this->getUser();
		if ($user['user_status'] == 1 || $user['user_status'] == 2) {
			$display_manager = new DisplayModel();
			$this->show('display/index');
		} else {
			echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
		}


	}
}
 ?>
